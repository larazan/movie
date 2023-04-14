<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
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
                'name' => 'Korean',
                'slug' => 'korean',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Japanese',
                'slug' => 'japanese',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Chinese',
                'slug' => 'chinese',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Thai',
                'slug' => 'thai',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Taiwanese',
                'slug' => 'taiwanese',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Filipino',
                'slug' => 'filipino',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Indonesian',
                'slug' => 'indonesian',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Malaysian',
                'slug' => 'malaysian',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Indian',
                'slug' => 'india',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Nationality::insert($data);
    }
}
