<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Gay', 'Lesbian']),
            'age' => fake()->numberBetween($min = 18, $max = 22),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
