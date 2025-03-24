<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('category')->insert([
            'category_name' => 'Bag',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        
        DB::table('category')->insert([
            'category_name' => 'Hat',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
