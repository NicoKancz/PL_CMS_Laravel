<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>PL_CMS</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light tw-shadow-md">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}">PL_CMS</a>
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
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?=Route::currentRouteName() == 'languages' ? 'active' : '';?>" 
                                href="{{url('/languages')}}">Languages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=Route::currentRouteName() == 'categories' ? 'active' : '';?>" 
                                href="{{url('/categories')}}">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=Route::currentRouteName() == 'contents' ? 'active' : '';?>" 
                                href="{{url('/contents')}}">Contents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=Route::currentRouteName() == 'comments' ? 'active' : '';?>" 
                                href="{{url('/comments')}}">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Newsfeed</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>