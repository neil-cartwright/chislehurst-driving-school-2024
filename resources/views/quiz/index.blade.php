@extends('layouts.app')

@section('title', 'Quiz')

@section('page-description', 'A quick interactive quiz for learner drivers based on practical driving lessons.')

@php
    $images = [
        'dual-carriageways' => '/img/road-signs/motorways/dual-carriageway-ahead.png',
        'emergency-stops' => '/img/graphics/abs.png',
        'incidents-and-breakdowns' => '/img/graphics/hazard-warning-symbol.png',
        'junctions' => '/img/driving-images/warning-signs/give-way.jpg',
        'motorways' => '/img/driving-images/speed-limit-signs/national-speed-limit.jpg',
        'one-way-systems' => '/img/driving-images/regulatory-signs/one-way.png',
        'parking-and-stopping' => '/img/driving-images/on-street-parking/no-stopping[2].jpg',
        'pedestrian-crossings' => '/img/road-signs/traffic-lights/toucan.png',
        'reversing' => '/img/driving-images/information-signs/passing-place.jpg',
        'road-markings' => '/img/graphics/box-junction.jpg',
        'roundabouts' => '/img/driving-images/roundabouts/warning-roundabout.png',
        'signs' => '/img/road-signs/bus-lanes/bus-lane-with-times.png',
        'vehicle-lighting' => '/img/graphics/dipped-headlights.png',
        'driving-test-uncommon-fails' => '/img/photos/cartoon_man_broken_down.png',
    ];
@endphp

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            @auth
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @endauth
            @guest
                <li><a href="{{ route('index') }}">Home</a></li>
            @endguest
            <li class="is-active"><a>Quiz</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns">
            <div class="column is-3">
                @include('quiz.menu')
            </div>
            <div class="column is-8">
                <div class="content">
                    <h1 class="title is-size-5">Interactive Driving Quiz</h1>
                    <p>Click on a section to begin a short interactive quiz. </p>
                    <div class="columns is-multiline">
                        @foreach ($quiz_names as $quiz_name)
                            <a href="/quiz/{{ $quiz_name }}" class="column is-one-third is-flex grow-on-hover">
                                <div class="card mb-2" style="width:100%; height:100%;">
                                    <div class="card-header">
                                        <div class="card-header-title">
                                            <div class=" m-2">{{ ucwords(str_replace('-', ' ', $quiz_name)) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content has-text-centered"> <img src="{{ asset($images[$quiz_name]) }}"
                                            alt="{{ $quiz_name }}" style="max-height:100px;">
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </x-wrapper>
@endsection
