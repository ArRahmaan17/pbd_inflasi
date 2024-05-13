<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = ['pu_news', 'pu_announcement', 'pr_news', 'pr_announcement'];
        return [
            'slug' => fake()->slug(),
            'title' => fake()->paragraph(1),
            'content' => fake()->realText(),
            'type' => $array[rand(0, 3)],
            'photo' => fake()->slug() . '.' . fake()->fileExtension(),
            'user_id' => 1,
            'regency_id' => 1,
        ];
    }
}
