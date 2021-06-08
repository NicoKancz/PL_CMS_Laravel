@extends('layout')

@section('content')
    @foreach($contents as $content)
        <div class="row">
            <div class="col-md-12">
                <h1 class="tw-text-xl">{{$content->contentTitle}}</h1>
                <p>{{$content->contentDesc}}</p>
                <p>{{$content->created_at}}</p>
                <hr>
            </div>
        </div>
    @endforeach
@endsection