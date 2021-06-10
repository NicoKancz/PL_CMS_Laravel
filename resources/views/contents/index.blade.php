@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The Contents</h1>
            <a href="{{url('/contents/create')}}">Create Content</a>
            <p></p>
        </div>
        @foreach ($contents as $content)
        <div class="col-md-3">
            <a href="{{url('/contents/' . $content->contentId)}}">{{$content->contentTitle}}</a>
        </div>
        @endforeach
    </div>
@endsection