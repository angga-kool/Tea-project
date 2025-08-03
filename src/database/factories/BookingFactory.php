<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trip;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'bookable_id' => Trip::factory(),
            'bookable_type' => Trip::class,
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'quantity' => $this->faker->numberBetween(1, 5),
            'driver' => $this->faker->boolean(),
            'status' => 'pending',
            'total_price' => $this->faker->randomFloat(2, 100, 2000),
        ];
    }
}
