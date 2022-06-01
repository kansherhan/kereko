<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function categories()
    {
        return view('pages.categories', [
            'categories' => Category::paginate(30)
        ]);
    }

    public function categoryPosts(Category $category)
    {
        $posts = Post::select(['title', 'slug', 'user_id', 'created_at', 'updated_at'])
            ->where('category_id', $category->id)
            ->paginate(10);

        return view('pages.category-posts', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
