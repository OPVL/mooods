<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
    <title>mooooooood</title>
    <link rel="stylesheet" href="wip.css">
</head>
<style>
    /** WIP STYLING **/
    * {
        padding: 0;
        margin: 0;
    }

    nav {
        width: 100vw;
        display: flex;
        justify-content: space-between;
        background: rgb(222 222 222);
    }

    #nav-logo {
        max-width: 100%;
    }

    .left {
        width: 10vw;
    }

</style>

<body>
    <nav>
        <div class="left">
            <a href="{{ route('home.index') }}"><img src="/img/nav-logo-small.png" alt="mooood-logo-small"></a>
        </div>
        <div class="centre">
            <span>searchbar maybe idek jus spitballin</span>
        </div>
        <div class="right">
            @if (Route::has('login'))
                <div class="authy-bits">
                    <span><i class="far fa-user-circle"></i></span>
                    @auth
                        {{-- <a href="logout">Logout</a> --}}
                    @endauth
                    <a href="login">Login</a>
                    <a href="register">Register</a>
                </div>
            @endif
        </div>
    </nav>
    <div class="how-are-you-interactive">
        <div class="app">
            <p>awaiting app</p>
        </div>
    </div>
</body>

</html>
