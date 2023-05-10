<?php

namespace Database\Seeders;

use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PersonSeeder extends Seeder
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
                'name' => 'Bae Suzy',
                'rand_id' => Str::random(10),
                'slug' => 'bae-suzy-'.Str::random(10),
                'gender_id' => 2,
                'bio' => 'Bae Su-ji (배수지), also known as Suzy (수지), is a South Korean singer, actress, model, and MC. Before debuting, she was an online shopping model. She debuted in the Chinese-Korean girl group "Miss A" under JYP Entertainment alongside with AQ Entertainment in 2010 with the single "Bad Girl Good Girl". On December 27, 2017, JYP Entertainment announced that Miss A had disbanded. On March 31, 2019, Suzy left JYP Entertainment following the expiration of her contract and signed a contract with the acting agency, Management SOOP.',
                'birth_date' => '1994-10-10',
                'birth_location' => 'Gwangju, South Korea',
                'nationality' => 'South Korea',
                'website' => '',
                'facebook' => 'https://facebook.com/@baesu',
                'instagram' => 'https://instagram.com/@baesu',
                'twitter' => 'https://twiter.com/@baesu',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Kim Ok-vin',
                'rand_id' => Str::random(10),
                'slug' => 'kim-ok-vin-'.Str::random(10),
                'gender_id' => 2,
                'bio' => 'Kim Ok-vin (born December 29, 1986), also known as Kim Ok-bin, is a South Korean actress. Kim made her debut in an online beauty contest in 2004, and began her acting career with a role in 2005 film Voice. Subsequent appearances include the television drama series Over the Rainbow and films such as Dasepo Naughty Girls and The Accidental Gangster and the Mistaken Courtesan. Kim has received several award nominations, and won Best Actress at the 2009 Sitges Film Festival for her role in Thirst.',
                'birth_date' => '1986-12-29',
                'birth_location' => 'Suncheon, South Korea',
                'nationality' => 'South Korea',
                'website' => '',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Jeon Yeo-been',
                'rand_id' => Str::random(10),
                'slug' => 'jeon-yeo-been-'.Str::random(10),
                'gender_id' => 2,
                'bio' => 'Jeon Yeo-been is a South Korean actress. Jeon rose to prominence after her stunning performance in After My Death which earned her the Actress of the Year Award at the 22nd Busan International Film Festival and the Independent Star Award at the 2017 Seoul Independent Film Festival.',
                'birth_date' => '1989-07-26',
                'birth_location' => 'Gangwon, South Korea',
                'nationality' => 'South Korea',
                'website' => '',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Kim Ji-won',
                'rand_id' => Str::random(10),
                'slug' => 'kim-ji-won-'.Str::random(10),
                'gender_id' => 2,
                'bio' => 'Kim Ji-won (Hangul: 김지원; Hanja: 金智媛; born October 19, 1992) is a South Korean actress. She gained attention through her roles in television series To the Beautiful You (2012), The Heirs (2013), Descendants of the Sun (2016), and Fight For My Way (2017).',
                'birth_date' => '1992-10-19',
                'birth_location' => 'Seoul, South Korea',
                'nationality' => 'South Korea',
                'website' => '',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Song Hye-kyo',
                'rand_id' => Str::random(10),
                'slug' => 'song-hye-kyo-'.Str::random(10),
                'gender_id' => 2,
                'bio' => 'Song Hye-kyo (born November 22, 1981) is a South Korean actress. She gained popularity through her leading roles in television dramas Autumn in My Heart (2000), All In (2003), Full House (2004), That Winter, the Wind Blows (2013) and Descendants of the Sun (2016) which achieved pan-Asia success. The success of Song\'s television dramas internationally established her as a top Hallyu star. She has also starred in films Hwang Jin Yi (2007), The Grandmaster (2013), My Brilliant Life (2014) and The Queens (2015).',
                'birth_date' => '1982-02-26',
                'birth_location' => 'Seoul, South Korea',
                'nationality' => 'South Korea',
                'website' => '',
                'facebook' => '',
                'instagram' => '',
                'twitter' => '',
                'status' => 'active',
                'created_at' => Carbon::now(),
            ],
        ];

        Person::insert($data);
    }
}

// name
// rand_id
// gender_id
// bio
// birth_date
// birth_location
// nationality
// facebook
// instagram
// twitter
// Str::random(10);