@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Add Comment</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/comments')}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/comments')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="CommentText">Comment Text</label>
                    <textarea type="number" name="CommentText">Text of the Comment</textarea>
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection