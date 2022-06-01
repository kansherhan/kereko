<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Главная страница</a></li>
                <li><a href="{{ route('posts') }}" class="nav-link px-2 text-white">Посты</a></li>
                <li><a href="{{ route('categories') }}" class="nav-link px-2 text-white">Категории</a></li>
            </ul>

            <form class="search-form col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="get" action="{{ route('search') }}">
                <input name="query" type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
            </form>

            <div class="text-end">
                @auth
                    <a href="{{ route('user.home') }}" class="btn btn-outline-light me-2">{{ Auth::user()->username }}</a>
                @else    
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Войти</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light">Зарегистрировать</a>
                @endguest
            </div>
        </div>
    </div>
</header>