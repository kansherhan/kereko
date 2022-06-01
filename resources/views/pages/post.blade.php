@extends('layouts.main-template')

@section('title', $post->title)

@section('content')
    <div class="post">
        <div class="container">
            <div class="block">
                <div class="row">
                    <div class="col">
                        <h1 class="post-title">{{ $post->title }}</h1>
        
                        <p class="post-category">
                            <span>Категория:</span>
                            <a href="{{ route('categoryPosts', $post->category->slug) }}">{{ $post->category->title }}</a>
                        </p>
                
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="block">
                @guest
                    <b>Авторизутесть чтобы отправить комментарий!</b>    
                @endguest
                @auth
                    <p class="h3">Добавить новый комментарий:</p>

                    <form action="{{ route('comment.create', $post->slug) }}" method="post">
                        @csrf

                        <div class="form-group">
                            @error('content')
                                <p class="text-danger">Длина строки должна быть не менее 3 символов.</p>
                            @enderror

                            <label for="comment-input-content">Содержимое:</label>

                            
                            <textarea name="content" class="form-control" id="comment-input-content" rows="2"></textarea>
                        </div>

                        <input type="submit" value="Отправить" class="btn btn-primary mt-3">
                    </form>
                @endauth
            </div>
            
            @foreach($comments as $comment)
                <div class="block">
                    <div class="comment">
                        <p class="comment-author">
                            <a class="comment-author-username" href="{{ route('user.profile', $comment->user->username) }}">
                                {{ $comment->user->username }}
                            </a>

                            <span class="comment-date">
                                @if ($comment->created_at != $comment->updated_at)
                                    Редактирована
                                @endif
                                
                                @datetime($comment->updated_at)
                            </span>
                        </p>
        
                        <p>{{ $comment->content }}</p>
    
                        @can('delete', $comment)
                            <a class="btn btn-danger" href="{{ route('comment.delete', [$post->slug, $comment->id]) }}">Delete comment</a>
                        @endcan
                    </div>
                </div>
            @endforeach
    
            {{ $comments->links('layouts.pagination') }}
        </div>
    </div>
@endsection