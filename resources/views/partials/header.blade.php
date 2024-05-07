<nav class="navbar navbar-expand-sm navbar-light">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""
        style="    height: 60px;
    margin-left: 20px;
    padding: 5px;
}">
    <div class="container">

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active_page' : '' }}"
                        href="{{ route('home') }}" aria-current="page" href="/" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active_page' : '' }}"
                        href="{{ route('comics') }}" aria-current="page" href="/comics">Comics</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>
