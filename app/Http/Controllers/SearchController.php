<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Post;

class SearchController extends Controller
{
    public function __invoke(SearchRequest $request)
    {
        $query = $request->get('query');

        $posts = Post::where('title', 'like', "%$query%")->take(10)->get();

        return view('pages.search', [
            'query' => $query,
            'posts' => $posts
        ]);
    }
}
