@extends('layouts.main-template')

@section('title', 'Список категории')

@section('content')
    <div class="categories">
        <div class="container">
            @foreach($categories as $category)
                <div class="block">
                    <a class="categories-title" href="{{ route('categoryPosts', $category->slug) }}">{{ $category->title }}</a>

                    <p class="categories-description">{{ $category->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection