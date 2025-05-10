@extends('layouts.app')

@section('page-description',
    'A free interactive ' .
    str_replace('-', ' ', $quiz_name) .
    ' quiz for learner
    drivers')


@section('title', 'Quiz | ' . ucfirst(str_replace('-', ' ', $quiz_name)))

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
            <li><a href="/quiz">Quiz</a></li>
            <li><a class="is-active">{{ ucfirst(str_replace('-', ' ', $quiz_name)) }}</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <div class="columns">
            <div class="column is-3">
                @include('quiz.menu')
            </div>
            <div class="column is-9-tablet is-6-desktop">
                <div id="quizComponent">
                    <quiz-component />
                </div>
            </div>
        </div>
    </x-wrapper>
@endsection

<!-- reference the quiz file -->
@push('scripts-before')
    <script src="{{ asset('js/quizzes/' . $quiz_name . '-quiz.js') }}"></script>
@endpush
