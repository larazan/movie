<?php

namespace App\Http\Livewire;

use App\Models\Season;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class SeasonIndex extends Component
{
    use WithPagination, WithFileUploads;

    public $showSeasonModal = false;

    public $title;
    public $year;
    public $file;
    public $seasonId;
    public $movieId;
    public $oldImage;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    // public Serie $serie;

    // public $seasonNumber;
    // public $name;
    // public $posterPath;
    // public $showSeasonModal = false;
    // public $seasonId;

    protected $rules = [
        'title' => 'required',
        'year' => 'required',
        // 'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    // generate season

    // public function generateSeason()
    // {
    //     $season = Season::where('season_number', $this->seasonNumber)->exists();
    //     if($season){
    //         $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Season exists']);
    //         return;
    //     }
    //     $apiSeason = Http::get('https://api.themoviedb.org/3/tv/' . $this->serie->tmdb_id . '/season/' . $this->seasonNumber . '?api_key=8a11aac3fb4ef5f1f9607ee7e0329793&language=en-US
    //                 ');
    //     if ($apiSeason->ok()) {
    //             $newSeason = $apiSeason->json();
    //             Season::create([
    //                 'serie_id' => $this->serie->id,
    //                 'tmdb_id' => $newSeason['id'],
    //                 'name'    => $newSeason['name'],
    //                 'slug'    => Str::slug($newSeason['name']),
    //                 'season_number' => $newSeason['season_number'],
    //                 'poster_path'  => $newSeason['poster_path'] ? $newSeason['poster_path'] : $this->serie->poster_path
    //             ]);
    //             $this->reset('seasonNumber');
    //             $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Season created']);
           
    //     } else {
    //         $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Api not exists']);
    //         $this->reset('seasonNumber');
    //     }

    // }

    // public function showEditModal($id)
    // {
    //     $this->seasonId = $id;
    //     $this->loadSeason();
    //     $this->showSeasonModal = true;
    // }
    // public function loadSeason()
    // {
    //     $season = Season::findOrFail($this->seasonId);
    //     $this->name = $season->name;
    //     $this->posterPath = $season->poster_path;
    //     $this->seasonNumber = $season->season_number;
    // }
    // public function closeSeasonModal()
    // {
    //     $this->showSeasonModal = false;
    // }
    // public function updateSeason()
    // {
    //     $this->validate();
    //     $season = Season::findOrFail($this->seasonId);
    //     $season->update([
    //         'name' => $this->name,
    //         'season_number' => $this->seasonNumber,
    //         'poster_path' => $this->posterPath
    //     ]);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Season updated']);
    //     $this->reset(['seasonNumber', 'name', 'posterPath', 'seasonId', 'showSeasonModal']);
    // }
    // public function deleteSeason($id)
    // {
    //     $season = Season::findOrFail($id);
    //     $season->delete();
    //     $this->reset(['seasonNumber', 'name', 'posterPath', 'seasonId', 'showSeasonModal']);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Season deleted']);
    // }
    // public function resetFilters()
    // {
    //     $this->reset();
    // }

    // public function render()
    // {
    //     return view('livewire.season-index', [
    //         'seasons' => Season::where('serie_id', $this->serie->id)
    //             ->search('name', $this->search)
    //             ->orderBy('name', $this->sort)
    //             ->paginate($this->perPage)
    //     ]);
    // }

    public function showCreateModal()
    {
        $this->showSeasonModal = true;
    }

    public function createSeason()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Season::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Season::UPLOAD_DIR);
  
        Season::create([
            'title' => $this->title,
            'year' => $this->year,
            'movie_id' => $this->movieId,
            'slug' => Str::slug($this->title),
            'origin' => $filePath,
            'small' => $resizedImage['small'],
            'medium' => $resizedImage['medium'],
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Season created successfully']);
    }

    public function showEditModal($seasonId)
    {
        $this->reset(['name']);
        $this->seasonId = $seasonId;
        $season = Season::find($seasonId);
        $this->title = $season->title;
        $this->year = $season->year;
        $this->movieId = $season->movie_id;
        $this->oldImage = $season->small;
        // $this->seasonStatus = $season->status;
        $this->showSeasonModal = true;
    }
    
    public function updateSeason()
    {
        $this->validate();
        $season = Season::findOrFail($this->seasonId);
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->seasonId) {
            if ($season) {
               // delete image
			    $this->deleteImage($this->seasonId);
                $filePath = $this->file->storeAs(Season::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Season::UPLOAD_DIR);

                $season->update([
                    'title' => $this->title,
                    'year' => $this->year,
                    'movie_id' => $this->movieId,
                    'slug' => Str::slug($this->title),
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'medium' => $resizedImage['medium'],
                ]);
                
            }
        }

        $this->reset();
        $this->showSeasonModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Season updated successfully']);
    }

    public function deleteSeason($seasonId)
    {
        $season = Season::findOrFail($seasonId);
        $season->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Season deleted successfully']);
    }

    public function closeSeasonModal()
    {
        $this->showSeasonModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.season-index', [
            'seasons' => Season::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
            'movies' => Movie::OrderBy('title', $this->sort)->get()
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Season::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Season::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Season::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Season::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $seasonImage = Season::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$seasonImage->original)) {
            Storage::delete($path.$seasonImage->original);
		}
		
        if (Storage::exists($path.$seasonImage->small)) {
            Storage::delete($path.$seasonImage->small);
        }   

		if (Storage::exists($path.$seasonImage->medium)) {
            Storage::delete($path.$seasonImage->medium);
        } 

        return true;
    }
}
