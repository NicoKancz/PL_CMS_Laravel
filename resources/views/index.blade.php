@extends('layout')

@section('content')
    @auth
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Welcome to PL_CMS! You are logged in ')}} 
                            <span class="font-weight-bold h4"> {{Auth::user()->userName}} </span> 
                        {{ __('!') }}
                    </div>
                </div>
            </div>
        </div>
    @endauth
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-text-center tw-font-bold mt-4">Choose a programming language</h1>
        </div>
    </div>
    <div class="row tw-py-4">
        @foreach($languages as $language)
        <div class="col-md-3">
            <a href="{{route('appCategories', $language->languageId)}}">
                @if($language->languageImage == null)
                    <h2 class="tw-text-center tw-text-2xl tw-font-bold">{{__($language->languageName)}}</h2>
                @else
                    <img class="tw-bg-cover tw-mx-auto md:tw-w-76 md:tw-h-52 md:tw-my-6" 
                        src="{{asset('public/img/' . $language->languageImage)}}" alt="">
                @endif
            </a>
        </div>
        @endforeach
        <div class="col-md-3">
            <a href="{{url('/create')}}">
                @if (Auth::user()->role === 'admin')
                @auth
                    <h2 class="tw-text-center tw-mt-8 tw-text-2xl tw-font-bold">+ Add a language</h2>
                @endauth
                @endif
            </a>
        </div>
    </div>
@endsection