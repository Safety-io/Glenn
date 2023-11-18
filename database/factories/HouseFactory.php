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
            'city' => fake()->randomElement(['Lefkosa', 'Gazimagusa', 'Girne', 'Guzelyurt', 'Iskele', 'Lefke', 'yeni iskele']),
            'standard' => fake()->randomElement(['Studio', '1+1', '2+1', '3+1', '3+2', '4+1', '4+2', 'Villa', 'Room']),
            'monthly' =>  fake()->numberBetween(85, 1000),
            'rent' => fake()->numberBetween(1, 12),
            'deposit' => fake()->numberBetween(1, 3),
            'commission' => fake()->numberBetween(1, 4),
            'image' => fake()->imageUrl(),
            'house_status' => fake()->randomElement(['Available', 'Unavailable']),
        ];
    }
}
