<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // CreateAdminUserSeeder::class,
            // DashboardTableSeeder::class,
            // UsersTableSeeder::class,
            // ThreadTableSeeder::class,
            // TransactionSeeder::class,
            // RateTypeSeeder::class,
            // CountrySeeder::class,
            // NationalitySeeder::class,
            // MovieCategorySeeder::class,
            // GenreSeeder::class,
            // CastSeeder::class,
            // CalendarSeeder::class,
            // PersonSeeder::class,
            // ArticleCategorySeeder::class,
            // CategorySeeder::class,
            // BrandSeeder::class,
            // AttributeSeeder::class,
            // AttributeOptionSeeder::class,
            // LabelSeeder::class,
            // NetworkSeeder::class,
            QuoteSeeder::class,
        ]);
    }
}
