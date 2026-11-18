@inject('carbon', 'Carbon\Carbon')

@section('page-description', 'News page for chislehurst driving school, including DVSA updates')

@extends('layouts.app')

@section('title', 'News')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator mb-1" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>News</a></li>
        </ul>
    </nav>

    <div class="hero is-light mb-4">
        <div class="hero-body">
            <p class="title is-capitalized">
                News
            </p>
            <p class="subtitle">
                Latest articles and newsletters
            </p>
        </div>
    </div>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6 mb-4">
                <x-card>
                    <x-slot:title>
                        <h4 class="has-text-weight-bold is-small">Changes to the booking system
                        </h4>
                    </x-slot:title>
                    <x-slot:icon> {{ $carbon::createFromDate('06-05-2026')->format('l jS M Y') }}</x-slot:icon>
                    <x-slot:content>
                        <div class="content">
                            <p class="has-text-weight-bold">The DVSA has released information about how the new test booking
                                system will work after May 12th.</p>
                            <p><a href="https://www.gov.uk/guidance/changes-to-driving-test-booking-rules-in-2026">Read all
                                    about the changes to the driving test booking system here</a>.</p>
                            <p>In an attempt to prevent third party agents from obtaining driving test appointments and then
                                reselling them
                                at an inflated price the DVSA has removed driving instructors from the booking process.
                            </p>
                            <p>From 12th May only learners will be able to book and amend their own test, and will only be
                                able to change the appointment twice. </p>
                            <p>Learner drivers will still be able to swap their test with other learners, but the instructor
                                cannot do it for them, as happens currently. It will need to be done via a phone call
                                between the two provisional
                                licence holders and the DVSA. </p>
                            <p>From early June you will only be able to swap your test to one of two test centres which are
                                close to the original booking. This is to prevent people booking tests at the other end of
                                the country and swapping them out for closer ones.</p>
                            <p>We will see if this will improve the booking situtation. </p>
                            <div class="image">
                                <img src="{{ asset('img/photos/gov-uk-mobile.jpg') }}" alt="gov uk">
                            </div>


                        </div>
                    </x-slot:content>
                </x-card>
            </div>
        </div>
    </x-wrapper>
@endsection
