<?php

declare(strict_types=1);

namespace Database\Factories;

use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $index = random_int(1000, 9999);

        return [
            'title' => sprintf('Category %d', $index),
            'slug' => sprintf('category-%d', $index),
            'description' => Lorem::paragraph(1)
        ];
    }
}
