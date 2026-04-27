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
                                        <td><span class="has-text-weight-semibold">Lesson Package</span>
                                        </td>
                                        <td class="is-hidden-mobile">Duration</td>
                                        <td><span class="is-hidden-mobile">Price</span></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="tag has-text-weight-bold is-light">
                                                Shorter lesson*
                                            </span>
                                        </td>
                                        <td class="is-hidden-mobile">50 mins</td>
                                        <td>£38</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span class="tag has-text-weight-bold is-light">
                                                5 shorter lessons*
                                            </span>
                                        </td>
                                        <td class="is-hidden-mobile">(5 <i aria-hidden="true"
                                                class="fas fa-times mx-1"></i>) 50 mins</td>
                                        <td>£190</td>
                                    </tr>

                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">Regular lesson
                                            </span>
                                        </td>
                                        <td class="is-hidden-mobile">1 hour 40 mins</td>
                                        <td>£72</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">5 Regular
                                                lessons</span></td>
                                        <td class="is-flex is-align-items-center is-hidden-mobile">(5 <i aria-hidden="true"
                                                class="fas fa-times mx-1"></i>)
                                            1 hour 40 mins
                                        </td>
                                        <td>£345</td>
                                    </tr>
                                    <tr>
                                        <td><span class="tag has-text-weight-bold is-light">10 Regular
                                                lessons</span></td>
                                        <td class="is-flex is-align-items-center is-hidden-mobile">(10 <i aria-hidden="true"
                                                class="fas fa-times mx-1"></i>)
                                            1 hour 40 mins
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
                                        <td colspan="3" class="is-size-7 has-text-centered"><span
                                                class="has-text-weight-bold">
                                                There
                                                are no booking fees.
                                            </span><br class="is-hidden-tablet" /> Unused lessons are fully
                                            refunded.<br class="is-hidden-tablet" /> 24 hours
                                            cancellation
                                            policy.<br />
                                            <span>*shorter lessons available depending<br class="is-hidden-desktop" /> on
                                                time and location</span><br>

                                        </td>

                                    </tr>

                                </tfoot>
                            </table>

                        </div>
                        <div class="max-w-[80ch] content">
                            <p><strong>Regular </strong>lessons last for <span class="has-text-weight-bold">1 hour and 40
                                    minutes</span>.</p>
                            <p> <strong>Shorter</strong> lessons
                                are <span class="has-text-weight-bold">
                                    50
                                    minutes</span> and are perfect for people who are fully trained and who need to keep
                                their skills up while they wait for their driving test date to come around.
                            </p>

                            <p>I use a <span class="has-text-weight-bold">dual controlled Skoda Fabia</span>
                                manual
                                transmission car. The vehicle has low emissions, using stop/start technology. It's small,
                                easy
                                to drive and is great for people of all shapes and sizes, with excellent all round
                                visibility.
                            </p>

                            <p>I've been a <span class="has-text-weight-bold">fully qualified driving
                                    instructor
                                    since 2004</span> and have helped hundreds of people to pass their driving test.</p>


                            <div class="notification">
                                <h2 class="has-text-weight-bold is-size-6">Save money by passing first time</h2>
                                <p>In <span class="has-text-weight-bold">2025</span> 17 out of 23 customers passed at the
                                    first attempt. The other 6 passed 2nd time.<br />
                                    In <span class="has-text-weight-bold">2024</span> 20 out of 25 passed first time
                                </p>
                            </div>

                            <p class="has-text-weight-bold is-size-6">Great value</p>
                            <p class="mb-2">Once you have started lessons you'll receive <span
                                    class="has-text-weight-bold">free access
                                    to 'Theory Test Pro'</span> . You will also
                                be able to <span class="has-text-weight-bold">log in to this website</span> where there are
                                lots of learning resources, including class
                                handouts, interactive quizzes, videos and more. </p>
                            <p>You can log in to keep track of payments and lesson history. Brief <span
                                    class="has-text-weight-bold">lesson notes</span>
                                are also provided for each session, to
                                help you track progress.</p>
                            <p><span class="has-text-weight-bold">Dashcam footage of test routes</span> is
                                provided, along
                                with up to date <span class="has-text-weight-bold">
                                    google maps of driving
                                    test routes
                                </span>. This can help if you're learning with parents or family members.</p>
                            <p>It matters to me that the driving lessons are enjoyable,
                                positive and
                                constructive, and that each driver feels they are receiving good value for their lesson
                                price.
                            </p>
                            <p>Please call or email for more info. </p>

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
