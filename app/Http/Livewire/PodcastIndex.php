<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\Podcast;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class PodcastIndex extends Component
{
    use WithFileUploads, WithPagination;

    // public $message;
    public $showPodcastModal = false;
    public $showPodcastDetailModal = false;
    public $title;
    public $description;
    public $status;
    public $podcastId;
    public $file;
    public $audio;
    public $duration;
    public $oldImage;
    public $podcastStatus = 'inactive';
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
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
    ];

    public function tesAlert()
    {
        // dd('tes alert');
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Something is wrong!']);
    }

    // public function mount()
    // {
    //     $this->description = 'lorem ipsum dolor sit amet';
    // }

    public function showCreateModal()
    {
        $this->showPodcastModal = true;
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
        Podcast::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Podcast deleted successfully']);
    }

    public function createPodcast()
    {
        // dd($this->message);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();

        // Podcast::create([
        //     'user_id' => Auth::user()->id,
        //     'title' => $this->title,
        //     'slug' => Str::slug($this->title),
        //     'rand_id' => Str::random(18),
        //     'description' => $this->description,
        //     'duration' => $this->duration,
        //     'audio' => $audioPath,
        //     'original' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'medium' => $resizedImage['medium'],
        //     'status' => $this->podcastStatus,
        // ]);

        $rand_id = Str::random(18);

        $podcast = new Podcast();
        $podcast->user_id = Auth::user()->id;
        $podcast->title = $this->title;
        $podcast->slug = Str::slug($this->title);
        $podcast->rand_id = $rand_id;
        $podcast->description = $this->description;
        $podcast->duration = $this->duration;
        $podcast->status = $this->podcastStatus;

        if (!empty($this->file)) {
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Podcast::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Podcast::UPLOAD_DIR);

            $podcast->original = $filePath;
            $podcast->small =$resizedImage['small'];
            $podcast->medium = $resizedImage['medium'];
        }

        if (!empty($this->audio)) {
            $audioname = $new . '.' . $this->audio->getClientOriginalName();
            $audioPath = $this->audio->storeAs(Podcast::UPLOAD_AUDIO, $audioname, 'public');

            $podcast->audio = $audioPath;
        }

        $podcast->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Podcast created successfully']);
    }

    public function showEditModal($podcastId)
    {
        $this->reset(['name']);
        $this->podcastId = $podcastId;
        $podcast = Podcast::find($podcastId);
        $this->title = $podcast->title;
        $this->description = $podcast->description;
        $this->duration = $podcast->duration;
        $this->oldImage = $podcast->small;
        $this->podcastStatus = $podcast->status;
        $this->showPodcastModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['name']);
        // $this->podcastId = $podcastId;
        // $podcast = Podcast::find($podcastId);
        // $this->title = $podcast->title;
        // $this->description = $podcast->description;
        // $this->duration = $podcast->duration;
        // $this->oldImage = $podcast->small;
        // $this->podcastStatus = $podcast->status;

        $this->showPodcastDetailModal = true;
    }
    
    public function updatePodcast()
    {
        $podcast = Podcast::findOrFail($this->podcastId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->podcastId) {
            if ($podcast) {               
               
                // $podcast->update([
                //     'user_id' => Auth::user()->id,
                //     'title' => $this->title,
                //     'slug' => Str::slug($this->title),
                //     'rand_id' => Str::random(18),
                //     'description' => $this->description,
                //     'duration' => $this->duration,
                //     'audio' => $audioPath,
                //     'original' => $filePath,
                //     'small' => $resizedImage['small'],
                //     'medium' => $resizedImage['medium'],
                //     'status' => $this->podcastStatus,
                // ]);
                
                $rand_id = Str::random(18);

                $podcast = Podcast::where('id', $this->podcastId)->first();
                $podcast->user_id = Auth::user()->id;
                $podcast->title = $this->title;
                $podcast->slug = Str::slug($this->title);
                $podcast->rand_id = $rand_id;
                $podcast->description = $this->description;
                $podcast->duration = $this->duration;
                $podcast->status = $this->podcastStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->podcastId);

                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Podcast::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Podcast::UPLOAD_DIR);

                    $podcast->original = $filePath;
                    $podcast->small =$resizedImage['small'];
                    $podcast->medium = $resizedImage['medium'];
                }

                if (!empty($this->audio)) {
                    // delete audio
                    $this->deleteAudio($this->podcastId);

                    $audioname = $new . '.' . $this->audio->getClientOriginalName();
                    $audioPath = $this->audio->storeAs(Podcast::UPLOAD_AUDIO, $audioname, 'public');
                    
                    $podcast->audio = $audioPath;
                }

                $podcast->save();
            }
        }

        $this->reset();
        $this->showPodcastModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Podcast updated successfully']);
    }

    public function deletePodcast($podcastId)
    {
        $podcast = Podcast::findOrFail($podcastId);
        $podcast->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Podcast deleted successfully']);
    }

    public function closePodcastModal()
    {
        $this->showPodcastModal = false;
    }

    public function closeDetailModal()
    {
        $this->showPodcastDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.podcast-index', [
            'podcasts' => Podcast::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Podcast::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Podcast::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Podcast::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Podcast::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $podcastImage = Podcast::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$podcastImage->original)) {
            Storage::delete($path.$podcastImage->original);
		}
		
        if (Storage::exists($path.$podcastImage->small)) {
            Storage::delete($path.$podcastImage->small);
        }   

		if (Storage::exists($path.$podcastImage->medium)) {
            Storage::delete($path.$podcastImage->medium);
        }
             
        return true;
    }

    public function deleteAudio($id = null) {
        $podcastAudio = Podcast::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$podcastAudio->audio)) {
            Storage::delete($path.$podcastAudio->audio);
		}

        return true;
    }

    
}
