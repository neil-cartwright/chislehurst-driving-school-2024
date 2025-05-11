@extends('layouts.app')

@section('page-description',
    'Prices page for Chislehurst Driving School, including discounts and
    test hire fees')

@section('title', 'Prices')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>Prices</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns mb-4">
            <div class="column is-7">

                <x-card>

                    <x-slot:title>Prices Spring 2025</x-slot:title>
                    <x-slot:content>
                        <div class="max-w-[80ch] notification">
                            <p class="mb-3">
                                Lessons last for <span class="has-text-weight-bold">1 hour and 40 minutes</span>, and
                                are <span class="has-text-weight-bold">just under £40 per hour</span>.
                            </p>
                            <p class="mb-2">I use a <span class="has-text-weight-bold">dual controlled Skoda Fabia</span>
                                manual
                                transmission car. The vehicle has low emissions, using stop/start technology. It's small,
                                easy
                                to drive and is great for people of all shapes and sizes, with excellent all round
                                visibility.
                            </p>

                            <p class="mb-4">I've been a <span class="has-text-weight-bold">fully qualified driving
                                    instructor
                                    since 2004</span> and have helped hundreds of people to pass their driving test.</p>
                            <p class="has-text-weight-bold mb-2 is-size-6">Great value</p>
                            <p class="mb-2">Once you have started lessons you'll receive <span
                                    class="has-text-weight-bold">free access
                                    to 'Theory Test Pro'</span> . You will also
                                be able to <span class="has-text-weight-bold">log in to this website</span> where there are
                                lots of learning resources, including class
                                handouts, interactive quizzes, videos and more. </p>
                            <p class="mb-2">You can log in to keep track of payments and lesson history. Brief <span
                                    class="has-text-weight-bold">lesson notes</span>
                                are also provided for each session, to
                                help you jog your memory about previous drives.</p>
                            <p class="mb-2"><span class="has-text-weight-bold">Dashcam footage of test routes</span> is
                                provided, along
                                with up to date <span class="has-text-weight-bold">
                                    google maps of driving
                                    test routes
                                </span>. This can help if you're learning with parents or family members.</p>
                            <p class="mb-2">It matters to me that the driving lessons are enjoyable, positive and
                                constructive, and that each driver feels they are receiving good value for their lesson
                                price.
                            </p>
                            <p class="mb-2">Please call or email for more info. </p>

                        </div>
                        <div class="table-container">
                            <table class="table w-full text-center border">
                                <thead>
                                    <tr>
                                        <td>Package</td>
                                        <td></td>
                                        <td>Price</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">Single Lesson</span></td>
                                        <td>1 hr 40 mins</td>
                                        <td>£65</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">5 Lessons</span></td>
                                        <td class="is-flex is-align-items-center">(5 <i aria-hidden="true"
                                                class="fas fa-times has-text-grey-light mx-1"></i>)
                                            1 hr 40 mins
                                        </td>
                                        <td>£310</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">Test day hire &amp;
                                                lesson</span></td>
                                        <td>Up to 3hrs</td>
                                        <td>£110</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">Motorway Driving</span></td>
                                        <td>2 hours</td>
                                        <td>£85</td>
                                    </tr>

                                </tbody>
                            </table>

                            <p class="mb-2">
                                Payments can be made online via bank transfer and must be
                                cleared prior to the lessons.
                            </p>
                        </div>
                    </x-slot:content>
                </x-card>
            </div>

            <div class="column is-5">
                <div class="box">
                    <h3 class="title is-size-6 is-italic">Here are some of the things you'll learn:</h3>
                    <framework-carousel></framework-carousel>
                </div>
            </div>
        </div>

    </x-wrapper>
@endsection
