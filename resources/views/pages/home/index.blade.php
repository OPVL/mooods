<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
    <title>mooooooood</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;700&display=swap"
        rel="stylesheet">
</head>
<style>
    /** WIP STYLING **/
    * {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: 'Yanone Kaffeesatz', sans-serif;
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

    .app {
        /* extract to separate app styling for react components */
        width: 100vw;
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .app .question {
        font-size: 4vw;
        font-weight: 200;
    }

    form.response-form {
        display: flex;
        flex-direction: column;
        min-height: 200px;
        justify-content: space-evenly;
        min-width: 350px;
        align-items: center;
    }

    .moood-icons {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 65%;
        height: 100px;
    }

    .moood-icon {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 60px;
        height: 60px;
    }

    .moood-icon .mood {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        /* background: black; */
    }

    .moood-icon input {
        width: 0;
        height: 0;
        opacity: 0;
    }

    .moood-icon:hover input~.mood {
        /* border: 2px solid gray; */
    }

    /* When the radio button is checked, add a blue background */
    .mood-icon input:checked~.mood {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .mood:after {
        content: "";
        position: absolute;
        display: none;
    }

    .moood-icon input:checked~.mood:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .moood-icon .mood:after {
        top: calc(50% - 8px);
        left: calc(50% - 8px);
        width: 16px;
        height: 16px;
        margin: auto;
        border-radius: 50%;
        background: white;
    }

    /* .moodo-icon input */

    .mood-0 {
        background: rgb(182, 49, 49);
    }

    .mood-1 {
        background: rgb(69, 36, 121);
    }

    .mood-2 {
        background: rgb(47, 0, 255);
    }

    .mood-3 {
        background: rgb(0, 255, 200);
    }

    .mood-4 {
        background: rgb(0, 255, 0);
    }

    .hidden {
        display: none !important;
    }

</style>

<style>
    /* Customize the label (the container) */
    .container {
        display: block;
        position: relative;
        /* padding-left: 35px; */
        /* margin-bottom: 12px; */
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        /* background-color: #eee; */
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        /* background-color: #ccc; */
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked~.checkmark {
        /* background-color: #2196F3; */
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        /* top: 9px; */
        /* left: 9px; */
        /* width: 8px; */
        /* height: 8px; */
        border-radius: 50%;
        background: white;
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
                <form class="response-form" action="/bullshit" method="post">
                    <div class="moood-icons">
                        <label class="container moood-icon">
                            <input type="radio" name="moood" id="mood-0">
                            <span class="checkmark mood mood-0"></span>
                        </label>

                        <label class="container moood-icon">
                            <input type="radio" name="moood" id="mood-1">
                            <span class="checkmark mood mood-1"></span>
                        </label>

                        <label class="container moood-icon">
                            <input type="radio" name="moood" id="mood-2">
                            <span class="checkmark mood mood-2"></span>
                        </label>

                        <label class="container moood-icon">
                            <input type="radio" name="moood" id="mood-3">
                            <span class="checkmark mood mood-3"></span>
                        </label>
                    </div>

                    {{-- <div class="moood-icons">
                        <label class="moood-icon">
                            <div class="mood mood-0"></div>
                            <input type="radio" name="moood" id="mood-0">
                        </label>
                        <label class="moood-icon">
                            <div class="mood mood-1"></div>
                            <input type="radio" name="moood" id="mood-1">
                        </label>
                        <label class="moood-icon">
                            <div class="mood mood-2"></div>
                            <input type="radio" name="moood" id="mood-2">
                        </label>
                        <label class="moood-icon">
                            <div class="mood mood-3"></div>
                            <input type="radio" name="moood" id="mood-3">
                        </label>
                        <label class="moood-icon">
                            <div class="mood mood-4"></div>
                            <input type="radio" name="moood" id="mood-4">
                        </label>
                    </div> --}}
                    <div class="moood-thoughts">
                        <label for="mood-thought">enter your thoughts</label>
                        <input class="hidden" type="text" name="thoughts" id="mood-thought">
                    </div>
                    {{-- extract this to separate method to show privacy policy on env
                    (prod|dev) --}}
                    @if (config('app.env') !== 'self-hosted')
                        <div class="privacy-policy">usage of this service is subject to our data privacy policy. you can
                            opt out of any anonymoised tracking <a href="opt-out-tracking">here</a> or find out more
                            about the data collected and your options <a href="privacy-policy">here</a></div>
                    @endif
                </form>

            </div>
        </div>
    </div>
</body>

</html>
