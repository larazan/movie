<?php

namespace App\Http\Livewire;

use App\Models\Music;
use App\Models\Person;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;
// use Illuminate\Support\Carbon;
use Carbon\CarbonInterval;

class MusicIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $init = 480;
    public $minutes;
    public $seconds;
    public $minute;
    public $second;

    public $sortDirection = 'asc';
    public $showMusicModal = false;
    public $showMusicDetailModal = false;

    public $actress;
    public $actressId;
    public $title;
    public $description;
    public $status;
    public $musicId;
    public $file;
    public $audio;
    public $duration;
    public $album;
    public $country;
    public $oldImage;
    public $musicStatus = 'inactive';
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
        'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
    ];

    public function mount()
    {
        $this->minutes = $this->dura($this->init);
        $this->seconds = $this->init % 60;
        // $this->minutes = CarbonInterval::seconds($this->init)->cascade()->forHumans();
        // $this->seconds = $this->init % 60;

        $this->minute = 0;
        $this->second = 0;
    }

    public function showCreateModal()
    {
        $this->showMusicModal = true;
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
        Music::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Music deleted successfully']);
    }

    public function createMusic()
    {
        $this->validate();

        $originalTime = ($this->minute * 60) + $this->second;
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Music::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Music::UPLOAD_DIR);
  
        // AUDIO
        $audioname = $new . '.' . $this->audio->getClientOriginalName();
        $audioPath = $this->audio->storeAs(Music::UPLOAD_AUDIO, $audioname, 'public');

        Music::create([
            'user_id' => Auth::user()->id,
            'person_id' => $this->actress,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'rand_id' => Str::random(18),
            'album' => $this->album,
            'description' => $this->description,
            'country' => $this->country,
            'duration' => $originalTime,
            'audio' => $audioPath,
            'origin' => $filePath,
            'small' => $resizedImage['small'],
            'medium' => $resizedImage['medium'],
            'status' => $this->musicStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Music created successfully']);
    }

    public function dura($dura)
    {
        $minutes = floor($dura / 60);
        $seconds = $dura % 60;
        if ($seconds > 9) {
            return $minutes.':'.$seconds;
        } 
        elseif ($seconds == 0) {
            return $minutes.':00';
        } 
        else {
            return $minutes.':'. sprintf("%02d", $seconds);
        }
    }

    public function oriDura($dura, $type)
    {
        switch ($type) {
            case 'detik':
                return $dura % 60;
                break;
            case 'menit':
                return floor($dura / 60);
        }
    }

    public function showEditModal($musicId)
    {
        $this->reset(['name']);
        $this->musicId = $musicId;
        $music = Music::find($musicId);
        $this->actress = $music->person_id;
        $this->title = $music->title;
        $this->album = $music->album;
        $this->description = $music->description;
        $this->country = $music->country;
        $this->duration = $music->duration;
        $this->minute = $this->oriDura($music->duration, 'menit');
        $this->second = $this->oriDura($music->duration, 'detik');
        $this->oldImage = $music->small;
        $this->musicStatus = $music->status;
        $this->showMusicModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['name']);
        // $this->musicId = $musicId;
        // $music = Music::find($musicId);
        // $this->actress = $music->person_id;
        // $this->title = $music->title;
        // $this->album = $music->album;
        // $this->description = $music->description;
        // $this->country = $music->country;
        // $this->duration = $music->duration;
        // $this->minute = $this->oriDura($music->duration, 'menit');
        // $this->second = $this->oriDura($music->duration, 'detik');
        // $this->oldImage = $music->small;
        // $this->musicStatus = $music->status;

        $this->showMusicDetailModal = true;
    }
    
    public function updateMusic()
    {
        $music = Music::findOrFail($this->musicId);
        $this->validate();
  
        $originalTime = ($this->minute * 60) + $this->second;

        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $audioname = $new . '.' . $this->audio->getClientOriginalName();
        
        if ($this->musicId) {
            if ($music) {
               // delete image
			    $this->deleteImage($this->musicId);
                // IMAGE
                $filePath = $this->file->storeAs(Music::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Music::UPLOAD_DIR);

                // delete audio
                $this->deleteAudio($this->musicId);
                // AUDIO
                $audioPath = $this->audio->storeAs(Music::UPLOAD_AUDIO, $audioname, 'public');

                $music->update([
                    'user_id' => Auth::user()->id,
                    'person_id' => $this->actress,
                    'title' => $this->title,
                    'slug' => Str::slug($this->title),
                    'rand_id' => Str::random(18),
                    'album' => $this->album,
                    'description' => $this->description,
                    'country' => $this->country,
                    'duration' => $originalTime,
                    'audio' => $audioPath,
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'medium' => $resizedImage['medium'],
                    'status' => $this->musicStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showMusicModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Music updated successfully']);
    }

    public function deleteMusic($musicId)
    {
        $music = Music::findOrFail($musicId);
        $music->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Music deleted successfully']);
    }

    public function closeMusicModal()
    {
        $this->showMusicModal = false;
    }

    public function closeDetailModal()
    {
        $this->showMusicDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function download($id)
    {
        $musicPath = Music::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$musicPath->audio)) {
            return response()->download($path.$musicPath->audio);
		}
    }

    public function render()
    {
        return view('livewire.music-index', [
            'musics' => Music::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
            'persons' => Person::OrderBy('name', 'asc')->get(),
            'countries' => Country::OrderBy('name', $this->sortDirection)->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Music::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Music::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Music::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Music::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $musicImage = Music::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$musicImage->original)) {
            Storage::delete($path.$musicImage->original);
		}
		
        if (Storage::exists($path.$musicImage->small)) {
            Storage::delete($path.$musicImage->small);
        }   

		if (Storage::exists($path.$musicImage->medium)) {
            Storage::delete($path.$musicImage->medium);
        }
             
        return true;
    }

    public function deleteAudio($id = null) {
        $musicAudio = Music::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$musicAudio->audio)) {
            Storage::delete($path.$musicAudio->audio);
		}

        return true;
    }
}
