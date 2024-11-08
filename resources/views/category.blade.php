@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-text-center tw-font-bold">The contents of {{$category->categoryName}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <a href="{{route('appCategories', $languageId)}}">Back</a>
        </div>
        @auth
        <div class="col-md-2">
            <a class="tw-text-2xl hover:tw-text-green-500 tw-font-bold" href="{{url('/appContents/' . $category->categoryId . '/create')}}">
                + Add new content
            </a>
        </div>
        @endauth
    </div>
    @foreach($contents as $content)
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('content', $content->contentId)}}" 
                class="tw-text-xl">
                {{$content->contentTitle}}
            </a>
            <p>{{$content->contentDesc}}</p>
            <p>{{$content->created_at}}</p>
            <hr>
        </div>
    </div>
    @endforeach
@endsection