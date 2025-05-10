@extends('layouts.app')

@section('title', 'Videos | ' . ucwords(str_replace('_', ' ', $author)))

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="/videos">Videos</a></>
            <li class="is-active"><a>{{ ucwords(str_replace('_', ' ', $author)) }}</a></li>
        </ul>
    </nav>
    <x-wrapper>

        <video-component :videos="{{ json_encode($videos[$author]) }}" author="{{ $author }}" />
    </x-wrapper>
@endsection
