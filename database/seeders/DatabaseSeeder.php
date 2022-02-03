<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Blog;
use App\Models\Chef;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //\App\Models\User::factory(1000)->create();
        $this->call([
            CategorySeeder::class,
            FoodSeeder::class,
            ChefSeeder::class,
            BlogSeeder::class,
            MessageSeeder::class,
            UserTableSeeder::class,
            PlaceSeeder::class
        ]);

        Food::factory(100)->create();
        Blog::factory(50)->create();
        Chef::factory(25)->create();

    }

}
