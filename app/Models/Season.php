<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Season extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'title', 'year', 'slug', 'original', 'medium', 'small'];

    public const UPLOAD_DIR = 'uploads/seasons';

    public const MEDIUM = '312x400';
	public const SMALL = '135x75';

    // public function getSearchResult(): SearchResult
    // {
    //     $url = route('season.show', [$this->serie->slug,$this->slug]);

    //     return new \Spatie\Searchable\SearchResult(
    //         $this,
    //         $this->name,
    //         $url
    //     );
    // }
    
    // public function serie()
    // {
    //     return $this->belongsTo(Serie::class);
    // }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
