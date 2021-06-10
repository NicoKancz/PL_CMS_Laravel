@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Update Category</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/categories/' . $category->categoryId)}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/categories/' . $category->categoryId)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="categoryName">Category Name</label>
                    <input type="text" name="categoryName" value="{{$category->categoryName}}">
                </div>
                <div class="form-group">
                    <label for="categoryDesc">Category Description</label>
                    <textarea type="number" name="categoryDesc">{{$category->categoryDesc}}</textarea>
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection