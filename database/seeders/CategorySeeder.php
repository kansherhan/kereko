<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {
            Category::create([
                'title' => sprintf('Category %d', $i),
                'description' => Lorem::paragraph(1),
                'slug' => sprintf('category-%d', $i)
            ])->save();
        }
    }
}
