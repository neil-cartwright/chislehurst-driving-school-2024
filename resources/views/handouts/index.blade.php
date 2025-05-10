@extends('layouts.app')

@section('title', 'Handouts')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>

            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="is-active"><a href="/handouts">Handouts</a></li>
        </ul>
    </nav>

    <x-wrapper>

        <x-user.columns>

            <div class="columns is-multiline">
                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">Basics</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/cockpit_drill') }}">Cockpit drill</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/foot_controls') }}">Foot controls</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/hand_controls') }}">Hand controls</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/steering') }}">Steering</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/clutch') }}">Clutch</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/moving_off_and_stopping') }}">Moving off and
                                    stopping</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/mirrors') }}">Mirrors</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/signals') }}">Signals</a></li>
                        </ul>
                    </div><!-- menu -->
                </div><!-- column -->

                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">Junctions</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/emerging') }}">Emerging</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/approaching_junctions') }}">Approaching
                                    junctions</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/crossing_traffic') }}">Crossing traffic</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/handouts/crossroads') }}">Crossroads</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/y_junctions') }}">Y-junctions</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/roundabouts') }}">Roundabouts</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/one_way_systems') }}">One way systems</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">Out of town</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/out_of_town') }}">Out of town</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/railway_crossings') }}">Railway crossings</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/handouts/dual_carriageways') }}">Dual carriageways</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/handouts/joining_the_motorway') }}">Joining the
                                    motorway</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/driving_on_the_motorway') }}">Driving on the
                                    motorway</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/leaving_the_motorway') }}">Leaving the
                                    motorway</a></li>
                        </ul>
                    </div>
                </div><!-- column -->

                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">
                            Dealing with hazards
                        </p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/road_markings') }}">Road markings</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/pedestrian_crossings') }}">Pedestrian
                                    crossings</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/safety_bubble') }}">Safety bubble</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/emergency_stop') }}">Emergency stop</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/meeting_vehicles') }}">Meeting vehicles</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/overtaking') }}">Overtaking</a></li>
                        </ul>
                    </div>
                </div><!-- column -->

                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">Manoeuvring</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/turn_in_the_road') }}">Turn in the road</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/handouts/using_car_parks') }}">Using car parks</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/parking_on_the_right') }}">Parking on the
                                    right</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/reverse_parking') }}">Reverse parking</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/reversing_left') }}">Reversing left</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/reversing_right') }}">Reversing right</a></li>
                        </ul>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">Safety Questions</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/safety_questions_brakes') }}">Brakes</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/safety_questions_fluids') }}">Fluids</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/safety_questions_horn') }}">Horn</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/safety_questions_lights') }}">Lights</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/safety_questions_tyres') }}">Tyres</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/safety_questions_vision_safety') }}">Vision
                                    Safety</a></li>
                        </ul>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="menu mb-4">
                        <p class="menu-label">Context</p>
                        <ul class="menu-list">
                            <li><a target="_blank" href="{{ url('/handouts/driving_at_night') }}">Driving at night</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/handouts/sun_and_fog') }}">Sun and fog</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/wind_rain_snow') }}">Wind, rain and snow</a>
                            </li>
                            <li><a target="_blank" href="{{ url('/handouts/fit_state_to_drive') }}">Fit state to
                                    drive</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/driving_alone') }}">Driving alone</a></li>
                            <li><a target="_blank" href="{{ url('/handouts/driving_test') }}">Driving test</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </x-user.columns>

    </x-wrapper>
@endsection
