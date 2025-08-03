<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(4),
            'thumbnail' => 'article.jpg',
            'tags' => ['travel', 'tips'],
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->sentence(6),
            'meta_keywords' => 'travel,tips',
        ];
    }
}
