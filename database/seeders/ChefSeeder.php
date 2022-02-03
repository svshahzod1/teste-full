<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chefs = [
            [
                'name' => 'Jhon',
                'job' => 'Oshpaz',
                'bio' => 'Yaxshi oshpaz',
                'img' => ''
            ],
            [
                'name' => 'Maykl',
                'job' => 'Oshpaz',
                'bio' => 'Yaxshi oshpaz',
                'img' => ''
            ],
            [
                'name' => 'Jordon',
                'job' => 'Oshpaz',
                'bio' => 'Yaxshi oshpaz',
                'img' => ''
            ]
        ];


        DB::table('chefs')->insert($chefs);
    }
    
}
