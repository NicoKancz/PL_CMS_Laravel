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
            <form action="{{url('/contents')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="contentTitle">Content Name</label>
                    <input type="text" class="form-control @error('contentTitle') is-invalid @enderror" name="contentTitle" placeholder="Title">
                    @error('contentTitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="contentDesc">Content Description</label>
                    <textarea type="number" class="form-control @error('contentDesc') is-invalid @enderror" name="contentDesc" placeholder="Description of the Content"></textarea>
                    @error('contentDesc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="contentStatus">Content Status (Not implemented yet)</label>
                    <select class="form-control @error('contentStatus') is-invalid @enderror" name="contentStatus">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                    </select>
                    @error('contentStatus')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="contentImage">Content Image (Not implemented yet)</label>
                    <input type="file" class="form-control @error('contentImage') is-invalid @enderror" name="contentImage" accept="image/*">
                    @error('contentImage')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <!-- <label for="languageName">Language</label>
                    <select class="form-control @error('languageName') is-invalid @enderror"
                            name="languageName">
                    </select>
                    @error('languageName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror -->
                    <label for="categoryName">Category</label>
                    <select class="form-control @error('categoryName') is-invalid @enderror"
                            name="categoryName">
                        @foreach($categories as $category)
                        <option value="{{$category->categoryName}}">{{$category->categoryName}}</option>
                        @endforeach
                    </select>
                    @error('categoryName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input class="tw-px-4 tw-py-2 tw-bg-gray-800 tw-rounded-md tw-font-semibold tw-text-xs tw-text-white tw-uppercase 
                            hover:tw-bg-gray-700 active:tw-bg-gray-900 tw-transition tw-ease-in-out tw-duration-150" 
                        type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection