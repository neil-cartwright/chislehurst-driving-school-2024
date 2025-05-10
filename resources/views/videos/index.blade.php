@extends('layouts.app')

@section('title', 'Videos')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="is-active"><a>videos</a></li>
        </ul>
    </nav>

    <x-wrapper>

        <x-user.columns>
            <div class="columns all-the-videos">
                <div class="column is-4">
                    <div class="menu mb-4">
                        <p class="menu-label">
                            World Driving
                        </p>
                        <ul class="menu-list">
                            @foreach ($world_driving as $title => $url)
                                <li>
                                    <a href="/videos/world-driving#{{ $title }}">{{ removeHyphen($title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="menu">
                        <p class="menu-label">
                            Advance driving
                        </p>
                        <ul class="menu-list">
                            @foreach ($advance_driving as $title => $url)
                                <li>
                                    <a href="/videos/advance-driving#{{ $title }}">{{ removeHyphen($title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>




                <div class="column is-4">
                    <div class="menu mb-4">
                        <p class="menu-label">Road safety</p>
                        <ul class="menu-list">
                            @foreach ($road_safety as $title => $url)
                                <li>
                                    <a href="/videos/road-safety#{{ $title }}">{{ removeHyphen($title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="menu">
                        <p class="menu-label">Think!</p>
                        <ul class="menu-list">
                            @foreach ($think as $title => $url)
                                <li>
                                    <a href="/videos/think#{{ $title }}">{{ removeHyphen($title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="column is-4">
                    <div class="menu mb-4">
                        <p class="menu-label">Science garage</p>
                        <ul class="menu-list">
                            @foreach ($science_garage as $title => $url)
                                <li>
                                    <a href="/videos/science-garage#{{ $title }}">{{ removeHyphen($title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="menu">
                        <p class="menu-label">Learn engineering</p>
                        <ul class="menu-list">
                            @foreach ($learn_engineering as $title => $url)
                                <li>
                                    <a href="/videos/learn-engineering#{{ $title }}">{{ removeHyphen($title) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </x-user.columns>
    </x-wrapper>
@endsection
