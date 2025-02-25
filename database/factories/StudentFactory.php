<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->name,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->numberBetween(18, 25),
            'moto' => $this->faker->sentence()
        ];
    }
}
