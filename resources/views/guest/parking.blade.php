@extends('layouts.app')

@section('page-description', 'How to parallel park')

@section('title', 'Parallel parking')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Parking</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-4">
                <parking-component></parking-component>

            </div>
        </div>
    </x-wrapper>
@endsection
