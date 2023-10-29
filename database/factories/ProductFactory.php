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
    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(1, 20, 100),
        ];
    }
}
