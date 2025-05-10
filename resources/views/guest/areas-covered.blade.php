@extends('layouts.app')

@section('title', 'Areas covered')

@section('main')
    <div class="hero is-light">
        <div class="hero-body">
            <p class="title">Areas covered</p>
            <p class="subtitle">Driving lessons in SE London</p>
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
                <a class="button is-text" href="/driving-lessons-in-chislehurst-br7">Chislehurst, BR7</a>
                <a class="button is-text" href="/driving-lessons-in-petts-wood-br5">Petts Wood, BR5</a>
                <a class="button is-text" href="/driving-lessons-in-eltham-se9">Eltham, SE9</a>
                <a class="button is-text" href="/driving-lessons-in-new-eltham-se9">New Eltham, SE9</a>
                <a class="button is-text" href="/driving-lessons-in-mottingham-se9">Mottingham,SE9</a>
                <a class="button is-text" href="/driving-lessons-in-grove-park-se12">Grove Park, SE12</a>
                <a class="button is-text" href="/driving-lessons-in-bromley-br1">Bromley, BR1</a>
                <a class="button is-text" href="/driving-lessons-in-bickley-br1">Bickley, BR1</a>
                <a class="button is-text" href="/driving-lessons-in-sidcup-da15">Sidcup, DA15</a>
                <a class="button is-text" href="/driving-lessons-in-kidbrooke-se3">Kidbrooke and Blackheath, SE3</a>
                <a class="button is-text" href="/driving-lessons-in-lee-se12">Lee, SE12</a>
            </div>
        </div>
    </x-wrapper>
@endsection
