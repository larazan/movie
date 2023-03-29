<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Thread;
use App\Models\Reply;
use App\Models\ForumLike;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    protected $model = ForumLike::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }

    public function reply()
    {
        return $this->state(function () {
            return [
                'likeable_id' => function () {
                    return Reply::factory()->create()->id;
                },
                'likeable_type' => 'replies',
            ];
        });
    }

    public function thread()
    {
        return $this->state(function () {
            return [
                'likeable_id' => function () {
                    return Thread::factory()->create()->id;
                },
                'likeable_type' => 'threads',
            ];
        });
    }
}
