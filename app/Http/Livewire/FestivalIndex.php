<?php

namespace App\Http\Livewire;

use App\Models\Festival;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\Component;

class FestivalIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showFestivalModal = false;
    public $showFestivalDetailModal = false;
    
    public $title;
    public $body;
    public $date;
    public $country;
    public $url;

    public $file;
    public $festivalId;
    public $oldImage;
    public $festivalStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'date' => 'required',
        'country' => 'required',
        'url' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->date = today()->format('Y-m-d');
    }

    public function showCreateModal()
    {
        $this->showFestivalModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Festival::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Festival deleted successfully']);
    }

    public function createFestival()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();

        $festival = new Festival();
        $festival->title = $this->title;
        $festival->body = $this->body;
        $festival->date = $this->date;
        $festival->country = $this->country;
        $festival->url = $this->url;
        $festival->status = $this->festivalStatus;

        if (!empty($this->file)) {
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Festival::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Festival::UPLOAD_DIR);

            $festival->original = $filePath;
            $festival->small =$resizedImage['small'];
            $festival->medium = $resizedImage['medium'];
        }

        $festival->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Festival created successfully']);
    }

    public function showEditModal($festivalId)
    {
        $this->reset(['name']);
        $this->festivalId = $festivalId;
        $festival = Festival::find($festivalId);
        $this->title = $festival->title;
        $this->body = $festival->body;
        $this->date = $festival->date;
        $this->country = $festival->country;
        $this->url = $festival->url;
        $this->oldImage = $festival->small;
        $this->festivalStatus = $festival->status;
        $this->showFestivalModal = true;
    }
    
    public function updateFestival()
    {
        $this->validate();
        $festival = Festival::findOrFail($this->festivalId);
  
        $new = Str::slug($this->title) . '_' . time();
        
        if ($this->festivalId) {
            if ($festival) {

                $festival = Festival::where('id', $this->festivalId)->first();
                $festival->title = $this->title;
                $festival->body = $this->body;
                $festival->date = $this->date;
                $festival->country = $this->country;
                $festival->url = $this->url;
                $festival->status = $this->festivalStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->festivalId);

                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Festival::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Festival::UPLOAD_DIR);

                    $festival->original = $filePath;
                    $festival->small =$resizedImage['small'];
                    $festival->medium = $resizedImage['medium'];
                }

                $festival->save();
            }
        }

        $this->reset();
        $this->showFestivalModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Festival updated successfully']);
    }

    public function deleteFestival($festivalId)
    {
        $festival = Festival::findOrFail($festivalId);
        $festival->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Festival deleted successfully']);
    }

    public function closeFestivalModal()
    {
        $this->showFestivalModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Festival::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Festival::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Festival::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Festival::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $festivalImage = Festival::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$festivalImage->original)) {
            Storage::delete($path.$festivalImage->original);
		}
		
        if (Storage::exists($path.$festivalImage->small)) {
            Storage::delete($path.$festivalImage->small);
        }   

		if (Storage::exists($path.$festivalImage->medium)) {
            Storage::delete($path.$festivalImage->medium);
        } 

        // if (Storage::exists($path.$festivalImage->large)) {
        //     Storage::delete($path.$festivalImage->large);
        // } 

        return true;
    }

    public function render()
    {
        return view('livewire.festival-index', [
            'festivals' => Festival::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
        ]);
    }
}
