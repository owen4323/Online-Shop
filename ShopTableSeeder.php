<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('shop')->insert([
            'shop_name' => 'Chanel',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        
        DB::table('shop')->insert([
            'shop_name' => 'Louis Vuitton',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
