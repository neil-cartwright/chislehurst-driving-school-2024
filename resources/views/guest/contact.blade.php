@extends('layouts.app')

@section('page-description', 'Contact page for chislehurst driving school')

@section('title', 'Contact')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Contact</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6 mb-6">
                <x-form.contact></x-form.contact>
            </div>
        </div>
    </x-wrapper>
@endsection
