<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'season_id', 'title', 'short_description', 'release_date', 'duration', 'original', 'large', 'small', 'status'];

    public const UPLOAD_DIR = 'uploads/episodes';

    public const LARGE = '1920x643';
	public const SMALL = '135x75';

    // public function getSearchResult(): SearchResult
    // {
    //     $url = route('episodes.show', $this->slug);

    //     return new \Spatie\Searchable\SearchResult(
    //         $this,
    //         $this->name,
    //         $url
    //     );
    // }
    
    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    // public function trailers()
    // {
    //     return $this->morphMany(TrailerUrl::class, 'trailerable');
    // }
}
