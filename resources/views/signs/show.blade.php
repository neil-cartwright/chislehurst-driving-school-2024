@extends('layouts.app')

@section('page-description',
    'Interactive web page showing ' .
    ucwords(str_replace('-', ' ', $type)) .
    ' to help learner
    drivers become familiar with different different road signs')

    @php
        $unwanted = ['.', '..', 'Thumbs.db', '.DS_Store'];
    @endphp

@section('title', 'Signs | ' . ucwords(str_replace('-', ' ', $type)))

@section('main')

    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            @auth
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @endauth
            @guest
                <li><a href="{{ route('index') }}">Home</a></li>
            @endguest
            <li class="is-active"><a>Signs</a></li>
            <li class="is-active"><a>{{ ucwords(str_replace('-', ' ', $type)) }}</a>
        </ul>
    </nav>

    <x-wrapper>
        <div class="columns">
            <div class="column is-4">
                <div class="menu">
                    <p class="menu-label">
                        Signs &copy; crown copyright
                    </p>
                    <ul class="menu-list">
                        @foreach ($directory_urls as $directory_url)
                            @unless (in_array($directory_url, $unwanted))
                                <li>
                                    <a href="{{ asset('signs/' . $directory_url) }}"
                                        class="{{ $directory_url == $type ? 'is-active' : '' }}">
                                        {{ ucwords(str_replace('-', ' ', $directory_url)) }}</a>
                                </li>
                            @endunless
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- col -->
            <div class="column is-8">
                <div class="signs-grid">
                    @foreach ($img_urls as $img_url)
                        @unless (in_array($img_url, $unwanted))
                            <x-road-sign img_url="{{ $img_url }}" type="{{ $type }}"></x-road-sign>
                        @endunless
                    @endforeach
                </div>

                <hr>
                <div class="level is-hidden-tablet backToTop">
                    <div class="level-item">
                        <a class="button" href="#top">Back to top</a>
                    </div>
                </div>
            </div>
            <!-- col -->
        </div>
    </x-wrapper>
@endsection
