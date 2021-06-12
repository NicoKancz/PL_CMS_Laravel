@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The comments</h1>
        </div>
    </div>
    
    @foreach ($comments as $comment)
    <div class="row tw-shadow-sm">
        <div class="col-md-10">
            <p>From: {{$comment->user->userName}}</p>
            <p>{{$comment->commentText}}</p>
        </div>
        <div class="col-md-2">
            <a class="tw-text-blue-500" href="{{url('/comments/' . $comment->commentId . '/edit')}}">Edit</a><br>
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