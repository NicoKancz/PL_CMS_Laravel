@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The comments</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($comments as $comment)
        <div class="col-md-12">
            <p>From: {{$comment->user->userName}}</p>
            <p>{{$comment->commentText}}</p>
            <hr>
        </div>
        @endforeach
    </div>
@endsection