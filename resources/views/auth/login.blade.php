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
    <style>
        .modal-anchor {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form.modal {
            min-width: 350px;
            min-height: 400px;
            /* background: gray; */
            align-items: sp;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
        }

        button {
            height: 60px;
            width: 100%;
            border: 2px solid black;
            border-radius: 3px;
        }

        input {
            height: 36px;
            width: 100%;
            border: 2px solid black;
            border-radius: 5px;
        }

    </style>
    <div class="frame">
        <div class="row hero full-height">
            <div class="modal-anchor">
                <form class="modal" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <label for="email">
                            {{ __('Email') }}
                        </label>
                        <input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="email" />
                    </div>
                    <div class="input-group">
                        <label for="password">
                            {{ __('Password') }}
                        </label>
                        <input id="password" class="input" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
                    <div class="input-group">
                        <button type="submit">login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
