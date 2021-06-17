@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl">Recent Comment</h1>
        </div>
    </div>
    @foreach($comments as $comment)
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('content', $comment->contentId)}}">
                <h2 class="tw-text-xl">From: {{$comment->user->userName}}</h2>
            </a>
            <p>{{$comment->commentText}}</p>
            <p>{{$comment->created_at}}</p>
            <hr>
        </div>
    </div>
    @endforeach
@endsection