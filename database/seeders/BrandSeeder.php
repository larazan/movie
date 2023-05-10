<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Carbon\Carbon;

class BrandSeeder extends Seeder
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
                'name' => '8 Seconds',
                'slug' => '8-seconds',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Zara',
                'slug' => 'zara',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Fila',
                'slug' => 'fila',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Laneige',
                'slug' => 'laneige',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];
        Brand::insert($data);
    }
}
