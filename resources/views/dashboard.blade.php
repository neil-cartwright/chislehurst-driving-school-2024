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
            <div>
                <div class="grid is-col-min-16">

                    <div class="cell">
                        <a href="{{ url('/user/lessons') }}">
                            <div class="box has-background-light">
                                <h2 class="title is-size-5">Lessons</h2>
                                <p>
                                    A record of all your driving lesson appointments
                                    and payments, including brief notes of where you
                                    went, and what you practiced.
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- videos -->
                    <div class="cell">
                        <a href="{{ url('/videos') }}">
                            <div class="box">
                                <h2 class="title is-size-5">Videos</h2>
                                <p>
                                    A selection of useful videos relating to best
                                    driving practices, driver safety and mechanical
                                    knowledge.
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- driver active -->
                    <div class="cell">
                        <a href="driver-active">
                            <div class="box">
                                <h2 class="title is-size-5">Driver Active</h2>
                                <p>
                                    Driver Active is a fantastic resource for new
                                    drivers. It contains an enourmous amount of
                                    information, guidance and advice created by one of
                                    Britain's leading driving instructors, John Farlam. John has now retired and his website
                                    is now free to use.
                                </p>
                            </div>
                        </a>
                    </div>

                    <!-- text books -->
                    <div class="cell">
                        <a href="{{ url('/text-books') }}">
                            <div class="box">
                                <h2 class="title is-size-5">Text Books</h2>
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
                            </div>
                        </a>
                    </div>

                    <!-- handouts -->
                    <div class="cell">
                        <a href="{{ url('/handouts') }}">
                            <div class="box">
                                <h2 class="title is-size-5">Handouts</h2>
                                <p>
                                    Illustrated guides to each lesson to supplement your in-car learning. Have a look
                                    through these before and after lessons to help cement your understanding of different
                                    kinds of driving task.
                                </p>
                                <div class="spaced-row">
                                    <img src="{{ asset('img/graphics/cockpit_drill.jpg') }}" alt="handouts cockpit drill">
                                    <img src="{{ asset('img/graphics/driving_on_the_motorway.jpg') }}"
                                        alt="handouts motorways">
                                    <img src="{{ asset('img/graphics/mirrors.jpg') }}" alt="handouts mirrors">
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- quizzes -->
                    <div class="cell">
                        <a href="{{ url('/quiz') }}">
                            <div class="box">
                                <div class="content">
                                    <h2 class="title is-size-5">Quizzes</h2>
                                    <p>
                                        Test yourself with this selection of short
                                        interactive practical driving questions.
                                    </p>
                                    <div class="has-text-centered">
                                        <img src="{{ asset('img/graphics/quiz-screenshot.jpg') }}"
                                            alt="handouts cockpit drill">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- test routes -->
                    <div class="cell">
                        <div class="box">
                            <h2 class="title is-size-5">Test routes</h2>
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
                    </div>
                    <!-- road signs -->
                    <div class="cell">
                        <a href="{{ url('/signs/warning-signs') }}">
                            <div class="box">
                                <h2 class="title is-size-5">Road Signs</h2>
                                <p>
                                    An interactive collection of hundreds of UK Road
                                    Signs, for you to view and learn.
                                </p>
                                <div class="spaced-row">
                                    <img src="{{ asset('img/driving-images/warning-signs/toads.jpg') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- theory test pro -->
                    <div class="cell">
                        <a href="https://app.theorytestpro.co.uk/login">
                            <div class="box">
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
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </x-user.columns>
    </x-wrapper>
@endsection
