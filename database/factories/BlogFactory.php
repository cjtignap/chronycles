<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'subtitle'=>$this->faker->sentence(),
            'username'=>$this->faker->userName(),
            'description'=>$this->faker->paragraph(10),
            'header-image'=>$this->faker->image(),
            'blog-image'=>$this->faker->image(),
        ];
    }
}
