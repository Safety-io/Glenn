<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => fake()->address(),
            'city' => fake()->city(),
            'standard' => fake()->randomNumber() . " Bedrooms",
            'monthly' => fake()->numberBetween(1_000, 100_000),
            'rent' => fake()->numberBetween(1_000, 100_000),
            'deposit' => fake()->numberBetween(1_000, 100_000),
            'commission' => fake()->numberBetween(1_000, 100_000),
            'image' => fake()->imageUrl(),
            'house_statue' => fake()->randomElement(['Available', 'Unavailable']),
        ];
    }
}
