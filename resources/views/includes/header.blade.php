<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>PL_CMS</title>
    </head>
    <body>
        <header>
            @auth
                @include('includes.navigation') 
            @else
                @include('includes.navGuest') 
            @endauth
        </header>