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
    </div>
@endsection

@section('scripts')
    
@endsection