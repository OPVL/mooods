@extends('layouts.app')

@section('head')
    @include('partials.temp-styles')
@endsection

@section('content')
    <div class="frame">
        <div class="row hero">
            <div class="column col-6">
                <div class="greeting">good evening, {{ $user->firstname }}</div>
            </div>
            <div class="column col-2 text-right">
                <div id="dateString" class="date">Monday 15th December</div>
                <div id="timeString" class="time">00:26</div>
            </div>
        </div>
        @if (!$user->hasRecentMood())
            <div class="row moood-reminder">
                <div class="column col-2">
                    <div class="dismiss-button"><i class="fas fa-times"></i></div>
                </div>
                <div class="column col-4">
                    <div class="inner">
                        <div class="question">
                            how are you feeling?
                        </div>
                        <a href="{{ route('mood.create') }}" class="launch-button"><i class="fas fa-arrow-right"></i></a>
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
    </div>
@endsection

@section('scripts')
    <script>
        const getOrdinalNum = (number) => {
            let selector;

            if (number <= 0) {
                selector = 4;
            } else if ((number > 3 && number < 21) || number % 10 > 3) {
                selector = 0;
            } else {
                selector = number % 10;
            }

            return number + ['th', 'st', 'nd', 'rd', ''][selector];
        };

        function showTime() {
            console.log('running');
            var date = new Date();

            const month = date.toLocaleDateString('en-US', {
                month: 'long'
            });
            const day = date.toLocaleDateString('en-US', {
                weekday: 'long'
            });
            console.log([month, day]);


            const dateString = `${day} ${getOrdinalNum(date.getDay())} ${month}`;

            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;

            var time = h + ":" + m;
            const eTime = document.getElementById("timeString");
            eTime.innerText = time;
            eTime.textContent = time;

            const eDate = document.getElementById("dateString");
            eDate.innerText = dateString;
            eDate.textContent = dateString;

            setTimeout(showTime, 15000);

        }

        showTime();

    </script>
@endsection
