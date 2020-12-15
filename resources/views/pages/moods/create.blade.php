@extends('layouts.app')

@section('title', 'moooods')

    {{-- @section('nav')
    @parent

    <p>This is appended to the master sidebar.</p>
    @endsection --}}

@section('content')
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Yanone Kaffeesatz', sans-serif;
            color: #eee;
        }

        nav {
            width: 100vw;
            display: flex;
            justify-content: space-between;
            background: #222;
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
            background: #1b1b1b;
            /* extract to separate app styling for react components */
            width: 100vw;
            height: 100vh;
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
    <div class="app">
        @error('mood', 'thoughts')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @include('partials.mood.form-basic')
    </div>
@endsection
