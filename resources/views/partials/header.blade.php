<nav class="navbar navbar-expand-lg  align-items-center">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""
                style="    height: 60px;
        margin-left: 20px;
        padding: 5px;
    }">
        </a>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active_page' : '' }}"
                    href="{{ route('home') }}" aria-current="page" href="/" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active_page' : '' }}"
                    href="{{ route('comics') }}" aria-current="page" href="/comics">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === '/' ? 'active_page' : '' }}"
                    href="{{ route('comics') }}" aria-current="page" href="/">Movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === '/' ? 'active_page' : '' }}"
                    href="{{ route('comics') }}" aria-current="page" href="/">Tv Show</a>
            </li>
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                Search
            </button>
        </form>
    </div>
</nav>
