@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$category->categoryName}}</h1>
        </div>
        <div class="col-md-4">
            <p>{{$category->categoryDesc}}</p>
        </div>
        <div class="col-md-4">
            <a href="{{url('/categories/' . $category->categoryId . '/edit')}}">Edit</a><br>
            <form action="{{url('/categories/' . $category->categoryId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="btn btn-danger">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection