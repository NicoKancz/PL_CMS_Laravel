@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="tw-text-3xl tw-font-bold">The comments</h1>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">User</h2>
                </th>
                <th class="col-md-4 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Comment Text</h2>
                </th>
                <th class="col-md-4 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Content</h2>
                </th>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                </th>
            </tr>
        </thead>
        <tbody>
            @if (! Auth::user()->comments->isEmpty())
            @foreach (Auth::user()->comments as $comment)
            <tr>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    {{$comment->user->userName}}
                </td>
                <td class="col-md-4 tw-bg-white tw-bg-opacity-50">
                    {{$comment->commentText}}
                </td>
                <td class="col-md-4 tw-bg-white tw-bg-opacity-50">
                    {{$comment->content->contentTitle}}
                </td>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <a class="tw-text-blue-500" href="{{url('/comments/' . $comment->commentId . '/edit')}}">Edit</a>
                    <form action="{{url('/comments/' . $comment->commentId)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="tw-text-red-500" type="submit" title="delete">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
