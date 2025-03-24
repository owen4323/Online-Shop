<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('product')->insert([
            'product_name' => 'Chanel 22 Mini Handbag',
            'price' => 105530830,
            'quantity' => 5,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        
        DB::table('product')->insert([
            'product_name' => 'Louis Vuitton Monogram Loop Bag',
            'price' => 49540719,
            'quantity' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('product')->insert([
            'product_name' => 'Chanel Newsboy Leather Hat',
            'price' => 141544913,
            'quantity' => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('product')->insert([
            'product_name' => 'Louis Vuitton Cloud Bucket Hat',
            'price' => 25350637,
            'quantity' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
