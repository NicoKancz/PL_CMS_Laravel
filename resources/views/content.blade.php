@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <h1 class="tw-text-xl">{{$content->contentTitle}}</h1>
            <p>{{$content->contentDesc}}</p>
            <p>{{$content->created_at}}</p>
        </div>
        <div class="col-md-1">
            <a href="{{route('category', $content->categoryId)}}">Back</a>
        </div>
    </div>
@endsection