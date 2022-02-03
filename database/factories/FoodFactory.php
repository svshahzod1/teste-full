<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{

    public function definition()
    {
        $food_name_words = rand(1,4);
        $category_id = rand(1,6);
        $recept_num = rand(4,8);
        $recept_ingr_array = $this->faker->words($recept_num);
        $recept = implode(', ',$recept_ingr_array);

        return [
            'nomi' => $this->faker->sentence($food_name_words),
            'categoriy_id' => $category_id,
            'retsept' => $recept,
            'narxi' => rand(8,25),
            'image' => 'https://picsum.photos/200'  
        ];
    }

}
