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

                <x-card class="card-content-p-4">

                    <x-slot:title>Prices 2026</x-slot:title>
                    <x-slot:content class="p-0">

                        <div class="table-container">
                            <table class="is-size-6-mobile table w-full text-center border">
                                <thead>

                                    <tr>
                                        <td><span class="has-text-weight-semibold">Lessons are 1 hour 40
                                                minutes</span>
                                        </td>
                                        <td class="is-hidden-mobile"></td>
                                        <td><span class="is-hidden-mobile">Price</span></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="tag has-text-weight-bold is-light">
                                                50 min lessons*
                                            </span>
                                        </td>
                                        <td class="is-hidden-mobile">50 mins</td>
                                        <td>£38</td>
                                    </tr>

                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">1hr and 40 min lessons
                                            </span>
                                        </td>
                                        <td class="is-hidden-mobile">1 hr 40 mins</td>
                                        <td>£72</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">5
                                                Lessons</span></td>
                                        <td class="is-flex is-align-items-center is-hidden-mobile">(5 <i aria-hidden="true"
                                                class="fas fa-times mx-1"></i>)
                                            1 hr 40 mins
                                        </td>
                                        <td>£345</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">10
                                                Lessons</span></td>
                                        <td class="is-flex is-align-items-center is-hidden-mobile">(10 <i aria-hidden="true"
                                                class="fas fa-times mx-1"></i>)
                                            1 hr 40 mins
                                        </td>
                                        <td>£670</td>
                                    </tr>

                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">Test
                                                day hire +
                                                1hr</span></td>
                                        <td class="is-hidden-mobile">Fully insured car hire</td>
                                        <td>£125</td>
                                    </tr>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="is-size-7 has-text-centered">There
                                            are no booking fees.<br class="is-hidden-tablet" /> Unused lessons are fully
                                            refunded.<br class="is-hidden-tablet" /> 24 hours
                                            cancellation
                                            policy.<br />
                                            *50 minute lessons available depending on time of day and location
                                        </td>

                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <div class="max-w-[80ch]">

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


                            <div class="notification is-info">
                                <h3 class="has-text-weight-bold">Hourly rate?</h3>
                                <p><span class="has-text-weight-bold">Lessons are 1 hour 40 minutes</span>.</p>
                                <p>If you'd like to
                                    compare hourly rates with other driving schools, this works out <span
                                        class="has-text-weight-bold">£40 per hour</span>
                                    if you book 10 lessons,
                                    £41.40 per hour if you book 5 lessons, or £43.20 per hour if you're paying each time.
                                </p>
                                </p>
                            </div>

                            <div class="notification is-light mb-4">
                                <h2 class="has-text-weight-bold">Save money by passing first time</h2>
                                <p>In <span class="has-text-weight-bold">2025</span> 17 out of 23 customers passed at the
                                    first attempt. The other 6 passed 2nd time.<br />
                                    In <span class="has-text-weight-bold">2024</span> 20 out of 25 passed first time
                                </p>
                            </div>

                            <p class="has-text-weight-bold is-size-6 mb-2">Great value</p>
                            <p class="mb-2">Once you have started lessons you'll receive <span
                                    class="has-text-weight-bold">free access
                                    to 'Theory Test Pro'</span> . You will also
                                be able to <span class="has-text-weight-bold">log in to this website</span> where there are
                                lots of learning resources, including class
                                handouts, interactive quizzes, videos and more. </p>
                            <p class="mb-4">You can log in to keep track of payments and lesson history. Brief <span
                                    class="has-text-weight-bold">lesson notes</span>
                                are also provided for each session, to
                                help you track progress.</p>
                            <p class="mb-2"><span class="has-text-weight-bold">Dashcam footage of test routes</span> is
                                provided, along
                                with up to date <span class="has-text-weight-bold">
                                    google maps of driving
                                    test routes
                                </span>. This can help if you're learning with parents or family members.</p>
                            <p class="mb-2">It matters to me that the driving lessons are enjoyable,
                                positive and
                                constructive, and that each driver feels they are receiving good value for their lesson
                                price.
                            </p>
                            <p class="mb-2">Please call or email for more info. </p>

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
