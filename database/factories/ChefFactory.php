<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'job' => $this->faker->jobTitle(),
            'bio' => $this->faker->sentence(10, false),
            'img' => 'https://picsum.photos/200'
        ];

    }
}
