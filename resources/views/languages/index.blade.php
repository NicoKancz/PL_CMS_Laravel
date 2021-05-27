@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The languages</h1>
        </div>
        @foreach ($languages as $language)
        <div class="col-md-3">
            <p>{{$language->languageName}}</p>
        </div>
        @endforeach
        <div class="col-md-3">
            <a href="{{url('/feedback')}}" 
            class="tw-w-48 tw-text-center tw-rounded tw-inline-block tw-ring-2 tw-bg-gray-900 tw-text-white">Click Me</a>
        </div>
    </div>
@endsection
        