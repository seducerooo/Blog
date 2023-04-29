<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Blog Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="btn btn-dark">logout</button>
                    </form>
{{--                    <a  href="{{ url('logout')}}">logout</a>--}}
                </li>
                <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard')}}">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">register</a>
                </li>
                @endif
                @endauth
            </ul>
            @endif
        </div>
    </div>
</nav>
