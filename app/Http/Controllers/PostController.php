<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
    public function allPosts()
    {
        $posts = Post::paginate(10);

        return view('pages.posts', [
            'posts' => $posts
        ]);
    }

    public function post(Post $post)
    {
        $comments = Comment::where('post_id', $post->id)
            ->orderBy('updated_at', 'DESC')
            ->paginate(5);

        return view('pages.post', [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}
