@extends('layout')

@section('content')
    <div class="row">       
        <div class="col-md-11">
            <h1 class="tw-text-2xl tw-font-bold">Update Content</h1>
        </div>
        <div class="col-md-1">
            <a href="{{url('/contents/' . $content->contentId)}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/contents/' . $content->contentId)}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="contentTitle">Content Title</label>
                    <input type="text" name="contentTitle" value="{{$content->contentTitle}}">
                </div>
                <div class="form-group">
                    <label for="contentDesc">Content Description</label>
                    <textarea type="number" name="contentDesc">{{$content->contentDesc}}</textarea>
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
                    <input type="text" name="contentImage" value="{{$content->contentImage}}">
                </div>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
    </div>
@endsection