<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AttributeOption;
use Carbon\Carbon;

class AttributeOptionSeeder extends Seeder
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
                'attribute_id' => 1,
                'name' => 'Merah',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 1,
                'name' => 'Kuning',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 1,
                'name' => 'Hitam',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 1,
                'name' => 'Pink',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 1,
                'name' => 'Putih',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'small',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'medium',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'large',
                'created_at' => Carbon::now(),
            ],
            [
                'attribute_id' => 2,
                'name' => 'extra large',
                'created_at' => Carbon::now(),
            ],
        ];
        AttributeOption::insert($data);
    }
}
