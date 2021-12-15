<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProductFactory extends Factory
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
            'order_id' => rand(1, 1000),
            'name' => $this->faker->sentence(4, true),
            'category' => Arr::random(['Shirts', 'Pants', 'Hats', 'Sweaters', 'Shoes', 'Socks', 'Towels', 'Scarves']),
            'description' => $this->faker->sentences(rand(2, 4), true),
            'quantity' => rand(1, 5)
        ];
    }
}
