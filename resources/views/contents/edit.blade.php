@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Update Content</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/contents/' . $Content->ContentId)}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/contents/' . $Content->ContentId)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="ContentName">Content Name</label>
                    <input type="text" name="ContentName" value="{{$Content->ContentName}}">
                </div>
                <div class="form-group">
                    <label for="ContentDesc">Content Description</label>
                    <textarea type="number" name="ContentDesc">
                        {{$Content->ContentAppearance}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="ContentType">Content Type</label>
                    <input type="text" name="ContentType" value="{{$Content->ContentType}}">
                </div>
                <div class="form-group">
                    <label for="ContentImage">Content Image</label>
                    <input type="text" name="ContentImg" value="{{$Content->ContentImage}}">
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection