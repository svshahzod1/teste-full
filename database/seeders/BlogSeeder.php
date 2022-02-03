<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = [
            [
                'image' => '',
                'date' => '12.10.2022',
                'author' => 'Javoxir',
                'short' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem'
            ],
            [
                'image' => '',
                'date' => '12.10.2022',
                'author' => 'Javoxir',
                'short' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem'
            ],
            [
                'image' => '',
                'date' => '12.10.2022',
                'author' => 'Javoxir',
                'short' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem'
            ],
            [
                'image' => '',
                'date' => '12.10.2022',
                'author' => 'Javoxir',
                'short' => 'Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem'
            ]
        ];

        DB::table('blogs')->insert($blog);
    }


}
