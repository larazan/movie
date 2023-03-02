<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class BrandIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showBrandModal = false;
    public $name;
    public $status;
    public $brandId;
    public $file;
    public $oldImage;
    public $brandStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public function showCreateModal()
    {
        $this->showBrandModal = true;
    }

    public function createBrand()
    {
        $this->validate([
            'name' => 'required',
            // 'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Brand::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Brand::UPLOAD_DIR);
  
        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'origin' => $filePath,
            'small' => $resizedImage['small'],
            'status' => $this->brandStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Brand created successfully']);
    }

    public function showEditModal($brandId)
    {
        $this->reset(['name']);
        $this->brandId = $brandId;
        $brand = Brand::find($brandId);
        $this->name = $brand->name;
        $this->oldImage = $brand->small;
        $this->brandStatus = $brand->status;
        $this->showBrandModal = true;
    }
    
    public function updateBrand()
    {
        $brand = Brand::findOrFail($this->brandId);
        $this->validate([
            'name' => 'required',
            // 'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->brandId) {
            if ($brand) {
               // delete image
			    $this->deleteImage($this->brandId);
                $filePath = $this->file->storeAs(Brand::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Brand::UPLOAD_DIR);

                $brand->update([
                    'name' => $this->name,
                    'slug' => Str::slug($this->name),
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'status' => $this->brandStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showBrandModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Brand updated successfully']);
    }

    public function deleteBrand($brandId)
    {
        $brand = Brand::findOrFail($brandId);
        $brand->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Brand deleted successfully']);
    }

    public function closeBrandModal()
    {
        $this->showBrandModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.brand-index', [
            'brands' => Brand::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Brand::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', Brand::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Brand::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Brand::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $brandImage = Brand::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$brandImage->original)) {
            Storage::delete($path.$brandImage->original);
		}
		
        if (Storage::exists($path.$brandImage->small)) {
            Storage::delete($path.$brandImage->small);
        }   

		if (Storage::exists($path.$brandImage->medium)) {
            Storage::delete($path.$brandImage->medium);
        }

             

        return true;
    }
}
