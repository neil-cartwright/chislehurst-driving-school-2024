@extends('layouts.app')

@section('title', 'Driving Lessons in ' . ucwords($area))

@section('page-description',
    'Enjoyable driving lessons in ' .
    ucwords($area) .
    ' with an easy-going and experienced professional
    driving instructor.')

@section('main')

    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator mb-0" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}" class="is-link">Home</a></li>
            <li class="is-active"><a>Driving Instructor in {{ ucfirst(str_replace('-', ' ', $area)) }}</a></li>
        </ul>
    </nav>

    <x-hero area="{{ $area }}"></x-hero>

    <x-wrapper>
        <section>
            <div class="columns">
                <div class="column is-two-thirds">
                    <article>
                        <x-dynamic-component :component="'areas.' . $area" :area="$area"></x-dynamic-component>
                    </article>
                </div>
                <div class="column is-one-third">
                    <test-pass-component></test-pass-component>
                </div>
            </div>
        </section>

    </x-wrapper>
@endsection
