<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory(10)->create();


          //     categories::create([
        //         'name'=> 'mahmudul hasan',
        //         'is active'=> true
        //     ]);

        //     categories::create([
        //         'name'=> 'hasan mahmud',
        //         'is active'=> true
        //     ]);
    }
}
