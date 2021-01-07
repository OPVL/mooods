{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomp lete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@extends('layouts.guest')

@section('title', 'register')
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
                <form class="modal" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <label for="firstname">
                            {{ __('first name') }}
                        </label>
                        <input id="firstname" class="input" type="text" name="firstname" required autofocus
                            autocomplete="given-name" />
                    </div>
                    <div class="input-group">
                        <label for="surname">
                            {{ __('surname') }}
                        </label>
                        <input id="surname" class="input" type="text" name="surname" required autofocus
                            autocomplete="family-name" />
                    </div>
                    <div class="input-group">
                        <label for="email">
                            {{ __('Email') }}
                        </label>
                        <input id="email" class="input" type="email" name="email" required autocomplete="email" />
                    </div>
                    <div class="input-group">
                        <label for="password">
                            {{ __('Password') }}
                        </label>
                        <input id="password" class="input" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
                    <div class="input-group">
                        <label for="password_confirm">
                            {{ __('Confirm Password') }}
                        </label>
                        <input id="confirm_password" class="input" type="password" name="confirm_password" required
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
