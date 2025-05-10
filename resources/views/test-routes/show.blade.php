@extends('layouts.app')

@section('page-description', 'Google maps views of past ' . ucfirst($area) . ' driving test routes')

@section('title', 'Test routes | ' . ucfirst($area))

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            @auth
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @else
                <li><a href="{{ route('index') }}">Home</a></li>

            @endauth
            <li class="is-active"><a>Test routes</a></li>
            <li class="is-active"><a>{{ ucfirst($area) }}</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns">
            <div class="column is-3">
                @include('user.menu')
            </div>
            <div class="column is-9">
                <div class="hero is-light mb-6">
                    <div class="hero-body">
                        <p class="title">{{ ucfirst(str_replace('-', ' ', $area)) }} driving test centre</p>
                        <p class="subtitle">Driving test routes</p>
                    </div>
                </div>
                <!-- nested cols -->
                <div class="columns is-multiline">

                    @include('test-routes/routes/' . $area)

                </div>
            </div>
        </div>


        </div>
    </x-wrapper>
@endsection
