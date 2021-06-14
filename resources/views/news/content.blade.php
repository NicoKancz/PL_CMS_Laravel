@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl">Recent Content</h1>
        </div>
    </div>
    @foreach($contents as $content)
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('content', $content->contentId)}}">
                <h2 class="tw-text-xl">{{$content->contentTitle}}</h1>
            </a>
            <p>{{$content->contentDesc}}</p>
            <p>{{$content->created_at}}</p>
            <p>Content Creator: {{$content->user->userName}}</p>
            <hr>
        </div>
    </div>
    @endforeach
@endsection