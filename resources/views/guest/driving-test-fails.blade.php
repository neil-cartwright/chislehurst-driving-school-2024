@extends('layouts.app')

@section('page-description', 'A description of some driving test fails which other learner drivers might benefit from
    reading about')

@section('title', 'Driving test fails')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Driving test fails</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6">
                <h1 class="title is-size-5">Driving test fails</h1>
                <div class="content">
                    <p>Despite best efforts, sometimes you end up driving home from the local test
                        centre disappointed and
                        a bit
                        frustrated.

                    </p>
                    <p>Learning from your own mistakes is important, but <span class="has-text-weight-bold">it is much
                            cheaper to learn from other people's.</span></p>
                    <p>Here is a list of driving test fails which some of my customers have received over the last twenty
                        years. In
                        all cases
                        these fails were single issues and the candidate would have passed otherwise.</p>
                    <hr>
                    <x-card>
                        <x-slot:title>Not stopping at a stop sign</x-slot:title>
                        <x-slot:icon>Hither Green</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered">
                                <div class="column is-two-thirds">
                                    <p>You must <strong>fully stop</strong> at a stop sign. <span class="is-italic">
                                            Even if another driver flashes their headlights
                                            to let you
                                            out of the junction just as you are about to stop</span>. You must fully stop
                                        behind the
                                        stop line.</p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/road-signs/unique/stop.png') }}" alt="stop sign">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Driving too slowly</x-slot:title>
                        <x-slot:icon>Bromley</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>On a driving test you are expected to make reasonable <strong>progress</strong> along
                                        the road. If the
                                        road is clear you should be confident enough to keep up with
                                        the traffic flow and drive at, or almost at, the speed limit. </p>
                                    <p>You must of course adjust your speed appropriately according to changing traffic
                                        conditions.</p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/driving-images/speed-limit-signs/max-30.jpg') }}"
                                        alt="30mph sign" style="max-height:150px;">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Not using a bus lane</x-slot:title>
                        <x-slot:icon>Bromley</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>You must drive in the left hand lane. If there is a bus lane, and if it is outside
                                        the hours of operation then you must use the bus lane and therefore keep left,
                                        unless there is a good reason not to. Allow faster moving traffic to pass you on
                                        your right (offside).</p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/road-signs/bus-lanes/bus-lane-times.jpg') }}"
                                        alt="bus lane sign" style="max-height:150px;">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Hitting a width restriction</x-slot:title>
                        <x-slot:icon>Hither Green</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    You should be able to pass through a width restriction safely. Stop if you need to. If
                                    you touch the post
                                    with one of your
                                    mirrors, causing the mirror to be pushed back, you will probably receive a serious fault
                                    on
                                    a driving test.
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/driving-images/regulatory-signs/width-restriction.jpg') }}"
                                        alt="width restriction" style="max-height:150px;">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Wrong lane on a one way street</x-slot:title>
                        <x-slot:icon>Bromley</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>When turning right on a one way street you should position your vehicle to the right
                                        hand side where possible, so that traffic turning left can pass on your left.</p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/road-signs/positive/one-way.png') }}" alt="one way street">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Not noticing a filter light</x-slot:title>
                        <x-slot:icon>Bromley</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>
                                        Pay attention when you're waiting at lights. If you're too slow to notice that a
                                        light
                                        has changed to green then a driver behind may end up bringing it to your attention.
                                    </p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/road-signs/traffic-lights/filter.png') }}" alt="filter light">
                                </div>
                            </div>

                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Indicating to pull out when it is not clear</x-slot:title>
                        <x-slot:icon>Hither Green</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>At some stage on a driving test you might be asked to pull over on a busy road. This
                                        is called 'the
                                        normal stops
                                        exercise'. </p>
                                    <p> When the examiner asks you to move away again, think about which signals
                                        you give, and how they might be interpreted by following traffic.</p>
                                    <p>Be patient, avoid confusing the traffic behind, and don't indicate to pull out if
                                        there isn't an immediate
                                        gap in the traffic. </p>
                                </div>
                                <div class="column has-text-centered">
                                    <div>
                                        <img src="{{ asset('/img/vehicle-images/right-indicator-animation.gif') }}"
                                            alt="roundabout" style="max-width:150px;">
                                    </div>
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Not keeping to the left hand lane</x-slot:title>
                        <x-slot:icon>Sidcup</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>
                                        When driving on a dual carriageway you must drive in the left hand lane, unless you
                                        are
                                        turning
                                        right or overtaking. If you emerge onto a dual carriageway into the right hand lane,
                                        <span class="is-italic">
                                            for
                                            example, when exiting a roundabout,</span> you must look to return to the left
                                        hand lane in
                                        good time,
                                        so that faster moving traffic can pass on your right.
                                    </p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/graphics/keeping-left-is-right.png') }}"
                                        alt="keeping left is right" style="max-height:200px;">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Bay parking into the wrong bay</x-slot:title>
                        <x-slot:icon>Bromley</x-slot:icon>
                        <x-slot:content>
                            <div class="columns is-vcentered ">
                                <div class="column is-two-thirds">
                                    <p>
                                        When parking into a bay, even when under pressure, it's important to take the time
                                        to
                                        line up properly and make correct observations so that
                                        when you begin reversing you are heading towards the bay you intended.
                                    </p>
                                    <p>You are allowed a 'reasonable' amount of time to fix a bay park on a driving test.
                                        Try only to take one shunt to correct it if you can.
                                    </p>
                                </div>
                                <div class="column has-text-centered">
                                    <img src="{{ asset('/img/driving-images/on-street-parking/parking.jpg') }}"
                                        alt="keeping left is right" style="max-height:200px;">
                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>

                    <x-card>
                        <x-slot:title>Giving way to the right when you don't need to</x-slot:title>
                        <x-slot:icon>Sidcup</x-slot:icon>
                        <x-slot:content>
                            <div class="columns">
                                <div class="column is-two-thirds">
                                    <p>On North Cray Road, near Sidcup driving test centre, there is a roundabout, (just
                                        before Bexley village) where the
                                        priorities are reversed. </p>
                                    <p>
                                    <blockquote>
                                        <p>Highway code rule 185</p>

                                        <p>
                                            When reaching the roundabout you should
                                            check whether road markings allow you to enter the roundabout without giving
                                            way. If
                                            so, proceed, but still look to the right before joining
                                        </p>
                                        </p>
                                    </blockquote>


                                    <p>Follow highway code rule 185, check your mirrors and be aware that traffic behind
                                        might not expect you to
                                        stop for traffic on your right when there are no give way signs or give way lines.
                                    </p>


                                </div>
                                <div class="column has-text-centered">
                                    <figure>
                                        <img src="{{ asset('/img/road-signs/webp/unique/give-way.webp') }}"
                                            alt="roundabout sign">
                                        <figcaption>Is there a give way sign?</figcaption>
                                    </figure>
                                    <div class="mb-4">
                                        <img src="{{ asset('/img/road-signs/roundabouts/roundabout.png') }}"
                                            alt="roundabout sign" style="max-height:200px;">
                                    </div>

                                </div>
                            </div>
                        </x-slot:content>
                    </x-card>
                </div>
            </div>
        </div>
    </x-wrapper>
@endsection
