@extends('layouts.app')

@section('title', 'Send homework')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="is-active"><a href="">Create homework</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns">
            <div class="column is-3">
                @include('admin.menu')
            </div>
            <div class="column is-9">
                <homework-form :customer="{{ json_encode($customer) }}" :handouts="{{ json_encode($handouts) }}"
                    :essential-skills="{{ json_encode($essential_skills) }}"
                    :roadcraft="{{ json_encode($roadcraft_chapters) }}" :highway-code="{{ json_encode($highway_code) }}"
                    :emergency-vehicles="{{ json_encode($emergency_vehicles) }}"
                    :know-your-road-signs="{{ json_encode($know_your_road_signs) }}"
                    :how-cars-work="{{ json_encode($how_cars_work_chapters) }}"
                    :world-driving-videos="{{ json_encode($world_driving_videos) }}"
                    :learn-engineering-videos="{{ json_encode($learn_engineering_videos) }}"
                    :science-garage-videos="{{ json_encode($science_garage_videos) }}"
                    :road-safety-videos="{{ json_encode($road_safety_videos) }}"
                    :think-videos="{{ json_encode($think_videos) }}"
                    :advance-driving-videos="{{ json_encode($advance_driving_videos) }}"
                    :driver-active="{{ json_encode($driver_active) }}">
                </homework-form>
            </div>
        </div>
    </x-wrapper>
@endsection
