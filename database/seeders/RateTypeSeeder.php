<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\RateType;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RateTypeSeeder extends Seeder
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
                'name' => 'G', 
                'slug' => 'g', 
                'definition' => 'General Audiences',
                'detail' => 'All ages admitted. Nothing that would offend parents for viewing by children.',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'PG', 
                'slug' => 'pg', 
                'definition' => 'Parental Guidance Suggested',
                'detail' => 'Some material may not be suitable for children. Parents urged to give "parental guidance". May contain some material parents might not like for their young children.',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'PG-13', 
                'slug' => 'pg-13', 
                'definition' => 'Parents Strongly Cautioned',
                'detail' => 'Some material may be inappropriate for children under 13. Parents are urged to be cautious. Some material may be inappropriate for pre-teenagers.',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'R', 
                'slug' => 'r', 
                'definition' => 'Restricted',
                'detail' => 'Under 17 requires accompanying parent or adult guardian. Contains some adult material. Parents are urged to learn more about the film before taking their young children with them.',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'NC-17', 
                'slug' => 'nc-17', 
                'definition' => 'Adults Only',
                'detail' => 'No one 17 and under admitted. Clearly adult. Children are not admitted.',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ]
        ];

        RateType::insert($data);
    }
}
