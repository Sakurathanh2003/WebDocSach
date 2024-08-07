<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //'bookID', 'order', 'title', 'content'
        return [
            'bookID' => fake(),
            'order' => fake(),
            'title' => fake(),
            'content' => fake(),
        ];
    }
}
