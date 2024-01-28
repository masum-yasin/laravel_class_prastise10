<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class SuperAdminSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Creating Super Admin User
         $superAdmin = User::create([
            'name' => 'masum', 
            'email' => 'masum@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'mizanur', 
            'email' => 'mizanur@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'ikbal', 
            'email' => 'ikbal@gmail.com',
            'password' => Hash::make('admin23')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
