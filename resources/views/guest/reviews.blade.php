@extends('layouts.app')

@section('page-description', 'customer reviews for chislehurst driving school')

@section('title', 'Reviews')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Reviews</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6">
                <x-card class="mb-4">
                    <x-slot:title>Customer reviews</x-slot:title>
                    <x-slot:content>
                        <img src="/img/photos/licence[2].jpg" alt="driving test pass">
                        <recommendations-component class="mb-3"></recommendations-component>
                    </x-slot:content>
                </x-card>
            </div>
        </div>

    </x-wrapper>
@endsection
