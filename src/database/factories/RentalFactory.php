<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'price_per_day' => $this->faker->randomFloat(2, 50, 500),
            'vehicle_type' => $this->faker->randomElement(['Mobil', 'Motor']),
            'status' => 'available',
            'description' => $this->faker->paragraph(),
            'photo' => 'vehicle.jpg',
            'driver_option' => $this->faker->boolean(),
            'category' => $this->faker->randomElement(['Mobil', 'Motor']),
            'tags' => ['family', 'city'],
        ];
    }
}
