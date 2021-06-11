@extends('layout')

@section('content')
    @foreach($categories as $category)
    <div class="row">
        <div class="col-md-11">
            <a href="{{route('category', $category->categoryId)}}">
                {{$category->categoryName}}
            </a>
        </div>
        <div class="col-md-1">
            <a href="{{route('index')}}">Back</a>
        </div>
    </div>
    @endforeach
@endsection