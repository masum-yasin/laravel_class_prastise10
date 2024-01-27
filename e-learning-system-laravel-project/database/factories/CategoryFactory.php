<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->lastName() ,                               // 'Zulauf'
            'Description' =>$this->faker->sentence(5) ,                               // 'laravel is a user friendly language'
            'image' =>$this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
        ];
    }
}
