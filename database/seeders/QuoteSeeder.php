<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;
use Carbon\Carbon;

class QuoteSeeder extends Seeder
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
                'quote' => 'The first step is always the hardest. But once you take your first step, things will get easier from then on.',
                'character' => 'Oh Ji-wang',
                'movie' => 'It’s Okay Not to Be Okay',
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'quote' => 'I’m scared of losing my hearing again. I’m scared of being hit and getting injured. But what frightens me the most is going back.',
                'character' => 'Ko Dong Man',
                'movie' => 'Fight for My Way',
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'quote' => 'Giving up on a hopeless war will give you a new opportunity.',
                'character' => 'Vincenzo',
                'movie' => 'Vincenzo',
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'quote' => 'You’re bound to meet unexpected situations in life. Even if you use an umbrella, you’ll end up getting drenched. Just put your hands up and welcome the rain.',
                'character' => 'Hong Du Sik',
                'movie' => 'Hometown Cha Cha Cha',
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'quote' => 'No matter how hard life gets, never regret anything that made you smile.',
                'character' => 'Hong Shi-ah',
                'movie' => '18 Again',
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'quote' => 'Though my life is unusual and peculiar, it’s valuable and beautiful.',
                'character' => 'Woo Young Woo',
                'movie' => 'Extraordinary Attorney Woo',
                'year' => '2020',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
           
        ];
        Quote::insert($data);
    }
}
