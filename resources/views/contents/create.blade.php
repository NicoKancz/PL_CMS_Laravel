@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Add Content</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/contents')}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/contents')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="contentTitle">Content Name</label>
                    <input type="text" name="contentTitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="contentDesc">Content Description</label>
                    <textarea type="number" name="contentDesc">Description of the Content</textarea>
                </div>
                <div class="form-group">
                    <label for="contentStatus">Content Status</label>
                    <select name="contentStatus">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contentImage">Content Image</label>
                    <input type="text" name="contentImage" placeholder="Image">
                </div>
                <div class="form-group">
                    <label for="categoryName">Category</label><br>
                    <select name="categoryName">
                        @foreach($categories as $category)
                        <option value="{{$category->categoryName}}">{{$category->categoryName}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection