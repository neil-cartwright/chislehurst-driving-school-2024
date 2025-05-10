@extends('layouts.app')

@section('title', 'Edit a lesson')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li class="is-active">
                <a>Edit a lesson</a>
            </li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns :col2="6">

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <lesson-component :customers="{{ $customers }}" :lesson="{{ $lesson }}" :update="true" />

        </x-admin.columns>
    </x-wrapper>
@endsection
