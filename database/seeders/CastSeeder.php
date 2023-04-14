<?php

namespace Database\Seeders;

use App\Models\Cast;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CastSeeder extends Seeder
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
                'name' => 'Main Role',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Support Role',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Guest Role',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Director',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Executive Producer',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Producer',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Writer',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Cast::insert($data);
    }
}
