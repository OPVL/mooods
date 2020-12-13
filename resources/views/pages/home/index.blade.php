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

    .how-are-you-interactive {
        width: calc(100vw - 80px);
        display: flex;
        height: 80vh;
        padding: 40px;
    }

</style>

<body>
    <nav>
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
            <div class="question">
                how are you feeling?
            </div>
            <div class="response">
                <form action="/bullshit" method="post">
                    <div class="moood-icons">
                        <div class="moood-icon">
                            <label for="mood-0"><div class="mood mood-0"></div></label>
                            <input type="radio" name="moood" id="mood-0">
                        </div>
                        <div class="moood-icon">
                            <label for="mood-1"><div class="mood mood-1"></div></label>
                            <input type="radio" name="moood" id="mood-1">
                        </div>
                        <div class="moood-icon">
                            <label for="mood-2"><div class="mood mood-2"></div></label>
                            <input type="radio" name="moood" id="mood-2">
                        </div>
                        <div class="moood-icon">
                            <label for="mood-3"><div class="mood mood-3"></div></label>
                            <input type="radio" name="moood" id="mood-3">
                        </div>
                        <div class="moood-icon">
                            <label for="mood-4"><div class="mood mood-4"></div></label>
                            <input type="radio" name="moood" id="mood-4">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
