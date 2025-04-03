<?php

namespace Database\Factories;

use App\Models\Gender;
use Database\Seeders\GenderSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Gender>
 */
class GenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Male', 'Female', 'Other']),
        ];
    }
}
