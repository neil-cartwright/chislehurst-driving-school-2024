@extends('layouts.app')

@section('title', 'Save a lesson')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>Save a lesson</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns :col2="6">
            <lesson-component :customers="{{ $customers }}" />
        </x-admin.columns>

    </x-wrapper>
@endsection
