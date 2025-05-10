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
                        <h4 class="has-text-weight-bold is-small">From the DVSA:

                        </h4>
                    </x-slot:title>
                    <x-slot:icon> {{ $carbon::createFromDate('26-4-2024')->format('l jS M Y') }}</x-slot:icon>
                    <x-slot:content>
                        <div class="content">
                            <p>I received this in an email from the DVSA yesterday, which outlines what they are doing to
                                reduce
                                waiting times for tests.</p>

                            <div class="image">
                                <img src="{{ asset('img/photos/gov-uk-mobile.jpg') }}" alt="gov uk">
                            </div>
                            <blockquote class="is-italic">
                                <h4 class="has-text-weight-bold is-small">Limiting the number of times a test can be swapped
                                    online
                                </h4>
                                <p>
                                    Since the waiting times for driving tests have been high, we’ve seen a rise in the use
                                    of
                                    automated bots being used on the driving test booking service. This can result in the
                                    reselling
                                    of appointments, often at inflated prices. We <a target="_blank" class="is-underlined"
                                        href="https://despatch.blog.gov.uk/2023/06/29/how-were-dealing-with-bots-and-the-reselling-of-driving-tests/">published
                                        a blog about the work we were doing</a>
                                    to
                                    tackle this from DVSA CEO, Loveday Ryder back in June 2023.
                                </p>
                                <p>
                                    Since this we’ve continued work behind the scenes to find way to disrupt the systems
                                    used to
                                    access the test bookings. We will be publishing a blog post in the future to explain
                                    more
                                    about
                                    this work. One thing we have been looking in to doing is making it more difficult for
                                    people
                                    to
                                    misuse the booking system.
                                </p>
                                <p class="has-text-weight-bold">Changes to swaps online</p>
                                <p>
                                    We know that the majority of approved driving instructors (ADIs) swap tests responsibly
                                    to
                                    ensure that their learners are only put forward for their test when they are ready.
                                    However,
                                    we
                                    can see from our data that some businesses are swapping tests at a very high rate and
                                    outside
                                    normal parameters (based on feedback from our recent booking behaviour ADI survey).
                                    To ensure a level playing field for all customers we will, from today (25 April), start
                                    to
                                    limit
                                    the number of times a driving licence number can be used to swap a practical car test
                                    online.
                                    This will just be for car tests and will not affect motorcycle, theory or vocational
                                    tests.
                                    Once a driving licence number has reached this limit for the number of swaps, it can
                                    only be
                                    swapped again by calling our customer service centre. A message will appear on the
                                    booking
                                    system if the limit is reached.
                                </p>
                                <p class="has-text-weight-bold">Setting the limit</p>
                                <p>
                                    Confirming what the limit is set at would allow those people who are misusing the system
                                    to
                                    work
                                    around this change, so we are not planning on confirming what it is set at.
                                    We will keep the limit under review and may change it depending on the effects we see
                                    from
                                    it
                                    being introduced.
                                </p>
                            </blockquote>

                        </div>
                    </x-slot:content>
                </x-card>

            </div>
        </div>
    </x-wrapper>
@endsection
