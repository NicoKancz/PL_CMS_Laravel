@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1 class="tw-font-bold tw-text-3xl">{{$language->languageName}}</h1>
        </div>
        <div class="col-md-2">
            <img class="tw-object-contain tw-w-32 tw-h-16" 
                src="{{asset('public/img/' . $language->languageImage)}}" 
                alt="{{$language->languageImage}}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p class="tw-font-bold">Appearance: {{$language->languageAppearance}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('/languages/' . $language->languageId . '/edit')}}" 
                class="hover:tw-text-blue-400 tw-transition tw-ease-in-out tw-duration-150">
                Edit
            </a>
            <form action="{{url('/languages/' . $language->languageId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" 
                        class="hover:tw-text-red-500 tw-transition tw-ease-in-out tw-duration-150">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection