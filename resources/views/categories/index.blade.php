@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-2xl tw-font-bold">The categories</h1>
            <a href="{{url('/categories/create')}}">Create category</a>
            <p></p>
        </div>
        @foreach ($categories as $category)
        <div class="col-md-3">
            <a href="{{url('/categories/' . $category->categoryId)}}">{{$category->categoryName}}</a>
        </div>
        @endforeach
    </div>
@endsection