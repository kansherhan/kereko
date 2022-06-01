<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 1; $i < 100; $i++) {
            Post::create([
                'title' => sprintf('Post %d', $i),
                'slug' => sprintf('post-%d', $i),
                'content' => sprintf('<p>%s</p>', Lorem::paragraph(random_int(50, 200))),
                'user_id' => random_int(1, 30),
                'category_id' => random_int(1, 15)
            ])->save();
        }
    }
}
