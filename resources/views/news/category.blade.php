@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl">Recent Categories</h1>
        </div>
    </div>
    @foreach($categories as $category)
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('category', $category->categoryId)}}">
                <h2 class="tw-text-xl">{{$category->categoryName}}</h2>
            </a>
            <p>{{$category->created_at}}</p>
            <hr>
        </div>
    </div>
    @endforeach
@endsection