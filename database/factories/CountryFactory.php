<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => $this->faker->unique()->country(),
        'area_km2' => $this->faker->randomFloat(2, 1000, 1000000),
        'population' => $this->faker->numberBetween(500_000, 200_000_000),
     ];
    }
}
