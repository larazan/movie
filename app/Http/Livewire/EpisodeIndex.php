<?php

namespace App\Http\Livewire;

use App\Models\Episode;
use App\Models\Season;
use App\Models\Movie;
// use App\Models\Serie;
// use App\Models\TrailerUrl;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class EpisodeIndex extends Component
{
    use WithPagination, WithFileUploads;

    // public Serie $serie;
    // public Episode $episode;

    public $showEpisodeModal = false;

    public $title;
    public $releaseDate;
    public $duration;
    public $description;
    public $file;
    public $episodeId;
    public $seasonId;
    public $movieId;
    public $oldImage;
    public $episodeStatus = 'inactive';
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
        'short_description' => 'required',
        'release_date' => 'required',
        'duration' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    // generate episode

    // public function generateEpisode()
    // {
    //     $newEpisode = Http::get('https://api.themoviedb.org/3/tv/' . $this->serie->tmdb_id . '/episode/' . $this->episode->episode_number .'/episode/'. $this->episodeNumber . '?api_key=8a11aac3fb4ef5f1f9607ee7e0329793&language=en-US
    //                 ');
    //     if ($newEpisode->ok()) {

    //         $episode = Episode::where('tmdb_id', $newEpisode['id'])->first();
    //         if (!$episode) {
    //             Episode::create([
    //                 'episode_id' => $this->episode->id,
    //                 'tmdb_id' => $newEpisode['id'],
    //                 'name'    => $newEpisode['name'],
    //                 'slug'    => Str::slug($newEpisode['name']),
    //                 'episode_number' => $newEpisode['episode_number'],
    //                 'overview'  => $newEpisode['overview'],
    //                 'is_public' => false,
    //                 'visits'    => 1
    //             ]);
    //             $this->reset('episodeNumber');
    //             $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Episode created']);
    //         } else {
    //             $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Episode exists']);
    //         }
    //     } else {
    //         $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Episode not exists']);
    //         $this->reset('episodeNumber');
    //     }
    // }

    // public function showEditModal($id)
    // {
    //     $this->episodeId = $id;
    //     $this->loadEpisode();
    //     $this->showEpisodeModal = true;
    // }
    // public function loadEpisode()
    // {
    //     $episode = Episode::findOrFail($this->episodeId);
    //     $this->name = $episode->name;
    //     $this->overview = $episode->overview;
    //     $this->episodeNumber = $episode->episode_number;
    //     $this->isPublic = $episode->is_public;
    // }
    // public function closeEpisodeModal()
    // {
    //     $this->showEpisodeModal = false;
    //     $this->showTrailer = false;
    // }
    // public function updateEpisode()
    // {
    //     $this->validate();
    //     $episode = Episode::findOrFail($this->episodeId);
    //     $episode->update([
    //         'name' => $this->name,
    //         'episode_number' => $this->episodeNumber,
    //         'overview' => $this->overview,
    //         'is_public' => $this->isPublic
    //     ]);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Episode updated']);
    //     $this->reset(['episodeNumber', 'name', 'overview', 'episodeId', 'showEpisodeModal']);
    // }
    // public function deleteEpisode($id)
    // {
    //     $episode = Episode::findOrFail($id);
    //     $episode->delete();
    //     $this->reset(['episodeNumber', 'name', 'overview', 'episodeId', 'showEpisodeModal']);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Episode deleted']);
    // }
    // public function resetFilters()
    // {
    //     $this->reset();
    // }

    // public function showTrailerModal($episodeId)
    // {
    //     $this->episode = Episode::findOrFail($episodeId);
    //     $this->showTrailer = true;
    // }

    // public function addTrailer()
    // {
    //     $this->episode->trailers()->create([
    //         'name' => $this->trailerName,
    //         'embed_html' => $this->embedHtml
    //     ]);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Trailer added']);
    //     $this->reset('episode', 'showTrailer', 'trailerName', 'embedHtml');
    // }

    // public function deleteTrailer($trailerId)
    // {
    //     $trailer = TrailerUrl::findOrFail($trailerId);
    //     $trailer->delete();
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Trailer deleted']);
    //     $this->reset('episode', 'showTrailer', 'trailerName', 'embedHtml');
    // }

    // public function render()
    // {
    //     return view('livewire.episode-index', [
    //         'episodes' => Episode::where('episode_id', $this->episode->id)->search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
    //     ]);
    // }

    public function showCreateModal()
    {
        $this->showEpisodeModal = true;
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
        Episode::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Episode deleted successfully']);
    }

    public function createEpisode()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Episode::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Episode::UPLOAD_DIR);
  
        Episode::create([
            'title' => $this->title,
            'short_description' => $this->description,
            'release_date' => $this->releaseDate,
            'duration' => $this->duration,
            'movie_id' => $this->movieId,
            'season_id' => $this->seasonId,
            // 'slug' => Str::slug($this->title),
            'origin' => $filePath,
            'small' => $resizedImage['small'],
            'large' => $resizedImage['large'],
            'status' => $this->episodeStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Episode created successfully']);
    }

    public function showEditModal($episodeId)
    {
        $this->reset(['name']);
        $this->episodeId = $episodeId;
        $episode = Episode::find($episodeId);
        $this->title = $episode->title;
        $this->description = $episode->short_description;
        $this->releaseDate = $episode->release_date;
        $this->duration = $episode->duration;
        $this->movieId = $episode->movie_id;
        $this->seasonId = $episode->season_id;
        $this->oldImage = $episode->small;
        $this->episodeStatus = $episode->status;
        $this->showEpisodeModal = true;
    }
    
    public function updateEpisode()
    {
        $this->validate();
        $episode = Episode::findOrFail($this->episodeId);
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->episodeId) {
            if ($episode) {
               // delete image
			    $this->deleteImage($this->episodeId);
                $filePath = $this->file->storeAs(Episode::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Episode::UPLOAD_DIR);

                $episode->update([
                    'title' => $this->title,
                    'short_description' => $this->description,
                    'release_date' => $this->releaseDate,
                    'duration' => $this->duration,
                    'movie_id' => $this->movieId,
                    'season_id' => $this->seasonId,
                    // 'slug' => Str::slug($this->title),
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'large' => $resizedImage['large'],
                    'status' => $this->episodeStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showEpisodeModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Episode updated successfully']);
    }

    public function deleteEpisode($episodeId)
    {
        $episode = Episode::findOrFail($episodeId);
        $episode->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Episode deleted successfully']);
    }

    public function closeEpisodeModal()
    {
        $this->showEpisodeModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.episode-index', [
            'episodes' => Episode::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
            'movies' => Movie::OrderBy('title', $this->sort)->get(),
            'seasons' => Season::OrderBy('title', $this->sort)->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Episode::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', Episode::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', Episode::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Episode::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $episodeImage = Episode::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$episodeImage->original)) {
            Storage::delete($path.$episodeImage->original);
		}
		
        if (Storage::exists($path.$episodeImage->small)) {
            Storage::delete($path.$episodeImage->small);
        }   

		// if (Storage::exists($path.$episodeImage->medium)) {
        //     Storage::delete($path.$episodeImage->medium);
        // } 

        if (Storage::exists($path.$episodeImage->large)) {
            Storage::delete($path.$episodeImage->large);
        } 

        return true;
    }
}
