@extends('layouts.main-template')

@section('title', 'Список постов у ' . $category->title)

@section('content')
    <div class="category-posts">
        <div class="container">
            <div class="block category-posts-data">
                <h1 class="category-posts-title">{{ $category->title }}</h1>

                <p class="category-posts-description">{{ $category->description }}</p>
            </div>

            @if (!empty($posts))
                @foreach($posts as $post)
                    <div class="block posts-block">
                        <div class="posts-item-data">
                            <span class="posts-item-username">{{ $post->user->username }}</span>
                            
                            <span class="posts-item-date">
                                @if ($post->created_at != $post->updated_at)
                                    Редактирована
                                @endif
                                
                                @datetime($post->updated_at)
                            </span>
                        </div>

                        <a class="posts-item-link" href="{{ route('post', $post->slug) }}">
                            <h2 class="posts-item-title">{{ $post->title }}</h2>
                        </a>
                    </div>
                @endforeach

                {{ $posts->links('layouts.pagination') }}
            @else
                <p>Пусто!</p>
            @endif
        </div>
    </div>
@endsection