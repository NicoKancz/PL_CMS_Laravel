@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Add Category</h1>
        </div>
        <div class="col-md-1">
            <a href="{{route('categories')}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('categories')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="categoryName">Category Name</label><br>
                    <input type="text" class="form-control @error('categoryName') is-invalid @enderror" name="categoryName" placeholder="Name">
                    @error('categoryName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="categoryDesc">Category Description</label><br>
                    <textarea class="form-control @error('categoryDesc') is-invalid @enderror" name="categoryDesc" placeholder="Description of the category"></textarea>
                    @error('categoryDesc')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="languageName">Language</label><br>
                    <select class="form-control @error('languageName') is-invalid @enderror" name="languageName">
                        @foreach($languages as $language)
                        <option value="{{$language->languageName}}">{{$language->languageName}}</option>
                        @endforeach
                    </select>
                    @error('languageName')
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