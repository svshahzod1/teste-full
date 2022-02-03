<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'https://picsum.photos/200',
            'date' => 'Dekabr 15, 2021',
            'author' => $this->faker->firstName(),
            'short' =>  $this->faker->sentence(8, false)
        ];

    }
}
