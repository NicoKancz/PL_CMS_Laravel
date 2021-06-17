@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="tw-text-3xl tw-font-bold">The Users</h1>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Username</h2>
                </th>
                <th class="tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">User Email</h2>
                </th>
                <th class="tw-bg-white tw-text-center tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Total of comments</h2>
                </th>
                <th class="tw-bg-white tw-bg-opacity-50">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)

            <tr>
                <td class="tw-bg-white tw-bg-opacity-50">
                    {{$user->userName}}
                </td>
                <td class="tw-bg-white tw-bg-opacity-50">
                    {{$user->userEmail}}
                </td>
                <td class="tw-bg-white tw-text-center tw-bg-opacity-50">
                    {{$user->comments->count()}}
                </td>
                <td class="tw-bg-white tw-bg-opacity-50">
                    <form action="{{url('/users/' . $user->userId)}}" method="POST">
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
@endsection
