@extends('layout')

@section('content')
    <h1 class="tw-text-2xl tw-font-bold tw-text-center">Welcome</h1>
    <div class="row">
        <div class="col-md-12 tw-text-center">
            <a href="{{url('/feedback')}}" 
            class="tw-w-48 tw-text-center tw-rounded tw-inline-block tw-ring-2 tw-bg-gray-900 tw-text-white">Click Me</a>
        </div>
    </div>
    
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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
@endsection