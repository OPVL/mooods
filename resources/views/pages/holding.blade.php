@extends('layouts.guest')

@section('title', __('feeling mooody?'))
    {{-- @section('code', '500') --}}
    {{-- @section('message', __('Feeling Moody')) --}}
@section('head')
    @include('partials.temp-styles')
@endsection

@section('styles')

@endsection

@section('content')
    <div class="frame">
        <div class="row hero full-height">
            <div class="column col-6">
                <div class="title brand biggest">
                    moood.
                    <div class="subtext">the open sourced mooods & thoughts tracker</div>
                    <div class="subtext">We're still under construction right now, but thanks for stopping by</div>
                    @if (Route::has('how-to-contribute'))
                        <div class="subtext">If you're interested in contributing have a look at our <a
                                href="{{ route('how-to-contribute') }}"> how to contribute page</a></div>
                    @endif
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="column col-6">
                @include('partials.socials')
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="column col-6">
                @include('partials.contribution', ['links' => [['icon' => 'fa-github','name' => 'Github','href' =>
                'https://github.com/OPVL/mooods']]])
            </div>
        </div> --}}
    </div>
@endsection
