@extends('layouts.app')

@section('title', 'Driver Active')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="is-active"><a>Driver active</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-user.columns>
            <div class="hero is-light mb-4">
                <div class="hero-body">
                    <h1 class="title">
                        Driver Active
                    </h1>
                    <p>A great online resource helping you pass first time</p>
                </div>
            </div>
            <hr>
            <div class="columns">
                <div class="column is-4">
                    <div class="menu mb-4">
                        <p class="menu-label">Basic Skills</p>
                        <ul class="menu-list">

                            @foreach ($basic_skills as $title => $url)
                                <li><a target="_blank"
                                        href="https://www.driveractive.com/Learners_Online/{{ $url }}.html">{{ $title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="menu mb-4">
                        <p class="menu-label">Road Skills</p>
                        <ul class="menu-list">

                            @foreach ($road_skills as $title => $url)
                                <li><a target="_blank"
                                        href="https://www.driveractive.com/Learners_Online/{{ $url }}.html">{{ $title }}</a>
                                </li>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="menu mb-4">
                        <p class="menu-label">Using your skills</p>
                        <ul class="menu-list">

                            @foreach ($using_your_skills as $title => $url)
                                <li><a target="_blank"
                                        href="https://www.driveractive.com/Learners_Online/{{ $url }}.html">{{ $title }}</a>
                                </li>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </x-user.columns>
    </x-wrapper>
@endsection
