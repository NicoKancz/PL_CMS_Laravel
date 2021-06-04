@extends('layout')

@section('content')
    @foreach($categories as $category)
    <div class="row">
        <div class="col-md-6">
            <a href="{{route('category')}}">
                {{$category->categoryName}}
            </a>
        </div>
    </div>
    @endforeach
@endsection