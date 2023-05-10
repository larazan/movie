<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleCategorySeeder extends Seeder
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
                'name' => 'News',
                'slug' => 'news',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Facebook',
                'slug' => 'facebook',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Twitter',
                'slug' => 'twitter',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Eksternal Link',
                'slug' => 'eksternal-link',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        CategoryArticle::insert($data);
    }
}
