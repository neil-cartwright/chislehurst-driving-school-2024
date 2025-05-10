@extends('layouts.app')

@section('page-description', 'Interactive quiz section for learner drivers based on practical subjects')

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
        </div>
    </x-wrapper>
@endsection
