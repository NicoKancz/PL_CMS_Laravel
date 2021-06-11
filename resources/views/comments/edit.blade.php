@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Update Comment</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/comments/' . $comment->commentId)}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/comments/' . $comment->commentId)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="commentText">Comment Text</label>
                    <textarea type="number" name="commentText">{{$comment->commentText}}</textarea>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection