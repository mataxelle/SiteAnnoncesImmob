<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rooms = fake()->numberBetween(0, 5);

        return [
            'title' => fake()->sentence(6, true), // fake()->sentence() est aussi correct
            'description' => fake()->sentences(4, true),
            'surface' => fake()->numberBetween(18, 190),
            'rooms' => $rooms,
            'bedrooms' => fake()->numberBetween(0, $rooms),
            'floor' => fake()->numberBetween(0, 10),
            'price' => fake()->numberBetween(90000, 1000000),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'postal_code' => fake()->postcode(),
            'sold' => false,
        ];
    }

    public function sold(): static
    {
        return $this->state(fn(array $attributes) => [
            'sold' => true,
        ]);
    }
}
