{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.guest')

@section('title', 'login')
@section('head')
    @include('partials.temp-styles')
@endsection

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="frame">
            <div class="row hero full-height">
                <div class="column col-2">
                    <div class="app-name">moood.</div>
                    <div class="page-name">login</div>
                </div>
                <div class="column col-6">
                    <label for="email">
                        {{ __('Email') }}
                    </label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                        autofocus autocomplete="email" />

                    <label for="password">
                        {{ __('Password') }}
                    </label>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
                <button type="submit">login</button>
            </div>
        </div>
    </form>
@endsection
