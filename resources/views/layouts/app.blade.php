<!-- resources/views/layouts/app.blade.php -->

<html>

<head>
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jost:ital,wght@0,400;0,700;1,300;1,400;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
    @yield('head')
    @include('partials.favicons')
</head>

<body>
    {{-- <nav style="position: fixed">
        @section('nav')
        <div class="left">
            <a href="{{ route('home.index') }}">
                <img id="nav-logo" src="/img/nav-logo-small.png" alt="mooood-logo-small">
            </a>
        </div>
        <div class="centre">
            <span>searchbar maybe idek jus spitballin</span>
        </div>
        <div class="right">
            @if (Route::has('login'))
                <div class="authy-bits">
                    <span><i class="far fa-user-circle"></i></span>
                    @auth
                    <a href="logout">Logout</a>
                    @endauth
                    <a href="login">Login</a>
                    <a href="register">Register</a>
                </div>
            @endif
        </div>
    </nav>
    @show

    <main>
        @yield('content')
    </main> --}}
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
    @yield('scripts')
</body>

</html>
