@props(['categories'])
<nav class="navbar navbar-expand-lg navbar-dark my-nav">
    <button class="navbar-toggler order-lg-1" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="sign order-lg-3">
        <ul class="navbar-nav flex-row">
            @guest
                <a class="nav-link me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <div class="m-auto">Welcome {{ Auth::user()->name }}</div>

                <a href="{{ route('logout') }}" class="nav-link me-2" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest
        </ul>
    </div>
    <div class="collapse navbar-collapse fs-6 order-lg-2" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 text-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/category?id=28" id="Movies" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Movies
                </a>
                <ul class="dropdown-menu" aria-labelledby="Movies">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="/category?id=<?= $category['id'] ?>"><?= $category['name'] ?>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Other</a>
            </li>
        </ul>
    </div>

</nav>
