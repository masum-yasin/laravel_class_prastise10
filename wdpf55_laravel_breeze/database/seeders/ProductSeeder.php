<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'White Shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Black Shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Blue Shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Yellow Shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Gory Shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price' => '100',
            'category_id' => '1',
            'availibility' => '1'
        ]);
    }
}
