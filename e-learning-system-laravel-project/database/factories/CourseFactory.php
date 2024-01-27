<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $title = fake()->sentence();
        return [
            // "title" => $title,
            // "slug" => Str::slug($title),
            // "price" => fake()->randomFloat(1, 20, 30),
            // "category_id" => fake()->randomElement(Category::pluck('id')),
            // "description" => fake()->paragraph(2),
            // "image" => fake()->image('public/avaters', 640, 480, null, false)
        ];
    }
}