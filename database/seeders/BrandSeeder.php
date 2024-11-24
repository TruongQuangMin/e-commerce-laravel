<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('brands')->insert([
            [
                'brand_name' => 'HP',
                'brand_slug' => 'HP',
                'brand_logo' => fake()->imageUrl('60', '60'),
                'brand_description' => 'No description',
                'brand_status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'brand_name' => 'Lenovo',
                'brand_slug' => 'Lenovo',
                'brand_logo' => fake()->imageUrl('60', '60'),
                'brand_description' => 'No description',
                'brand_status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'brand_name' => 'MSI',
                'brand_slug' => 'MSI',
                'brand_logo' => fake()->imageUrl('60', '60'),
                'brand_description' => 'No description',
                'brand_status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'brand_name' => 'Asus',
                'brand_slug' => 'Asus',
                'brand_logo' => fake()->imageUrl('60', '60'),
                'brand_description' => 'No description',
                'brand_status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'brand_name' => 'Acer',
                'brand_slug' => 'Acer',
                'brand_logo' => fake()->imageUrl('60', '60'),
                'brand_description' => 'No description',
                'brand_status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'brand_name' => 'Macbook',
                'brand_slug' => 'HP',
                'brand_logo' => fake()->imageUrl('60', '60'),
                'brand_description' => 'No description',
                'brand_status' => fake()->randomElement(['1', '2']),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
