<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'customer_name' => fake()->name(),
            'room' => fake()->numberBetween(101, 999),
            'check_in' => fake()->dateTimeBetween('now', '+1 week'),
            'check_out' => fake()->dateTimeBetween('+1 week', '+2 weeks'),
            'guest' => fake()->numberBetween(1, 4),
            'price_per_night' => fake()->numberBetween(300000, 1000000),
            'status' => fake()->randomElement(['ongoing', 'complete']),
        ];
    }
}
