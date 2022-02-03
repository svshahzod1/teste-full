<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place = [
            [
                'name' => 'Javoxir',
                'phone' => '+987654321',
                'date' => '12/10/2021',
                'time' => '12:30',
                'guest' => '2',
                'email' => 'javo@javo.com'
            ],
            [
                'name' => 'Javoxir',
                'phone' => '+987654321',
                'date' => '12/10/2021',
                'time' => '12:30',
                'guest' => '2',
                'email' => 'javo@javo.com'
            ],
            [
                'name' => 'Javoxir',
                'phone' => '+987654321',
                'date' => '12/10/2021',
                'time' => '12:30',
                'guest' => '2',
                'email' => 'javo@javo.com'
            ],
            [
                'name' => 'Javoxir',
                'phone' => '+987654321',
                'date' => '12/10/2021',
                'time' => '12:30',
                'guest' => '2',
                'email' => 'javo@javo.com'
            ]
        ];

        DB::table('places')->insert($place);
    }
}
