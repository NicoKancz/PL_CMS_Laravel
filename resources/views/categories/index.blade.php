@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-font-bold">The Categories</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Name</h2>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Description</h2>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Language</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
        </div>
    </div>
    <hr>
    @foreach ($categories as $category)
    <div class="row tw-shadow-sm">
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <p>{{$category->categoryName}}</p>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$category->categoryDesc}}</p>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$category->language->languageName}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <a class="tw-text-blue-500" href="{{url('/categories/' . $category->categoryId . '/edit')}}">Edit</a>
            <form action="{{url('/categories/' . $category->categoryId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="tw-text-red-500" type="submit" title="delete">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="row tw-shadow-sm">
        <div class="col-md-12">
            <a class="tw-text-2xl tw-font-bold" href="{{url('/categories/create')}}">+ Add new category</a>
        </div>
    </div>
@endsection