@extends('layouts.app')

@section('title', 'Driving Lessons')

@section('main')
    <div class="hero is-info">
        <div class="hero-body">
            <p class="title">Driving Lessons</p>
            <p class="subtitle">SE London and Kent</p>
        </div>
    </div>
    <x-wrapper>
        <div class="columns is-centered mb-4">
            <div class="column is-6">
                <hr>
                <p>
                    I work in the following areas. If you live in an area not covered here, please do give me a call, and
                    depending on timings I may be able to help.
                </p>
                <hr>
                <a class="button is-text" href="/driving-lessons/chislehurst">Chislehurst, BR7</a>
                <a class="button is-text" href="/driving-lessons/petts-wood">Petts Wood, BR5</a>
                <a class="button is-text" href="/driving-lessons/eltham">Eltham, SE9</a>
                <a class="button is-text" href="/driving-lessons/new-eltham">New Eltham, SE9</a>
                <a class="button is-text" href="/driving-lessons/mottingham">Mottingham,SE9</a>
                <a class="button is-text" href="/driving-lessons/grove-park">Grove Park, SE12</a>
                <a class="button is-text" href="/driving-lessons/bromley">Bromley, BR1</a>
                <a class="button is-text" href="/driving-lessons/bickley">Bickley, BR1</a>
                <a class="button is-text" href="/driving-lessons/sidcup">Sidcup, DA15</a>
                <a class="button is-text" href="/driving-lessons/kidbrooke">Kidbrooke and Blackheath, SE3</a>
                <a class="button is-text" href="/driving-lessons/lee">Lee, SE12</a>
            </div>
        </div>
    </x-wrapper>
@endsection
