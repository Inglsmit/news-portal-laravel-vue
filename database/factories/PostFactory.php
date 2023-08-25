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
        return [
            'title' => ucfirst($this->faker->words(4, true)),
            'description' => $this->faker->text,
            'preview' => $this->faker->text,
            'thumbnail' => $this->faker->imageUrl(640, 480,null, true, null, false, 'png'),
        ];
    }
}
