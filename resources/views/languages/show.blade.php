@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{$language->languageName}}</h1>
        </div>
        <div class="col-md-4">
            <p>{{$language->languageAppearance}}</p>
        </div>
        <div class="col-md-4">
            <a href="{{url('/languages/' . $language->languageId . '/edit')}}">Edit</a><br>
            <form action="{{url('/languages/' . $language->languageId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" class="btn btn-danger">
                    Delete
                </button> 
            </form>
        </div>
    </div>
@endsection