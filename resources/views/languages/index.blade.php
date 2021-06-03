@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">@lang('message.languages')</h1>
            <a href="{{url('/languages/create')}}">@lang('message.createLanguage')</a>
            <p></p>
        </div>
        @foreach ($languages as $language)
        <div class="col-md-3">
            <a href="{{url('/languages/' . $language->languageId)}}">{{$language->languageName}}</a>
        </div>
        @endforeach
    </div>
@endsection
        