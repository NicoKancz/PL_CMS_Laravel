@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <h1 class="tw-text-3xl tw-font-bold">{{$content->contentTitle}}</h1>
        </div>
        <div class="col-md-1">
            <a href="{{route('contents')}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="tw-font-bold">{{$content->contentDesc}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>{{$content->created_at}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('/contents/' . $content->contentId . '/edit')}}" class="hover:tw-text-blue-800">Edit</a><br>
            <form action="{{url('/contents/' . $content->contentId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="hover:tw-text-red-500">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection