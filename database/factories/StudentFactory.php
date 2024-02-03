<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //id, name, address, age, email, created_at, updated_at
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'age' => $this->faker->numberBetween(17, 30),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
