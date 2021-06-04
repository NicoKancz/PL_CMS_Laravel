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
                    <input type="text" name="categoryName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="categoryDesc">Category Description</label><br>
                    <textarea name="categoryDesc">Description of the category</textarea>
                </div>
                <div class="form-group">
                    <label for="languageName">Language</label><br>
                    <select name="languageName">
                        @foreach($languages as $language)
                        <option value="{{$language->languageName}}">{{$language->languageName}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection