@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Add Language</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/languages')}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/languages')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="languageName">Language Name</label>
                    <input type="text" name="languageName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="languageAppearance">Language Year of Appearance</label>
                    <input type="number" name="languageAppearance" placeholder="2021">
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection