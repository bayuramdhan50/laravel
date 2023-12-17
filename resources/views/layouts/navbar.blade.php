<!-- Navbar  -->
<header>
    <a href="/" class="logo">
        <i class='bx bxs-movie'></i>Silver Screen Saga
    </a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <!-- menu  -->
    <ul class="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="#movies">Movies</a></li>
        <li><a href="/genre">Genre</a></li>
        <li><a href="/community">Community</a></li>
        <li><a href="/store">Store</a></li>
        @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>

                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            @endauth
        @endif
    </ul>
</header>
