@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$comment->commentName}}</h1>
        </div>
        <div class="col-md-4">
            <p>{{$comment->commentAppearance}}</p>
        </div>
        <div class="col-md-4">
            <a href="{{url('/comments/' . $comment->commentId . '/edit')}}">Edit</a><br>
            <form action="{{url('/comments/' . $comment->commentId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="btn btn-danger">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection