<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;
use Carbon\Carbon;

class AttributeSeeder extends Seeder
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
                'code' => 'color',
                'name' => 'Color',
                'type' => 'select',
                // 'validation' => '',
                'is_required' => false,
                'is_filterable' => false,
                'is_configurable' => false,
                'created_at' => Carbon::now(),
            ],
            [
                'code' => 'size',
                'name' => 'Size',
                'type' => 'select',
                // 'validation' => '',
                'is_required' => false,
                'is_filterable' => false,
                'is_configurable' => false,
                'created_at' => Carbon::now(),
            ],
           
        ];
        Attribute::insert($data);
    }
}
