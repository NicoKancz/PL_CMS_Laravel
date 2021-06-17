@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1 class="tw-text-3xl tw-font-bold">{{$category->categoryName}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>{{$category->categoryDesc}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('/categories/' . $category->categoryId . '/edit')}}" class="hover:tw-text-blue-800">Edit</a><br>
            <form action="{{url('/categories/' . $category->categoryId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="hover:tw-text-red-500">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection