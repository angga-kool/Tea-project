<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
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
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'quota' => $this->faker->numberBetween(1, 30),
            'available_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'photo' => 'trip.jpg',
            'itinerary' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Open Trip', 'Private Trip']),
            'tags' => ['adventure', 'honeymoon'],
        ];
    }
}
