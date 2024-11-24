<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                'category_name' => fake()->randomElement(['Laptop', 'Ram', 'Rom', 'Card']),
                'slug' => fake()->randomElement(['1', '2', '3']),
                'category_photo' => fake()->imageUrl('60', '60'),
                'status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_name' => fake()->randomElement(['Laptop', 'Ram', 'Rom', 'Card']),
                'slug' => fake()->randomElement(['1', '2', '3']),
                'category_photo' => fake()->imageUrl('60', '60'),
                'status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_name' => fake()->randomElement(['Laptop', 'Ram', 'Rom', 'Card']),
                'slug' => fake()->randomElement(['1', '2', '3']),
                'category_photo' => fake()->imageUrl('60', '60'),
                'status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
