<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'buyer_id' => $this->faker->numberBetween(1, 5),
            'qty' => $this->faker->numberBetween(1, 10)
        ];
    }
}
