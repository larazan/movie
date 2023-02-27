<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Cast extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status',];

    public function getSearchResult(): SearchResult
    {
        $url = route('casts.show', $this->slug);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'cast_movie')->latest();
    }
}
