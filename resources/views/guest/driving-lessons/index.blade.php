@extends('layouts.app')

@section('page-description', 'Driving lessons in Chislehurst, and South East London')

@section('title', 'Driving lessons')

@section('main')

    <nav class="breadcrumb has-bullet-separator mb-0" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active">
                <a>Driving lessons</a>
            </li>
        </ul>
    </nav>

    <x-wrapper>
        <div>
            <div class="notification is-white">
                <h1 class="title is-size-5">Driving Lessons in Bromley, Greenwich, Lewisham and Bexley</h1>
                <div class="content w-80ch">
                    <p>I provide driving lessons in the following areas Monday-Thursday and Saturdays.</p>
                    <p>If you live in an area not listed here please do get in touch and I may still be able to
                        help with driving
                        lessons,
                        depending on the day and time needed.</p>
                    <div class="columns is-mobile">
                        <div class="column">
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">BR7</p>
                                <a class="is-block" href="/driving-lessons/chislehurst">Chislehurst</a>
                            </div>
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">BR5</p>
                                <a class="is-block" href="/driving-lessons/petts-wood">Petts Wood</a>
                            </div>
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">BR1</p>
                                <a class="is-block" href="/driving-lessons/bromley">Bromley</a>
                                <a class="is-block" href="/driving-lessons/bickley">Bickley</a>
                                <a class="is-block" href="/driving-lessons/downham">Downham</a>
                            </div>
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">DA15</p>
                                <a class="is-block" href="/driving-lessons/sidcup">Sidcup</a>
                            </div>

                        </div>
                        <div class="column">
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">SE9</p>
                                <a class="is-block" href="/driving-lessons/eltham">Eltham</a>
                                <a class="is-block" href="/driving-lessons/new-eltham">New Eltham</a>
                                <a class="is-block" href="/driving-lessons/mottingham">Mottingham</a>
                            </div>
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">SE12</p>
                                <a class="is-block" href="/driving-lessons/lee">Lee Green</a>
                                <a class="is-block" href="/driving-lessons/grove-park">Grove Park</a>
                            </div>
                            <div class="mb-2">
                                <p class="has-text-weight-bold mb-1">SE3</p>
                                <a class="is-block" href="/driving-lessons/kidbrooke">Kidbrooke and
                                    Blackheath</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <article class="notification">
                <h2 class="title is-size-6">Here are just some of the essential things you will learn on your
                    driving lessons:</h2>
                <modules-component></modules-component>
            </article>

    </x-wrapper>
@endsection
