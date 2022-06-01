@extends('layouts.main-template')

@section('title', 'Список постов')

@section('content')
    <div class="posts">
        <div class="container">
            @foreach($posts as $post)
                <div class="block posts-block">
                    <div class="posts-item-data">
                        @php
                            $user = $post->user;
                        @endphp

                        <a class="posts-item-username" href="{{ route('user.profile', $user->username) }}">{{ $user->username }}</a>

                        <span class="posts-item-date">Z
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
        </div>
    </div>
@endsection