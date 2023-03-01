<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\ProductSlide;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class ProductSliderIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showProductSlideModal = false;
    public $title;
    public $body;
    public $status;
    public $slideId;
    public $file;
    public $url;
    public $position;
    public $oldImage;
    public $slideStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public function showCreateModal()
    {
        $this->showProductSlideModal = true;
    }

    public function createProductSlide()
    {
        $this->validate([
            'title' => 'required',
            // 'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(ProductSlide::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, ProductSlide::UPLOAD_DIR);

        ProductSlide::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'body' => $this->body,
            'url' => $this->url,
            'position' => $this->position,
            'original' => $filePath,
            'small' => $resizedImage['small'],
            'extra_large' => $resizedImage['extra_large'],
            'status' => $this->slideStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'ProductSlide created successfully']);
    }

    public function showEditModal($slideId)
    {
        $this->reset(['title']);
        $this->slideId = $slideId;
        $slide = ProductSlide::find($slideId);
        $this->title = $slide->title;
        $this->body = $slide->body;
        $this->url = $slide->url;
        $this->position = $slide->position;
        $this->oldImage = $slide->small;
        $this->slideStatus = $slide->status;

        $this->showProductSlideModal = true;
    }
    
    public function updateProductSlide()
    {
        $slide = ProductSlide::findOrFail($this->slideId);
        $this->validate([
            'name' => 'required',
            // 'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->slideId) {
            if ($slide) {
               // delete image
			    $this->deleteImage($this->slideId);
                // IMAGE
                $filePath = $this->file->storeAs(ProductSlide::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, ProductSlide::UPLOAD_DIR);

                $slide->update([
                    'user_id' => Auth::user()->id,
                    'title' => $this->title,
                    'body' => $this->body,
                    'url' => $this->url,
                    'position' => $this->position,
                    'original' => $filePath,
                    'small' => $resizedImage['small'],
                    'extra_large' => $resizedImage['extra_large'],
                    'status' => $this->slideStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showProductSlideModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'ProductSlide updated successfully']);
    }

    public function deleteProductSlide($slideId)
    {
        $slide = ProductSlide::findOrFail($slideId);
        $slide->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'ProductSlide deleted successfully']);
    }

    public function closeProductSlideModal()
    {
        $this->showProductSlideModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.product-slider-index', [
            'slides' => ProductSlide::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', ProductSlide::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', ProductSlide::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', ProductSlide::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		$extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		$size = explode('x', ProductSlide::EXTRA_LARGE);
		list($width, $height) = $size;

		$extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
			$resizedImage['extra_large'] = $extraLargeImageFilePath;
		}

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $slideImage = ProductSlide::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$slideImage->original)) {
            Storage::delete($path.$slideImage->original);
		}
		
        if (Storage::exists($path.$slideImage->small)) {
            Storage::delete($path.$slideImage->small);
        }   

		// if (Storage::exists($path.$slideImage->medium)) {
        //     Storage::delete($path.$slideImage->medium);
        // }

        if (Storage::exists($path.$slideImage->extra_large)) {
            Storage::delete($path.$slideImage->extra_large);
        }
             
        return true;
    }

   
}
