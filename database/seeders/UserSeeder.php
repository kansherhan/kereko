<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            User::create([
                'username' => sprintf('user%d', $i),
                'nickname' => sprintf('User %d', $i),
                'email' => sprintf('user%d@gmail.com', $i),
                'password' => Hash::make('password')
            ])->save();
        }
    }
}
