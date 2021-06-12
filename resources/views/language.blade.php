@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-text-center tw-font-bold">The categories of {{$language->languageName}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index')}}">Back</a>
        </div>
    </div>
    @foreach($categories as $category)
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('category', $category->categoryId)}}">
                {{$category->categoryName}}
            </a>
        </div>
    </div>
    @endforeach
@endsection