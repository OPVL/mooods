{{-- @extends('layouts.app')

@section('title', 'moooods') --}}

{{-- @section('nav')
@parent

<p>This is appended to the master sidebar.</p>
@endsection --}}

{{-- @section('content')
@foreach ($moods as $mood)
    {{ $mood->value }}
@endforeach
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{greeting} - dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jost:ital,wght@0,400;0,700;1,300;1,400;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
</head>
<style>
    /* Utl calsses */
    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    .frame {
        /* margin-top: 50px; */
        width: 100vw;
        display: flex;
        flex-direction: column
    }

    .row {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: center
    }

    .column {
        padding: 30px;
    }

    .col-8 {
        width: 60vw;
    }

    .col-7 {
        width: 52.5vw;
    }

    .col-6 {
        width: 45vw;
    }

    .col-5 {
        width: 25vw;
    }

    .col-4 {
        width: 20vw;
    }

    .col-3 {
        width: 15vw;
    }

    .col-2 {
        width: 15vw;
    }

    .col-1 {
        width: 5vw;
    }

</style>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        background: #393E41;
        color: #F6F7EB;
        font-family: 'Jost', sans-serif;
    }

    nav {
        background: #1A1D1E;
        border-bottom: 3px solid #9590A8;
        width: 100vw;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .calendar-frame {
        width: 100%;
        min-height: 400px;
        display: flex;
        flex-direction: column
    }

    .calendar {
        width: 600px;
        height: 350px;
        padding: 25px;
        border-radius: 15px;
        border: 3px solid #E94F37;
        background: #F6F7EB;
    }

    .date {
        font-weight: 700;
        text-transform: lowercase;
        font-size: 24px;
        letter-spacing: 2.1px;
    }

    .time {
        font-weight: 400;
        text-transform: lowercase;
        letter-spacing: 13.1px;
    }

    .greeting {
        font-size: 48px;
        font-weight: 700;
        letter-spacing: 2.1px;
        font-style: italic;
    }

    nav .title {
        font-size: 40px;
        font-family: 'Abril Fatface', cursive;
        padding: 3px;
    }

    nav .inner {
        width: 70vw;
    }

    .module .title {
        font-family: 'Abril Fatface', cursive;
    }

    .row.hero {
        height: 80vh;
        background: linear-gradient(45deg, #0a7e9a75, rgb(136 38 12 / 57%)), url("https://source.unsplash.com/random/1920x1080?abstract");
        background-size: cover;
        justify-content: center;
        align-items: flex-end;
        background-attachment: fixed;
    }

    .hero.half {
        height: 40vh;
    }

    .recent-moods-frame .title {
        font-size: 48px;
    }

    .quote-frame .title {
        margin-bottom: 15px;
        padding: 6px;
        border-bottom: 2px solid grey;
        font-size: 36px;
    }

    .module .body {
        font-style: italic;
    }

    .quote {
        font-size: 19px;
        line-height: 150%;
        letter-spacing: 0.7px;
        font-weight: 100;
    }

    .quote .caption {
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        color: grey;
    }

    .mood-day {
        width: 5vw;
        height: 5vh;
    }

    .mood-row {
        display: flex;
    }

    .moood-reminder {
        background: #F28482;
        justify-content: space-between;
        align-items: center;
    }

    .moood-reminder .inner {
        display: flex;
        justify-content: center;
        padding: 5px;
        align-items: center;
    }

    .question {
        font-size: 16px;
        FONT-WEIGHT: 600;
        margin-right: 11px;
    }

    .moood-reminder .column {
        padding: 0px;
        /* display: flex; */
        /* justify-content: center; */
        align-items: center;
        height: 100%;
    }

    .launch-button {
        height: 22px;
        width: 22px;
        background: #F6F7EB;
        display: flex;
        border-radius: 50%;
    }

    .launch-button .fas.fa-arrow-right {
        color: #F28482;
        margin: auto;
    }

    .dismiss-button {
        width: 16px;
        height: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        /* padding: 5px; */
        background: #F6F7EB;
        margin: auto;
        color: #F28482;
        border-radius: 50%;
    }

</style>
<style>
    /* media queries */
    @media only screen and (max-width: 1400px) {
        .column {
            padding: 30px;
        }

        .col-8 {
            width: 80vw;
        }

        .col-7 {
            width: 70vw;
        }

        .col-6 {
            width: 60vw;
        }

        .col-5 {
            width: 50vw;
        }

        .col-4 {
            width: 40vw;
        }

        .col-3 {
            width: 30vw;
        }

        .col-2 {
            width: 20vw;
        }

        .col-1 {
            width: 10vw;
        }

        nav .inner {
            width: 90vw;
        }
    }

</style>

<body>
    <nav>
        <div class="inner">
            <div class="title">moood.</div>
        </div>
    </nav>
    <div class="frame">
        <div class="row hero">
            <div class="column col-6">
                <div class="greeting">good evening, lloyd</div>
            </div>
            <div class="column col-2 text-right">
                <div class="date">Monday 15th December</div>
                <div class="time">00:26</div>
            </div>
        </div>
        @if (true)
        <div class="row moood-reminder">
            <div class="column col-2">
                <div class="dismiss-button"><i class="fas fa-times"></i></div>
            </div>
            <div class="column col-4">
                <div class="inner">
                    <div class="question">
                        how are you feeling?
                    </div>
                    <div class="launch-button"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="column col-2"></div>
        </div>
        @endif
        <div class="row">
            <div class="column col-6">

                {{-- <div class="calendar-frame">
                    <div class="title">calendar</div>
                    <div class="subtitle">see your mood over the last 30 days</div>
                    <div class="calendar">
                        @for ($weeks = 0; $weeks < 5; $weeks++)
                            <div class="calendar-row">
                                @for ($days = 0; $days < 7; $days++)
                                    <div class="calendar-cell">{{ rand() }}</div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div> --}}
                <div class="recent-moods-frame module">
                    <div class="title">recent moooods.</div>
                    {{-- <div class="subtitle">see your mood over the last 30 days</div>
                    --}}
                    <div class="recent-moods">
                        @for ($rows = 0; $rows < 15; $rows++)
                            <div class="mood-row">
                                @for ($days = 0; $days < 8; $days++)
                                    <div class="mood-day"
                                        style="background: rgb({{ rand() % 255 }},{{ rand() % 255 }},{{ rand() % 255 }})">
                                    </div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="column col-2">
                <div class="quote-frame module text-right">
                    <div class="title">quote of the day</div>
                    <div class="body">
                        <div class="quote">The best way to not feel hopeless is to get up and do something. Don't wait
                            for good things to happen to you. If you go out and make some good things...
                            <p class="caption">Barack Obama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
