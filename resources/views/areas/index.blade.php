@extends('layouts.app')

@section('title', 'Driving Instructor in ' . ucwords(str_replace('-', ' ', $area)))

@section('page-description', $area_description)

@section('main')

    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator mb-0" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}" class="is-link">Home</a></li>
            <li class="is-active"><a>Driving Instructor in {{ ucwords(str_replace('-', ' ', $area)) }}</a></li>
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
                    <test-pass-component class="mb-2"></test-pass-component>
                    <recommendations-component></recommendations-component>
                    <area-signs-component area="{{ $area }}"></area-signs-component>
                </div>
            </div>
        </section>

    </x-wrapper>
@endsection
