<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name' => 'Baju',
                'slug' => 'baju',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Celana',
                'slug' => 'celana',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Topi',
                'slug' => 'topi',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Sepatu',
                'slug' => 'sepatu',
                'created_at' => Carbon::now(),
            ],
           
        ];
        Category::insert($data);
    }
}
