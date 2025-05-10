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
        <div class="columns is-centered mb-4">
            <div class="column is-8">

                <x-card>

                    <x-slot:title>Prices Spring 2025</x-slot:title>
                    <x-slot:content>
                        <div class="max-w-[80ch] notification">
                            <p class="mb-3">
                                Lessons last for <span class="has-text-weight-bold">1 hour and 40 minutes</span>. The
                                prepayment
                                price works out at <span class="has-text-weight-bold">£37 per hour</span>.
                            </p>
                            <p class="mb-2">I use a <span class="has-text-weight-bold">dual controlled Skoda Fabia</span>
                                manual
                                transmission car. The vehicle has low emissions, using stop/start technology. It's small,
                                easy
                                to drive and is great for people of all shapes and sizes, with excellent all round
                                visibility.
                            </p>

                            <p class="mb-2">I've been a <span class="has-text-weight-bold">fully qualified driving
                                    instructor
                                    since 2004</span> and have helped hundreds of people to pass their driving test.</p>
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
        </div>

    </x-wrapper>
@endsection
