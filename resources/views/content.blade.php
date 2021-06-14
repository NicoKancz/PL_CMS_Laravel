@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('category', $content->categoryId)}}">Back</a>
        </div>
    </div>
    <div class="row tw-py-8 tw-border">
        <div class="col-md-10">
            <h1 class="tw-text-3xl">{{$content->contentTitle}}</h1>
            <p>{{$content->contentDesc}}</p>
        </div>
        <div class="col-md-2">
            <p class="tw-text-gray-400">{{$content->created_at}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl">Comments</h1>
        </div>
        @foreach($comments as $comment)
        <div class="col-md-12">
            <p class="tw-underline">From: {{$comment->user->userName}}</p>
            <p>{{$comment->commentText}}</p>
            <p class="tw-text-gray-400">{{$comment->created_at}}</p>
            <hr>
        </div>
        @endforeach
    </div>
    @auth
    <div class="row">
        <div class="col-md-12">
            <h2 class="tw-text-2xl">Add a comment</h2>
            <form action="{{route('content', $content->contentId)}}" method="post">
                @csrf
                <textarea type="number" name="commentText"></textarea><br>
                <input class="tw-font-bold tw-bg-blue-200 tw-border-gray-700 tw-border-2 tw-rounded-lg tw-p-1" 
                    type="submit" value="Submit">
            </form>
        </div>
    </div>
    @endauth
@endsection