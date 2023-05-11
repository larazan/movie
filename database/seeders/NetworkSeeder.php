<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Network;
use Carbon\Carbon;

class NetworkSeeder extends Seeder
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
                'name' => 'SBS',
                'slug' => 'sbs',
                'country' => 'south korea',
                'site' => 'https://www.sbs.co.kr/',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'tvN',
                'slug' => ' tvN',
                'country' => 'south korea',
                'site' => 'https://www.sbs.co.kr/',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'KBS',
                'slug' => 'kbs',
                'country' => 'south korea',
                'site' => 'https://www.sbs.co.kr/',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'TBS',
                'slug' => 'tbs',
                'country' => 'south korea',
                'site' => 'https://www.sbs.co.kr/',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'JTBC',
                'slug' => 'jtbc',
                'country' => 'south korea',
                'site' => 'https://www.sbs.co.kr/',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];
        Network::insert($data);
    }
}
