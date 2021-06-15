@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-font-bold">The Languages</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Name</h2>
        </div>
        <div class="col-md-5 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Year of Appearance</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
        </div>
    </div>
    <hr>
    @foreach ($languages as $language)
    <div class="row tw-shadow-sm">
        <div class="col-md-5 tw-bg-white tw-bg-opacity-50">
            <p>{{$language->languageName}}</p>
        </div>
        <div class="col-md-5 tw-bg-white tw-bg-opacity-50">
            <p>{{$language->languageAppearance}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <a class="tw-text-blue-500" href="{{url('/languages/' . $language->languageId . '/edit')}}">Edit</a>
            <form action="{{url('/languages/' . $language->languageId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="tw-text-red-500" type="submit" title="delete">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="row tw-shadow-sm">
        <div class="col-md-12">
            <a class="tw-text-2xl tw-font-bold" href="{{url('/languages/create')}}">+ Add new language</a>
        </div>
    </div>
@endsection
        