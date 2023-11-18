<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Standard>
 */
class StandardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'standard' => fake()->randomElement(['Studio', '1+1', '2+1', '3+1', '3+2', '4+1', '4+2', 'Villa', 'Room']),
        ];
    }
}
