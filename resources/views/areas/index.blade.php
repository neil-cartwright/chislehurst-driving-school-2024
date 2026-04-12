@extends('layouts.app')

@section('title', 'Driving instructor in ' . ucwords($area))

@section('page-description',
    'Enjoyable driving lessons in ' .
    ucwords($area) .
    ' with an easy-going and experienced professional
    driving instructor.')

@section('main')

    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator mb-1" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Driving Instructor in {{ str_replace('-', ' ', $area) }}</a></li>
        </ul>
    </nav>

    <div class="hero is-light">
        <div class="hero-body">
            <p class="title">
                Driving Lessons in <span class="is-capitalized">{{ str_replace('-', ' ', $area) }}</span>
            </p>
            <p class="subtitle is-size-6"><span><i class="fa-solid fa-angle-left mr-2"></i></span><a href="/"
                    class="is-link">
                    homepage</a></p>
        </div>
    </div>

    <x-wrapper>
        <section class="section">
            <div class="notification is-light mb-8">
                <x-dynamic-component :component="'areas.' . $area"></x-dynamic-component>
            </div>
            <div class="columns is-centered">
                <div class="column is-6">
                    <x-form.contact area="{{ $area }}"></x-form.contact>
                </div>
                <div class="column is-6">
                    <div class="notification is-white">
                        <!-- Elfsight Google Reviews | Untitled Google Reviews 2 -->
                        <script src="https://elfsightcdn.com/platform.js" async></script>
                        <div class="elfsight-app-a5e57499-3ae0-456b-83f5-49f795a25570" data-elfsight-app-lazy></div>
                    </div>
                </div>
            </div>
        </section>
    </x-wrapper>
@endsection
