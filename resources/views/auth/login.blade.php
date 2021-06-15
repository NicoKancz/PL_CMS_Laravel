@extends('layout')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="tw-w-20 tw-h-20 tw-fill-current tw-text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="tw-mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="tw-mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="userEmail" :value="__('Email')" />

                <x-input id="email" class="tw-block tw-mt-1 tw-w-full" type="email" name="userEmail" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="tw-block tw-mt-1 tw-w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="tw-block tw-mt-4">
                <label for="remember_me" class="tw-inline-flex tw-items-center">
                    <input id="remember_me" type="checkbox" 
                        class="tw-rounded tw-border-gray-300 tw-text-indigo-600 tw-shadow-sm 
                            focus:tw-border-indigo-300 focus:tw-ring focus:tw-ring-indigo-200 focus:tw-ring-opacity-50" 
                        name="remember">
                    <span class="tw-ml-2 tw-text-sm tw-text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="tw-flex tw-items-center tw-justify-end tw-mt-4">
                @if (Route::has('password.request'))
                    <a class="tw-underline tw-text-sm tw-text-gray-600 hover:tw-text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="tw-ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
