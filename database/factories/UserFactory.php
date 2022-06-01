<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
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
            'username' => sprintf('user%d', $index),
            'nickname' => sprintf('User %d', $index),
            'email' => sprintf('user%d@gmail.com', $index),
            'password' => Hash::make('password')
        ];
    }
}
