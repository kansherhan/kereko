@extends('layouts.main-template')

@section('title', 'Поиск по слову ' . $query)

@section('content')
    <div class="search">
        <div class="container">
            @if (!empty($posts))
                @foreach($posts as $post)
                    <div class="block posts-block">
                        <div class="posts-item-data">
                            @php
                                $user = $post->user;
                            @endphp

                            <a class="posts-item-username" href="{{ route('user.profile', $user->username) }}">{{ $user->username }}</a>

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
            @else
                <p class="text">По запросу "{{ $query }}" ничего! Попробуйте поискать по другим ключевым словам</p>
            @endif
        </div>
    </div>
@endsection