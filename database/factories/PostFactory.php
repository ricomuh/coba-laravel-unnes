<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->locale('id_ID');
        $title = $this->faker->sentence(rand(5, 10));

        return [
            'title' => $title,
            'slug' => str($title)->slug(),
            'body' => $this->faker->paragraph(rand(10, 20)),
        ];
    }
}
