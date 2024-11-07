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
    <div class="row mt-4">
        <div class="col-md-12">
            <form action="{{url('/languages')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="languageName">Language Name</label>
                    <input type="text" class="form-control @error('languageName') is-invalid @enderror" name="languageName" placeholder="Name">
                    @error('languageName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               
                <div class="form-group">
                    <label for="languageAppearance">Language Year of Appearance</label>
                    <input type="number" class="form-control @error('languageAppearance') is-invalid @enderror" name="languageAppearance" placeholder="2021">
                    @error('languageAppearance')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="languageImage">Language Image</label>
                    <input type="file" class="form-control @error('languageImage') is-invalid @enderror" name="languageImage" accept="image/*">
                    @error('languageImage')
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