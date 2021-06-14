@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-text-center tw-font-bold">The categories of {{$language->languageName}}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index')}}">Back</a>
        </div>
        <hr>
    </div>

    <div class="row">
    @foreach($categories as $category)
        <div class="col-md-3">
            <section class="tw-text-base tw-mx-auto tw-w-full tw-h-24 tw-my-4 tw-pt-1 tw-pl-1 tw-rounded-lg tw-bg-blue-500 tw-bg-opacity-50">
                <a  class="tw-font-bold tw-text-xl"
                    href="{{route('category', $category->categoryId)}}">
                    {{$category->categoryName}}
                </a>
                <p>Total of content: {{$category->contents->count()}}</p>
            </section>
        </div>
    @endforeach
    </div>
@endsection