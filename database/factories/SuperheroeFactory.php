<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superheroe>
 */
class SuperheroeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          => fake()->name(),
            'real_name'     => fake()->UserName(),
            'picture'       => fake()->imageUrl(600, 480, 'superheroes'),
            'universe_id'   => fake()->numberBetween(1,2),
            'gender_id'     => fake()->numberBetween(1,3),
        ];
    }
}
