@extends('languages.layout')

@section('content')
    <h1 class="">The languages</h1>
    @foreach ($languages as $language)
        <p>{{$language->languageName}}</p>
    @endforeach
    <a href="{{url('/feedback')}}" class="w-1/5 text-center rounded inline-block ring-2 bg-gray-900 text-white">Click Me</a>
@endsection
        