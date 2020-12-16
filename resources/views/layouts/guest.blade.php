<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jost:ital,wght@0,400;0,700;1,300;1,400;1,600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
    @yield('head')
</head>

<body>
    {{-- @include('partials.nav') --}}
    @yield('content')
    @include('partials.footer')
</body>

</html>
