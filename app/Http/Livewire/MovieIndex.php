<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use App\Models\Network;
use App\Models\CategoryMovie;
use App\Models\Country;
use App\Models\Movie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class MovieIndex extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $sortColumn = 'title';
    public $sortDirection = 'asc';
    public $perPage = 5;

    public $currentYear;
    public $title;
    public $categoryId;
    public $lang;
    public $file;
    public $oldImage;
    public $releaseDate;
    public $description;
    public $year;
    public $country;
    public $duration;
    public $networks;
    public $genres = [];
    public $movieId;
    public $movie;
    public $movieTags;
    public $movieStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $showMovieModal = false;
    public $showMovieDetailModal = false;

    public $showConfirmModal = false;
    public $deleteId = '';

    // protected $listeners = [
    //     'tagAdded' => 'tagAdded',
    //      'tagDetached' => 'tagDetached',
    //     'castAdded' => 'castAdded',
    //     'castDetached' => 'castDetached'
    //     ];

    protected $rules = [
        'title' => 'required',
        'categoryId' => 'required',
        'releaseDate' => 'required',
        'description' => 'required',
        'year' => 'required',
        'country' => 'required',
        'duration' => 'required',
        'lang' => 'required',
        'networks' => 'required',
        'genres' => 'required',
        // 'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->currentYear = now()->year;
        $this->releaseDate = today()->format('Y-m-d');
    } 


    // generate movie

    // public function generateMovie()
    // {
    //     $movie = Movie::where('tmdb_id', $this->tmdbId)->exists();
    //     if ($movie) {
    //         $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Movie exists']);
    //         return;
    //     }
    //     $url = 'https://api.themoviedb.org/3/movie/'. $this->tmdbId .'?api_key=8a11aac3fb4ef5f1f9607ee7e0329793&language=en-US';

    //     $apiMovie = Http::get($url);

    //     if ($apiMovie->successful()) {
    //         $newMovie = $apiMovie->json();

    //         $created_movie = Movie::create([
    //             'tmdb_id' => $newMovie['id'],
    //             'title' => $newMovie['title'],
    //             'slug'  => Str::slug($newMovie['title']),
    //             'runtime' => $newMovie['runtime'],
    //             'rating' => $newMovie['vote_average'],
    //             'release_date' => $newMovie['release_date'],
    //             'lang' => $newMovie['original_language'],
    //             'video_format' => 'HD',
    //             'is_public' => false,
    //             'overview' => $newMovie['overview'],
    //             'poster_path' => $newMovie['poster_path'],
    //             'backdrop_path' => $newMovie['backdrop_path']
    //         ]);
    //         $tmdb_genres = $newMovie['genres'];
    //         $tmdb_genres_ids = collect($tmdb_genres)->pluck('id');
    //         $genres = Genre::whereIn('tmdb_id', $tmdb_genres_ids)->get();
    //         $created_movie->genres()->attach($genres);
    //         $this->reset('tmdbId');
    //         $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Movie created']);
    //     } else {
    //         $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Api not exists']);
    //         $this->reset('tmdbId');
    //     }
    // }

    // public function sortByColumn($column)
    // {
    //     if($this->sortColumn = $column){
    //         $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    //     } else {
    //         $this->sortDirection = 'asc';
    //     }
    //     $this->sortColumn = $column;
    // }

    // public function showEditModal($movieId)
    // {
    //     $this->movie = Movie::findOrFail($movieId);
    //     $this->loadMovie();
    //     $this->showMovieModal = true;
    // }

    // public function loadMovie()
    // {

    //     $this->title = $this->movie->title;
    //     $this->runtime = $this->movie->runtime;
    //     $this->lang = $this->movie->lang;
    //     $this->videoFormat = $this->movie->video_format;
    //     $this->rating = $this->movie->rating;
    //     $this->posterPath = $this->movie->poster_path;
    //     $this->backdropPath = $this->movie->backdrop_path;
    //     $this->overview = $this->movie->overview;
    //     $this->isPublic = $this->movie->is_public;
    // }

    // public function closeMovieModal()
    // {
    //     $this->reset();
    // }

    // public function updateMovie()
    // {
    //     $this->validate();
    //     $this->movie->update([
    //         'title' => $this->title,
    //         'runtime' => $this->runtime,
    //         'lang' => $this->lang,
    //         'video_format' => $this->videoFormat,
    //         'rating' => $this->rating,
    //         'poster_path' => $this->posterPath,
    //         'backdrop_path' => $this->backdropPath,
    //         'overview' => $this->overview,
    //         'is_public' => $this->isPublic,
    //     ]);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Movie updated']);
    //     $this->reset();
    // }

    // public function deleteMovie($movieId)
    // {
    //     $movie = Movie::findOrFail($movieId);
    //     $movie->delete();
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Movie Deleted']);
    //     $this->reset();
    // }

    // public function showTrailerModal($movieId)
    // {
    //     $this->movie = Movie::findOrFail($movieId);
    //     $this->showTrailer = true;

    // }

    // public function addTrailer()
    // {
    //     $this->movie->trailers()->create([
    //         'name' => $this->trailerName,
    //         'embed_html' => $this->embedHtml
    //     ]);
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Trailer added']);
    //     $this->reset();
    // }

    // public function deleteTrailer($trailerId)
    // {
    //     $trailer = TrailerUrl::findOrFail($trailerId);
    //     $trailer->delete();
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Trailer deleted']);
    //     $this->reset();
    // }

    // public function showMovieDeatil($movieId)
    // {
    //     $this->movie = Movie::findOrFail($movieId);
    //     $this->showMovieDetailModal = true;
    // }

    // public function tagAdded()
    // {
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Tag Added']);
    //     $this->reset();
    // }

    // public function tagDetached()
    // {
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Tag detached']);
    //     $this->reset();
    // }
    // public function castAdded()
    // {
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Cast Added']);
    //     $this->reset();
    // }

    // public function castDetached()
    // {
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Cast detached']);
    //     $this->reset();
    // }

    // public function render()
    // {
    //     return view('livewire.movie-index', [
    //         'movies' => Movie::search('title', $this->search)->orderBy($this->sortColumn, $this->sortDirection)->paginate($this->perPage)
    //     ]);
    // }

    public function showCreateModal()
    {
        $this->showMovieModal = true;
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
        Movie::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Movie deleted successfully']);
    }

    public function createMovie()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Movie::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Movie::UPLOAD_DIR);
  
        Movie::create([
            'category_movie_id' => $this->categoryId,
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'rand_id' => Str::random(10),
            'slug' => Str::slug($this->title),
            'release_date' => $this->releaseDate,
            'description' => $this->description,
            'movie_tags' => $this->movieTags,
            'year' => $this->year,
            'country' => $this->country,
            'duration' => $this->duration,
            'lang' => $this->lang,
            'network' => $this->networks,
            'genre' => $this->genres,
            'origin' => $filePath,
            'large' => $resizedImage['large'],
            'medium' => $resizedImage['medium'],
            'small' => $resizedImage['small'],
            'status' => $this->movieStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Movie created successfully']);
    }

    public function showEditModal($movieId)
    {
        $this->reset(['name']);
        $this->movieId = $movieId;
        $movie = Movie::find($movieId);
        $this->categoryId = $movie->category_movie_id;
        $this->title = $movie->title;
        $this->releaseDate = $movie->release_date;
        $this->description = $movie->description;
        $this->movieTags = $movie->movie_tags;
        $this->year = $movie->year;
        $this->country = $movie->country;
        $this->duration = $movie->duration;
        $this->lang = $movie->lang;
        $this->networks = $movie->network;
        $this->genres = $movie->genre;
        $this->oldImage = $movie->small;
        $this->movieStatus = $movie->status;

        $this->showMovieModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['title']);
        // $this->movieId = $movieId;
        // $movie = Movie::find($movieId);
        // $this->categoryId = $movie->category_movie_id;
        // $this->title = $movie->title;
        // $this->releaseDate = $movie->release_date;
        // $this->description = $movie->description;
        // $this->movieTags = $movie->movie_tags;
        // $this->year = $movie->year;
        // $this->country = $movie->country;
        // $this->duration = $movie->duration;
        // $this->lang = $movie->lang;
        // $this->networks = $movie->network;
        // $this->genres = $movie->genre;
        // $this->oldImage = $movie->small;
        // $this->movieStatus = $movie->status;

        $this->showMovieDetailModal = true;
    }
    
    public function updateMovie()
    {
        $this->validate();
        $movie = Movie::findOrFail($this->movieId);
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->movieId) {
            if ($movie) {
               // delete image
			    $this->deleteImage($this->movieId);
                $filePath = $this->file->storeAs(Movie::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Movie::UPLOAD_DIR);

                $movie->update([
                    'category_movie_id' => $this->categoryId,
                    'user_id' => Auth::user()->id,
                    'title' => $this->title,
                    'rand_id' => Str::random(10),
                    'slug' => Str::slug($this->title),
                    'release_date' => $this->releaseDate,
                    'description' => $this->description,
                    'movie_tags' => $this->movieTags,
                    'year' => $this->year,
                    'country' => $this->country,
                    'duration' => $this->duration,
                    'lang' => $this->lang,
                    'network' => $this->networks,
                    'genre' => $this->genres,
                    'origin' => $filePath,
                    'large' => $resizedImage['large'],
                    'medium' => $resizedImage['medium'],
                    'small' => $resizedImage['small'],
                    'status' => $this->movieStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showMovieModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Movie updated successfully']);
    }

    public function deleteMovie($movieId)
    {
        $movie = Movie::findOrFail($movieId);
        $movie->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Movie deleted successfully']);
    }

    public function closeMovieModal()
    {
        $this->showMovieModal = false;
    }

    public function closeDetailModal()
    {
        $this->showMovieDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.movie-index', [
            'movies' => Movie::search($this->sortColumn, $this->search)->orderBy($this->sortColumn, $this->sortDirection)->paginate($this->perPage),
            'genres' => Genre::OrderBy('name', $this->sortDirection)->get(),
            'categories' => CategoryMovie::OrderBy('name', $this->sortDirection)->get(),
            'countries' => Country::OrderBy('name', $this->sortDirection)->get(),
            'networks' => Network::OrderBy('name', $this->sortDirection)->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Movie::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Movie::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', Movie::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Movie::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $movieImage = Movie::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$movieImage->original)) {
            Storage::delete($path.$movieImage->original);
		}
		
        if (Storage::exists($path.$movieImage->small)) {
            Storage::delete($path.$movieImage->small);
        }   

		if (Storage::exists($path.$movieImage->medium)) {
            Storage::delete($path.$movieImage->medium);
        }

        if (Storage::exists($path.$movieImage->large)) {
            Storage::delete($path.$movieImage->large);
        }

        return true;
    }

    public function addCast($item)
    {
        // dd($item);

        return redirect()->to('/admin/movie/'. $item .'/characters');
    }
}
