<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'description' => $this->faker->text(200),
            'currency' => 'USD',
            'salary' => $this->faker->numberBetween(200, 800),
            'status' => 1,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
