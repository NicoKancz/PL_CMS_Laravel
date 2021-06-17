@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-font-bold">The Contents</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Title</h2>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Description</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Category</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">User</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
        </div>
    </div>
    <hr>
    @foreach ($contents as $content)
    <div class="row tw-shadow-sm">
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <a href="{{url('/contents/' . $content->contentId)}}">
                <p>{{$content->contentTitle}}</p>
            </a>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$content->contentDesc}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <p>{{$content->category->categoryName}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <p>{{$content->user->userName}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <a class="tw-text-blue-500" href="{{url('/contents/' . $content->contentId . '/edit')}}">Edit</a>
            <form action="{{url('/contents/' . $content->contentId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="hover:tw-text-red-500" type="submit" title="delete">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="row tw-shadow-sm">
        <div class="col-md-12">
            <a class="tw-text-2xl tw-font-bold" href="{{url('/contents/create')}}">+ Add new content</a>
        </div>
    </div>
@endsection