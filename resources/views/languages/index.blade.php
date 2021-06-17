@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="tw-text-3xl tw-font-bold">The Languages</h1>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th class="col-md-5 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Name</h2>
                </th>
                <th class="col-md-5 tw-bg-white tw-bg-opacity-50">
                    <h2 class="tw-font-bold tw-text-lg">Year of Appearance</h2>
                </th>
                <th class="col-md-2 tw-bg-white tw-bg-opacity-50">
                </th>
            <tr>
        </thead>
        <tbody>
            @foreach ($languages as $language)
            <tr>
                <td class="col-md-5 tw-bg-white tw-bg-opacity-50">
                    <a href="{{url('/languages/' . $language->languageId)}}">
                        {{$language->languageName}}
                    </a>
                </td>
                <td class="col-md-5 tw-bg-white tw-bg-opacity-50">
                    {{$language->languageAppearance}}
                </td>
                <td class="col-md-2 tw-bg-white tw-bg-opacity-50">
                    <a class="tw-text-blue-500" href="{{url('/languages/' . $language->languageId . '/edit')}}">Edit</a>
                    <form action="{{url('/languages/' . $language->languageId)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="tw-text-red-500" type="submit" title="delete">
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
        <a class="tw-text-2xl hover:tw-text-green-500 tw-font-bold" href="{{url('/languages/create')}}">+ Add new language</a>
    </div>
</div>
@endsection
