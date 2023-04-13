<?php

namespace App\Http\Livewire;

use App\Models\Album;
use App\Models\Group;
use App\Models\Person;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Livewire\Component;

class AlbumIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showAlbumModal = false;
    public $showAlbumDetailModal = false;

    public $groupId;
    public $personId;
    public $actress;
    public $name;
    public $description;
    public $albumId;
    public $file;
    public $year;
    public $years = [];
    public $country;
    public $oldImage;
    public $albumStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;
    public $sortDirection = 'asc';
    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $yearNow = Carbon::now()->format('Y');
        for ($i=1950; $i < $yearNow + 2 ; $i++) { 
            array_push($this->years, $i);
        }
    }

    public function showCreateModal()
    {
        $this->showAlbumModal = true;
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
        Album::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Album deleted successfully']);
    }

    public function createAlbum()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();

        // Album::create([ 
        //     'name' => $this->name,
        //     'slug' => Str::slug($this->name),
        //     'rand_id' => Str::random(18),
        //     'person_id' => $this->actress,
        //     'group_id' => $this->groupId,
        //     'description' => $this->description,
        //     'country' => $this->country,
        //     'origin' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'medium' => $resizedImage['medium'],
        //     'status' => $this->albumStatus,
        // ]);

        $album = new Album();
        $album->name = $this->name;
        $album->slug = Str::slug($this->name);
        $album->rand_id = Str::random(18);
        $album->person_id = $this->actress;
        $album->group_id = $this->groupId;
        $album->description = $this->description;
        $album->country = $this->country;
        $album->year = $this->year;
        $album->status = $this->albumStatus;

        if (!empty($this->file)) {
             // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Album::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Album::UPLOAD_DIR);

            $album->origin = $filePath;
            $album->small =$resizedImage['small'];
            $album->medium = $resizedImage['medium'];
        }

        $album->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Album created successfully']);
    }

    public function showEditModal($albumId)
    {
        $this->reset(['name']);
        $this->albumId = $albumId;
        $album = Album::find($albumId);
        $this->personId = $album->person_id;
        $this->groupId = $album->group_id;
        $this->name = $album->name;
        $this->description = $album->description;
        $this->country = $album->country;
        $this->year = $album->year;
        $this->oldImage = $album->small;
        $this->albumStatus = $album->status;
        $this->showAlbumModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['name']);
        // $this->albumId = $albumId;
        // $album = Album::find($albumId);
        // $this->actress = $album->person_id;
        // $this->name = $album->name;
        // $this->album = $album->album;
        // $this->description = $album->description;
        // $this->country = $album->country;
        // $this->duration = $album->duration;
        // $this->second = $this->oriDura($album->duration, 'detik');
        // $this->oldImage = $album->small;
        // $this->albumStatus = $album->status;

        $this->showAlbumDetailModal = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required|min:5',
            'country' => 'required',
            'year' => 'required',
            'albumStatus' => 'required',
        ]);
    }
    
    public function updateAlbum()
    {
        $album = Album::findOrFail($this->albumId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->albumId) {
            if ($album) {

                // $album->update([
                //     'name' => $this->name,
                //     'slug' => Str::slug($this->name),
                //     'rand_id' => Str::random(18),
                //     'person_id' => $this->actress,
                //     'group_id' => $this->groupId,
                //     'description' => $this->description,
                //     'country' => $this->country,
                //     'origin' => $filePath,
                //     'small' => $resizedImage['small'],
                //     'medium' => $resizedImage['medium'],
                //     'status' => $this->albumStatus,
                // ]);

                $album = Album::where('id', $this->albumId);
                $album->name = $this->name;
                $album->slug = Str::slug($this->name);
                $album->rand_id = Str::random(18);
                $album->person_id = $this->actress;
                $album->group_id = $this->groupId;
                $album->description = $this->description;
                $album->country = $this->country;
                $album->year = $this->year;
                $album->status = $this->albumStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->albumId);
                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Album::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Album::UPLOAD_DIR);

                    $album->origin = $filePath;
                    $album->small =$resizedImage['small'];
                    $album->medium = $resizedImage['medium'];
                }

                $album->save();
                
            }
        }

        $this->reset();
        $this->showAlbumModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Album updated successfully']);
    }

    public function deleteAlbum($albumId)
    {
        $album = Album::findOrFail($albumId);
        $album->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Album deleted successfully']);
    }

    public function closeAlbumModal()
    {
        $this->showAlbumModal = false;
    }

    public function closeDetailModal()
    {
        $this->showAlbumDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function download($id)
    {
        $albumPath = Album::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$albumPath->audio)) {
            return response()->download($path.$albumPath->audio);
		}
    }

    public function render()
    {
        return view('livewire.album-index', [
            'albums' => Album::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'persons' => Person::OrderBy('name', 'asc')->get(),
            'groups' => Group::OrderBy('name', 'asc')->get(),
            'countries' => Country::OrderBy('name', $this->sortDirection)->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Album::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Album::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Album::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Album::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $albumImage = Album::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$albumImage->original)) {
            Storage::delete($path.$albumImage->original);
		}
		
        if (Storage::exists($path.$albumImage->small)) {
            Storage::delete($path.$albumImage->small);
        }   

		if (Storage::exists($path.$albumImage->medium)) {
            Storage::delete($path.$albumImage->medium);
        }
             
        return true;
    }

    public function deleteAudio($id = null) {
        $albumAudio = Album::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$albumAudio->audio)) {
            Storage::delete($path.$albumAudio->audio);
		}

        return true;
    }
}
