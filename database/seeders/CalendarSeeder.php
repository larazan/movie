<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CalendarSeeder extends Seeder
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
                'user_id' => 1,
                'name' => '⛱️ Relax for 2 at Marienbad',
                'start' => '2023-04-14 16:00:25',
                'end' => '2023-04-14 16:00:25',
                'color' => 'indigo',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Team Catch-up',
                'start' => '2023-04-16 16:00:25',
                'end' => '2023-04-16 16:00:25',
                'color' => 'green',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'name' => '✍️ New Project (2)',
                'start' => '2023-04-20 16:00:25',
                'end' => '2023-04-20 16:00:25',
                'color' => 'yellow',
                'created_at' => Carbon::now(),
            ],
        ];

        Event::insert($data);
    }
}

// 'indigo',
// 'sky',
// 'yellow',
// 'red',
// 'green',
// 'emerald',