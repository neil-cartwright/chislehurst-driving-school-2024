@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Dashboard')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="is-active"><a href="user/lessons">{{ auth()->user()->name }}</a></li>
        </ul>
    </nav>
    <x-wrapper>

        <x-user.columns>
            <!-- tiles -->
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">

                            <a href="{{ url('/user/lessons') }}" class="tile is-child notification is-warning">
                                <p class="title is-size-5">Lessons</p>
                                <p>
                                    A record of all your driving lesson appointments
                                    and payments, including brief notes of where you
                                    went, and what you practiced.
                                </p>

                            </a>

                            <a href="{{ url('/handouts') }}" class="tile is-child notification is-light">
                                <p class="title is-size-5">Handouts</p>
                                <p>
                                    Illustrated guides to each lesson to supplement your in-car learning.
                                </p>
                                <div class="spaced-row">

                                    <img src="{{ asset('img/graphics/cockpit_drill.jpg') }}" alt="handouts cockpit drill">
                                    <img src="{{ asset('img/graphics/driving_on_the_motorway.jpg') }}"
                                        alt="handouts motorways">
                                    <img src="{{ asset('img/graphics/mirrors.jpg') }}" alt="handouts mirrors">
                                </div>
                            </a>

                            <a href="{{ url('/videos') }}" class="tile is-child is-light notification">
                                <p class="title is-size-5">Videos</p>
                                <p>
                                    A selection of useful videos relating to best
                                    driving practices, driver safety and mechanical
                                    knowledge.
                                </p>
                            </a>
                        </div>

                        <div class="tile is-parent is-vertical">

                            <a href="{{ url('/text-books') }}" class="tile is-child notification is-light">
                                <p class="title is-size-5">Text Books</p>
                                <p>
                                    Chapter by chapter pdf copies of some of the most
                                    important driving text books, including
                                    <i>Driving: The Essential Skills</i> and
                                    <i>Roadcraft</i>.
                                </p>
                                <div class="spaced-row">
                                    <img src="{{ asset('img/graphics/roadcraft-cover.jpg') }}" alt="roadcraft"
                                        style="max-height:100px;">
                                    <img src="{{ asset('img/graphics/essential-skills-cover.webp') }}"
                                        alt="essential-skills" style="max-height:100px;">
                                    <img src="{{ asset('img/graphics/how-cars-work-cover.jpg') }}" alt="how-cars-work"
                                        style="max-height:100px;">
                                </div>
                            </a>


                            <a href="{{ url('/quiz') }}" class="tile is-child notification is-light">
                                <div class="content">
                                    <p class="title is-size-5">Quizzes</p>
                                    <p>
                                        Test yourself with this selection of short
                                        interactive practical driving questions.
                                    </p>
                                    <div class="has-text-centered">
                                        <img src="{{ asset('img/graphics/quiz-screenshot.jpg') }}"
                                            alt="handouts cockpit drill">
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>

                    <div class="tile is-parent">

                        <a href="driver-active" class="tile is-child notification is-light">
                            <p class="title is-size-5">Driver Active</p>
                            <p>
                                Driver Active is a fantastic resource for new
                                drivers. It contains an enourmous amount of
                                information, guidance and advice created by one of
                                Britain's leading driving instructors, John Farlam. John has now retired and his website
                                is now free to use.
                            </p>
                        </a>

                    </div>
                </div>
                <!--  -->
                <div class="tile is-vertical is-parent">
                    <div class="tile is-child notification is-">
                        <p class="title is-size-5">Test routes</p>
                        <p>
                            A selection of local test routes recorded from the
                            TomTom 52 Sat Nav, to give you some idea of the
                            types of roads you'll be driving on during your
                            test.
                        </p>
                        <div class=" mt-2">
                            <div>
                                <a class="button is-text" href="/tests/routes/bromley">Bromley</a>
                                <a class="button is-text" href="/tests/routes/sidcup">Sidcup</a>
                            </div>
                            <div>
                                <a class="button is-text" href="/tests/routes/hither-green">Hither
                                    Green</a>
                                <a class="button is-text" href="/tests/routes/west-wickham">West
                                    Wickham</a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/signs/warning-signs') }}" class="tile is-child notification is-white">
                        <p class="title is-size-5">Road Signs</p>
                        <p>
                            An interactive collection of hundreds of UK Road
                            Signs, for you to view and learn.
                        </p>

                        <div class="spaced-row">
                            <img src="{{ asset('img/driving-images/warning-signs/toads.jpg') }}" alt="">
                        </div>
                    </a>

                    <a href="https://app.theorytestpro.co.uk/login" class="tile is-child notification is-light">
                        <img src="https://app.theorytestpro.co.uk/assets/ttp_300x90-banner-grey.png"
                            alt="theory test pro logo, theory test practice for learner drivers" class="mb-2">
                        <p>
                            Everything you need to pass your theory test. A vast
                            bank of theory test questions grouped by subject, plus
                            a selection of hazard perception test clips.
                        </p>
                        <p>
                            Theory Test Pro is <strong>Free</strong> to all of my
                            customers, saving you £££s.
                        </p>
                    </a>

                </div>
            </div>
            </div>
        </x-user.columns>
    </x-wrapper>
@endsection
