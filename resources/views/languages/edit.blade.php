@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Update Language</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/languages/' . $language->languageId)}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/languages/' . $language->languageId)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="languageName">Language Name</label>
                    <input type="text" name="languageName" value="{{$language->languageName}}">
                </div>
                <div class="form-group">
                    <label for="languageAppearance">Language Year of Appearance</label>
                    <input type="number" name="languageAppearance" value="{{$language->languageAppearance}}">
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection