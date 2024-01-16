<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'white shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price'=>'100',
            'category'=>'1',
            'availibility'=>'1'
        
        ]);
        DB::table('products')->insert([
            'name' => 'Black shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price'=>'100',
            'category_id'=>'1',
            'availibility'=>'1'
        
        ]);
        DB::table('products')->insert([
            'name' => 'Black shirt',
            'description' => 'product description content',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tag',
            'price'=>'100',
            'category_id'=>'1',
            'availibility'=>'1'
        
        ]);
    }
}
