<!DOCTYPE html>
<html class="tw-h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('public/img/pl_cmsLogo.png') }}" type="image/x-icon"/>
        <title>PL_CMS</title>
    </head>
    <body class="tw-bg-fixed tw-overflow-x-hidden tw-bg-gradient-to-t tw-from-blue-600 tw-via-red-100 tw-to-white tw-bg-no-repeat">
        <header class="tw-w-screen">
            <nav class="navbar navbar-expand-lg navbar-light tw-shadow-md">
                <div class="container-fluid">
                    <a class="navbar-brand tw-font-monument tw-font-bold tw-text-3xl tw-border-r-2 tw-pr-2 tw-m-0"
                        href="{{route('appLanguages')}}">PL CMS</a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                        <i class="fas fa-bars"></i>
                    </button>
                    @auth
                        @include('includes.navigation') 
                    @else
                        @include('includes.navGuest') 
                    @endauth
                </div>
            </nav>
        </header>