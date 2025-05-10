@extends('layouts.app')

@section('title', 'Text books')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li class="is-active"><a href="/text-books">Text books</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <x-user.columns>
            <div class="columns">
                <div class="column is-4">
                    <div class="menu">
                        <div class="book-cover">
                            <img src="{{ asset('img/graphics/essential-skills-cover.webp') }}" alt="essential-skills"
                                class="img">
                        </div>
                        <p class="menu-label">
                            Driving: The essential skills</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/all-weather-driving') }}">All
                                    weather
                                    driving</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/avoiding-and-dealing-with-congestion') }}">Avoiding
                                    and
                                    dealing with congestion</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/basic-maintenance') }}">Basic
                                    maintenance</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/breakdowns') }}">Breakdowns</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/controls') }}">Controls</a>
                            </li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/defensive-driving') }}">Defensive
                                    driving</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/ecosafe-and-environment') }}">Ecosafe and
                                    environment</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/incidents-accidents-emergencies') }}">Incidents,
                                    accidents
                                    and emergencies</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/junctions') }}">Junctions</a>
                            </li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/manoeuvring') }}">Manoeuvring</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/mirrors') }}">Mirrors</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/motorways') }}">Motorways</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/night-driving') }}">Night
                                    driving</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/on-the-road') }}">On the
                                    road</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/starting-to-drive') }}">Starting
                                    to
                                    drive</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/the-driver-and-the-law') }}">The
                                    driver
                                    and the law</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/the-driver') }}">The
                                    driver</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/essential-skills/towing-a-trailer') }}">Towing
                                    a
                                    trailer</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/essential-skills/vehicle-security') }}">Vehicle
                                    security</a></li>
                        </ul>
                    </div><!-- menu -->
                </div><!-- column -->

                <div class="column is-4">
                    <div class="menu">
                        <div class="book-cover">
                            <img src="{{ asset('img/graphics/roadcraft-cover.jpg') }}" alt="roadcraft" class="image">
                        </div>
                        <p class="menu-label">Roadcraft</p>
                        <ul class="menu-list">
                            <li><a target="_blank"
                                    href="{{ url('/text-books/roadcraft/acceleration-gears-braking-and-steering') }}">Acceleration,
                                    gears,
                                    braking and steering</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/roadcraft/attitude') }}">Attitude</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/roadcraft/cornering') }}">Cornering</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/roadcraft/driver-signals') }}">Driver
                                    signals</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/roadcraft/maintaining-vehicle-stability') }}">Maintaining
                                    vehicle stability</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/roadcraft/motorways-and-multi-lane-roads') }}">Motorways
                                    and multi-lane roads</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/roadcraft/observation-and-anticipation') }}">Observation
                                    and anticipation</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/roadcraft/overtaking') }}">Overtaking</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/roadcraft/positioning') }}">Positioning</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/roadcraft/system-of-car-control') }}">System
                                    of car
                                    control</a></li>
                        </ul>


                        <div class="book-cover">
                            <img src="{{ asset('img/graphics/highway-code-cover.jpg') }}" alt="highway-code"
                                class="image">
                        </div>
                        <p class="menu-label">Highway code</p>

                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/text-books/highway-code/highway-code') }}">The highway
                                    code</a></li>

                        </ul>
                    </div>
                </div><!-- column -->

                <div class="column is-4">
                    <div class="menu">
                        <div class="book-cover">
                            <img src="{{ asset('img/graphics/how-cars-work-cover.jpg') }}" alt="how cars work"
                                class="image">
                        </div>
                        <p class="menu-label">How cars work</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/text-books/how-cars-work/brakes') }}">Brakes</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/how-cars-work/cooling-system') }}">Cooling
                                    system</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/how-cars-work/drive-train') }}">Drive
                                    train</a></li>
                            <li><a target="_blank"
                                    href="{{ url('/text-books/how-cars-work/electrical-system') }}">Electrical
                                    system</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/how-cars-work/engine') }}">Engine</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/how-cars-work/fuel-system') }}">Fuel
                                    system</a></li>
                        </ul>

                        <div class="book-cover">
                            <img src="{{ asset('img/graphics/know-your-road-signs-cover.jpg') }}"
                                alt="know your road signs" class="image">
                        </div>
                        <p class="menu-label">Know your road signs</p>
                        <ul class="menu-list">
                            <li><a target="_blank"
                                    href="{{ url('/text-books/know-your-road-signs/know-your-road-signs') }}">Know your
                                    road signs</a></li>
                        </ul>
                        <!--  -->
                        <p class="menu-label">Other handouts</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/text-books/dia/emergency-vehicles') }}">Dealing with
                                    emergency
                                    vehicles</a></li>
                            <li><a target="_blank" href="{{ url('/text-books/dia/show-me-tell-me-1') }}">Show me/Tell me
                                    sheet 1</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/text-books/dia/show-me-tell-me-2') }}">Show me/Tell me
                                    sheet 2</a>
                            </li>
                        </ul>



                    </div>

                </div><!-- column -->

            </div><!-- columns -->
        </x-user.columns>


    </x-wrapper>
@endsection
