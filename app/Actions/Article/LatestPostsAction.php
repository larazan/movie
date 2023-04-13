<?php

namespace App\Actions\Article;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;

class LatestPostsAction
{
    public function __construct()
    {
    }

    public function run($limit = 5)
    {
        return Cache::remember('latestPosts', 60 * 60 * 24, function () use ($limit) {
            return Article::latest()->published()->take($limit)->get();
        });
    }
}