<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AvailableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qty' => $this->faker->numberBetween(1, 500),
        ];
    }
}
