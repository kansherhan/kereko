<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(CreateCommentRequest $request, Post $post)
    {
        Comment::create([
            'content' => $request->post('content'),
            'user_id' => $request->user()->id,
            'post_id' => $post->id
        ]);

        return redirect(route('post', $post->slug));
    }

    public function delete(string $postSlug, Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return redirect(route('post', $postSlug));
    }
}
