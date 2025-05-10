@extends('layouts.app')

@section('title', 'Test route ' . $video)

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>

            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="is-active"><a>Test routes</a></li>
            <li><a href="{{ url('tests/routes/sidcup') }}">Sidcup</a></li>
            <li class="is-active"><a>via {{ $video }}</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-10">
            </div>

    </x-wrapper>
@endsection
