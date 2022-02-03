<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = [
            [
                'name' => 'Javoxir',
                'email' => 'javoxir@gmail.com',
                'subject' => 'Bu nima',
                'message' => 'Buning javobi bormi'
            ],
            [
                'name' => 'Javoxir',
                'email' => 'javoxir@gmail.com',
                'subject' => 'Bu nima',
                'message' => 'Buning javobi bormi'
            ],
            [
                'name' => 'Javoxir',
                'email' => 'javoxir@gmail.com',
                'subject' => 'Bu nima',
                'message' => 'Buning javobi bormi'
            ],
            [
                'name' => 'Javoxir',
                'email' => 'javoxir@gmail.com',
                'subject' => 'Bu nima',
                'message' => 'Buning javobi bormi'
            ],
        ];

        DB::table('messages')->insert($message);
    }
}
