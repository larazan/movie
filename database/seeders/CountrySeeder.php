<?php

namespace Database\Seeders;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
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
                'name' => 'China',
                'slug' => 'china',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Japan',
                'slug' => 'japan',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Philipine',
                'slug' => 'philipine',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Taiwan',
                'slug' => 'taiwan',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Thailand',
                'slug' => 'thailand',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Malaysia',
                'slug' => 'malaysia',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Indonesia',
                'slug' => 'indonesia',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'India',
                'slug' => 'india',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Turkey',
                'slug' => 'turkey',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];
        Country::insert($data);
    }
}
