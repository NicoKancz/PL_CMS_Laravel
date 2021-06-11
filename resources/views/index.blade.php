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

                        {{ __('You are logged in ' . Auth::user()->userName . '!') }}
                    </div>
                </div>
            </div>
        </div>
    @endauth
    <div class="row tw-py-4">
        @foreach($languages as $language)
        <div class="col-md-3">
            <a href="{{route('language', $language->languageId)}}">
                <img class="tw-bg-cover tw-mx-auto tw-w-76 tw-h-52" src="{{asset('public/img/' . $language->languageImage)}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
@endsection