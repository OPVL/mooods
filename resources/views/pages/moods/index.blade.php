@extends('layouts.app')

@section('title', 'moooods')

@section('nav')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <div>
        make this section a sequential list of the moods submitted ever
        display them in an ever growing list that stretches down the page
    </div>
@endsection