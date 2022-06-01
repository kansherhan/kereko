<?php

declare(strict_types=1);

namespace Database\Factories;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $index = random_int(1000, 9999);

        return [
            'title' => sprintf('Post %d', $index),
            'slug' => sprintf('post-%d', $index),
            'content' => sprintf('<p>%s</p>', Lorem::paragraph(random_int(50, 150))),
            'user_id' => null,
            'category_id' => random_int(1, 10)
        ];
    }
}
