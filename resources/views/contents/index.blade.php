@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="tw-text-3xl tw-font-bold">The Contents</h1>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Title</h2>
                </th>
                <th class="col-md-4 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Description</h2>
                </th>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Category</h2>
                </th>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">User</h2>
                </th>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contents as $content)
            <tr>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <a href="{{url('/contents/' . $content->contentId)}}">
                        {{$content->contentTitle}}
                    </a>
                </td>
                <td class="col-md-4 tw-bg-white tw-bg-opacity-50">
                    {{$content->contentDesc}}
                </td>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    {{$content->category->categoryName}}
                </td>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    {{$content->user->userName}}
                </td>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <a class="tw-text-blue-500" href="{{url('/contents/' . $content->contentId . '/edit')}}">Edit</a>
                    <form action="{{url('/contents/' . $content->contentId)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="hover:tw-text-red-500" type="submit" title="delete">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="row tw-shadow-sm">
    <div class="col-md-12">
        <a class="tw-text-2xl hover:tw-text-green-500 tw-font-bold" href="{{url('/contents/create')}}">+ Add new
            content</a>
    </div>
</div>
@endsection
