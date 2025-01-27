<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Karta Graficzna', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Płyta Główna', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Procesor', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Pamięć RAM', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Dysk Twardy', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('categories')->insert($categories);
    }
}
