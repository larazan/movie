<?php

namespace Database\Seeders;

use App\Models\CategoryMovie;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieCategorySeeder extends Seeder
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
                'name' => 'Movie',
                'slug' => 'movie',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'TV show',
                'slug' => 'tv-show',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        CategoryMovie::insert($data);
    }
}
