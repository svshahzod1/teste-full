<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Milliy Taomlar',
                'description' => 'Ozbek milliy taomlari'
            ],
            [
                'name' => 'Uygur Taomlari',
                'description' => 'Uygur milliy taomlari'
            ],
            [
                'name' => 'Shirinliklar',
                'description' => 'Mazali shirinliklar'
            ],
            [
                'name' => 'Kechgi o`vqat',
                'description' => 'Mazali shirinliklar'
            ],
            [
                'name' => 'Fast Food',
                'description' => 'Mazali shirinliklar'
            ],
            [
                'name' => 'Nonushta',
                'description' => 'Mazali shirinliklar'
            ]
        ];


        DB::table('categories')->insert($categories);
    }
}
