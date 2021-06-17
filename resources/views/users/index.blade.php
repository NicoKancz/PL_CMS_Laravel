@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="tw-text-3xl tw-font-bold">The Users</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Username</h2>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">User Email</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-text-center tw-bg-opacity-50">
            <h2 class="tw-font-bold tw-text-lg">Total of comments</h2>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
        </div>
    </div>
    <hr>
    @foreach ($users as $user)
    <div class="row tw-shadow-sm">
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$user->userName}}</p>
        </div>
        <div class="col-md-4 tw-bg-white tw-bg-opacity-50">
            <p>{{$user->userEmail}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-text-center tw-bg-opacity-50">
            <p>{{$user->comments->count()}}</p>
        </div>
        <div class="col-md-2 tw-bg-white tw-bg-opacity-50">
            <form action="{{url('/users/' . $user->userId)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="hover:tw-text-red-500" type="submit" title="delete">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
@endsection
        