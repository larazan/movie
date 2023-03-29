<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    protected $model = Thread::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'         => $this->faker->text(30),
            'body'          => $this->faker->paragraph(2, true),
            'slug'          => $this->faker->unique()->slug,
            'author_id'     => rand(3, 9),
            'status'        => 'active',
        ];
    }
}
