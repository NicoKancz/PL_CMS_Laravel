@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The Comments</h1>
            <a href="{{url('/comments/create')}}">Create Comment</a>
            <p></p>
        </div>
        @foreach ($comments as $comment)
        <div class="col-md-3">
            <a href="{{url('/comments/' . $comment->commentId)}}">{{$comment->commentName}}</a>
        </div>
        @endforeach
    </div>
@endsection