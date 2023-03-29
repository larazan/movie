<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'first_name'      => 'Admin',
            'last_name'      => 'Admin',
            'email'     => 'admin@example.com',
            'password'  => Hash::make('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'first_name'      => 'John',
            'last_name'      => 'Doe',
            'email'     => 'john@example.com',
            'password'  => Hash::make('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->create([
            'first_name'      => 'Maya',
            'last_name'      => 'Doe',
            'email'     => 'maya@example.com',
            'password'  => Hash::make('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->count(10)->create();
    }
}
