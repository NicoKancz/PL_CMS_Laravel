@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The comments</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <h2>Creator</h2>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2>Text</h2>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2>Content</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
        </div>
    </div>
    <hr>
    @foreach ($comments as $comment)
    <div class="row tw-shadow-sm">
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <p>{{$comment->user->userName}}</p>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$comment->commentText}}</p>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$comment->content->contentTitle}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <a class="tw-text-blue-500" href="{{url('/comments/' . $comment->commentId . '/edit')}}">Edit</a>
            <form action="{{url('/comments/' . $comment->commentId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="tw-text-red-500" type="submit" title="delete">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
    
@endsection