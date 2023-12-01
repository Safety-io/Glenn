<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'price' => fake()->randomElement([85, 100, 150, 200, 250, 300, 350, 400,450,500,550,600,650,700, 750, 800, 850, 900,950,1000]),
        ];
    }
}
