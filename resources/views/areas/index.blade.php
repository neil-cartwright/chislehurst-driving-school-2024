@extends('layouts.app')

@section('title', 'Driving instructor in ' . ucwords($placename))

@section('page-description',
    'Enjoyable driving lessons in ' .
    ucwords($placename) .
    ' with an easy-going and experienced professional
    driving instructor.')

@section('main')

    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator mb-1" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Driving Lessons in {{ ucwords($placename) }}, {{ strtoupper($postcode) }}</a></li>
        </ul>
    </nav>

    <div class="hero is-light">
        <div class="hero-body">
            <p class="title is-capitalized">
                {{ $placename }}
            </p>
            <p class="subtitle">
                Driving Lessons in <span class="is-uppercase">{{ $postcode }}</span>
            </p>
        </div>
    </div>

    <x-wrapper>
        <section class="section">
            <div class="columns areas">
                <div class="column is-7">
                    <x-dynamic-component :component="'areas.' . str_replace(' ', '-', $placename)" title="{{ $title }}"></x-dynamic-component>
                </div>
                <div class="column is-5">
                    <x-form.contact></x-form.contact>
                </div>
            </div>
        </section>
    </x-wrapper>


@endsection
