@extends('layout')

@section('content')
    @foreach($contents as $content)
    <div class="row">
        <div class="col-md-11">
            <a href="{{route('content', $content->contentId)}}" 
                class="tw-text-xl">
                {{$content->contentTitle}}
            </a>
            <p>{{$content->contentDesc}}</p>
            <p>{{$content->created_at}}</p>
            <hr>
        </div>
        <div class="col-md-1">
            <a href="{{route('language', $languageId)}}">Back</a>
        </div>
    </div>
    @endforeach
@endsection