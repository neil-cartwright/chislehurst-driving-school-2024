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
            <div class="column is-7">
                <x-card class="mb-4">
                    <x-slot:title>Customer reviews</x-slot:title>
                    <x-slot:content>
                        <img src="/img/photos/licence[2].jpg" alt="driving test pass">
                        <recommendations-component class="mb-3"></recommendations-component>


                    </x-slot:content>
                </x-card>
            </div>
            <div class="column is-5">
                <!-- Elfsight Google Reviews | Untitled Google Reviews 2 -->
                <script src="https://elfsightcdn.com/platform.js" async></script>
                <div class="elfsight-app-a5e57499-3ae0-456b-83f5-49f795a25570" data-elfsight-app-lazy></div>
            </div>
        </div>

    </x-wrapper>
@endsection
