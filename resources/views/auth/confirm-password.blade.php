@extends('layout')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="tw-w-20 tw-h-20 tw-fill-current tw-text-gray-500" />
            </a>
        </x-slot>

        <div class="tw-mb-4 tw-text-sm tw-text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="tw-mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="userPassword" :value="__('Password')" />

                <x-input id="userPassword" class="tw-block tw-mt-1 tw-w-full"
                                type="password"
                                name="userPassword"
                                required autocomplete="current-password" />
            </div>

            <div class="tw-flex tw-justify-end tw-mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
