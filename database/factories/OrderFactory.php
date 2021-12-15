<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 100),
            'uuid' => $this->faker->uuid(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'phone' => $this->faker->phoneNumber(),
            'status' => Arr::random(['submitted', 'processed', 'shipped', 'delivered'])
        ];
    }
}
