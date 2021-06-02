@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$content->contentName}}</h1>
        </div>
        <div class="col-md-4">
            <p>{{$content->contentAppearance}}</p>
        </div>
        <div class="col-md-4">
            <a href="{{url('/contents/' . $content->contentId . '/edit')}}">Edit</a><br>
            <form action="{{url('/contents/' . $content->contentId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="btn btn-danger">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection