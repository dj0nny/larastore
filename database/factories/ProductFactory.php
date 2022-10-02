<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(2, true),
            'code' => fake()->regexify('[A-Z]{3}[0-9]{2}'),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 10, 150),
        ];
    }
}
