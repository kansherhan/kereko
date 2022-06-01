<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link href="/favicon.ico" rel="icon" type="image/png" sizes="16x16">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
            color: #333;
            text-shadow: none;
        }

        body {
            position: relative;

            height: 100vh;

            background: url('/img/main-page-background.jpg');
            background-repeat: no-repeat;
            background-size: cover;

            backdrop-filter: blur(10px);

            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        body::before {
            content: '';

            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;

            width: 100%;
            height: 100%;

            background: rgba(0, 0, 0, 0.5);
        }

        .cover-container {
            max-width: 52em;
        }

        /* Header */

        .nav-masthead .nav-link {
            padding: .25rem 0;
            font-weight: 700;
            color: rgba(255, 255, 255, .5);
            background-color: transparent;
            border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
            margin-left: 1rem;
        }

        .nav-masthead .active {
            color: #fff;
            border-bottom-color: #fff;
        }
    </style>
</head>

<body class="d-flex text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">{{ config('app.name') }}</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Главная страница</a>
                    <a class="nav-link" href="{{ route('posts') }}">Посты</a>
                    <a class="nav-link" href="{{ route('categories') }}">Категории</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>{{ config('app.name') }}</h1>
            <p class="lead">Данные сайт сделан для демонстрации и сделан был для того чтобы показать малого возможности Laravel фреймворка</p>
        </main>
    
        <footer class="mt-auto text-white-50">
            <p>Сайт сделан с помощью фреймворка Laravel. <a href="https://github.com/kansherhan/kereko" class="text-white">Github репозиторий</a></p>
        </footer>
    </div>
</body>
</html>