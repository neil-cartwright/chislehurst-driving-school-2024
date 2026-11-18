@extends('layouts.app')

@section('title', 'Page not found')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            </li>
        </ul>
    </nav>

    <x-wrapper>

        <section class="section has-text-centered">
            <h2 class="mb-4">This page has moved. Go to the <a href="{{ route('index') }}">Homepage</a> instead</h2>
            <img src="{{ asset('img/photos/cartoon_man_broken_down.png') }}" alt="broken down cartoon">
        </section>

    </x-wrapper>
@endsection
