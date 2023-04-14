<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Drama',
                'slug' => 'drama',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Comedy',
                'slug' => 'comedy',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Horor',
                'slug' => 'Horor',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Adventure',
                'slug' => 'adventure',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Action',
                'slug' => 'action',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Animation',
                'slug' => 'animation',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Documentary',
                'slug' => 'documentary',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Crime',
                'slug' => 'crime',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Family',
                'slug' => 'family',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Romance',
                'slug' => 'romance',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Fantasy',
                'slug' => 'fantasy',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Science fiction',
                'slug' => 'science-fiction',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Thriller',
                'slug' => 'thriller',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Mystery',
                'slug' => 'mystery',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'History',
                'slug' => 'history',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Biography',
                'slug' => 'biography',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Music',
                'slug' => 'music',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'War',
                'slug' => 'war',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Genre::insert($data);
    }
}
