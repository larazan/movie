<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Movie extends Model
{
    use HasFactory;

    protected $dates = [''];

    protected $fillable = [
        'user_id',
        'category_movie_id',
        'title',
        'rand_id',
        'slug',
        'release_date',
        'description',
        'year',
        'country',
        'duration',
        'lang',
        'network',
        'genre',
        'visits',
        'original',
        'large',
        'medium',
        'small',
        'status',
    ];

    public const UPLOAD_DIR = 'uploads/movies';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '1000x600';

    // public function getSearchResult(): SearchResult
    // {
    //     $url = route('movies.show', $this->slug);

    //     return new \Spatie\Searchable\SearchResult(
    //         $this,
    //         $this->title,
    //         $url
    //     );
    // }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie');
    }

    public function trailers()
    {
        return $this->morphMany(TrailerUrl::class, 'trailerable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class, 'cast_movie');
    }
}
