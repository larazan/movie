<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Slide;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class SlideIndex extends Component
{

    use WithFileUploads, WithPagination;

    public $showSlideModal = false;
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

    protected $rule = [
        'title' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showSlideModal = true;
    }

    public function createSlide()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Slide::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Slide::UPLOAD_DIR);

        Slide::create([
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
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Slide created successfully']);
    }

    public function showEditModal($slideId)
    {
        $this->reset(['title']);
        $this->slideId = $slideId;
        $slide = Slide::find($slideId);
        $this->title = $slide->title;
        $this->body = $slide->body;
        $this->url = $slide->url;
        $this->position = $slide->position;
        $this->oldImage = $slide->small;
        $this->slideStatus = $slide->status;

        $this->showSlideModal = true;
    }
    
    public function updateSlide()
    {
        $slide = Slide::findOrFail($this->slideId);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->slideId) {
            if ($slide) {
               // delete image
			    $this->deleteImage($this->slideId);
                // IMAGE
                $filePath = $this->file->storeAs(Slide::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Slide::UPLOAD_DIR);

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
        $this->showSlideModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Slide updated successfully']);
    }

    public function deleteSlide($slideId)
    {
        $slide = Slide::findOrFail($slideId);
        $slide->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Slide deleted successfully']);
    }

    public function closeSlideModal()
    {
        $this->showSlideModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.slide-index', [
            'slides' => Slide::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Slide::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', Slide::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Slide::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		$extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		$size = explode('x', Slide::EXTRA_LARGE);
		list($width, $height) = $size;

		$extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
			$resizedImage['extra_large'] = $extraLargeImageFilePath;
		}

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $slideImage = Slide::where(['id' => $id])->first();
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

    public function updateTaskOrder($items)
    {
        // dd($items);
        foreach ($items as $item) {
            Slide::find($item['value'])->update(['position' => $item['order']]);
        }

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Slide sorted successfully']);
    }
}
