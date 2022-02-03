<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            [
                'nomi' => 'Palov',
                'categoriy_id' => 1,
                'narxi' => '10',
                'retsept' => 'go`sht,sabzi,guruch,yog',
                'image' => ''
            ],
            [
                'nomi' => 'Palov',
                'categoriy_id' => 1,
                'narxi' => '10',
                'retsept' => 'go`sht,sabzi,guruch,yog',
                'image' => ''
            ],
            [
                'nomi' => 'Palov',
                'categoriy_id' => 1,
                'narxi' => '10',
                'retsept' => 'go`sht,sabzi,guruch,yog',
                'image' => ''
            ]
        ];


        DB::table('food')->insert($foods);
    }
}
