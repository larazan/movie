<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Label;
use Carbon\Carbon;

class LabelSeeder extends Seeder
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
                'name' => 'SM Entertainment',
                'slug' => 'sm-entertainment',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'YG Entertainment',
                'slug' => 'yg-entertainment',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'JYP Entertainment',
                'slug' => 'jyp-entertainment',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'BIGHIT MUSIC',
                'slug' => 'bighit-music',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];
        Label::insert($data);
    }
}
