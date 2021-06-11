@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('index')}}">Back</a>
        </div>
    </div>
    @foreach($categories as $category)
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('category', $category->categoryId)}}">
                {{$category->categoryName}}
            </a>
        </div>
    </div>
    @endforeach
@endsection