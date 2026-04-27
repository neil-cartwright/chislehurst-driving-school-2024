@extends('layouts.app')

@section('page-description', 'Frequently asked questions about driving lessons and driving tests')

@section('title', 'FAQ')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>FAQ</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6">
                <h1 class="title is-size-5">Frequently asked questions</h1>

                <div>


                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer
                        ">How long does
                            it take to learn to
                            drive?</summary>
                        <p>Most of my customers take <span class="has-text-weight-bold">between 30 hours and 60 hours</span>
                            to learn to drive, and pass a driving test. However, it does depend largely on level of ability
                            and previous experience. </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Do I need to pass a theory test before
                            booking a practical
                            test?</summary>
                        <p>Yes, you will need to pass a theory test before being able to book a practical test.</p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">How long is the waiting list for driving
                            tests?</summary>
                        <p>Locally the waiting list for tests is 22 weeks, or approximately 5 months. If you pass your
                            theory test when you start your driving lessons then your driving test should come around at
                            about the right time, when you're ready.</p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">How can I get an earlier driving test?
                        </summary>
                        <p>One of the best ways of securing an earlier test has been to ask your driving instructor to use
                            their network to swap with another instructor. Unfortunately the government is stopping this
                            practice in order to try to prevent third party resellers from abusing the booking system. </p>
                        <p>Hopefully the changes will improve the situation, but until more examiners are employed the
                            waiting list is likely to remain fairly long.</p>
                    </details>


                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Do lessons start from home?
                        </summary>
                        <p>Most people start and finish their lessons either from home or from school. I can also pick up
                            and drop off at any location or place of work locally.</p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Can I use my own car for tests?</summary>
                        <p>Yes you can use your own car for test. Please read the gov.uk website: <a
                                href="https://www.gov.uk/driving-test/using-your-own-car">https://www.gov.uk/driving-test/using-your-own-car</a>
                        </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Which is the easiest test centre?
                        </summary>
                        <p>My advice would always be to make sure you are consistent enough to drive in a variety of road
                            and
                            traffic conditions. The pass rates at London test centres are broadly similar. </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Do you do shorter lessons?</summary>
                        <p>Yes, on request. 1 hour 40 minute lessons allow for a more varied, realistic and thorough driving
                            experience. Pass rates have improved significantly since providing longer lessons. 50 minute
                            lessons are charged at £38.
                        </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">How many lessons will I need?</summary>
                        <p>This is hard to answer, but most people take between 30 and 60 hours to learn to drive with a
                            professional instructor. However,
                            it really depends on your previous experience and level of ability.</p>
                        <p>One essential aspect of passing a driving test is acquiring enough experience in order
                            to be able
                            to deal safely and confidently with the wide variety of situations you're likely to encounter.
                        </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Do I need to go on the motorway on my
                            test?</summary>
                        <p>No, but you will need to be confident driving on dual carriageways and using slip lanes. You are
                            allowed to practice on motorways with a fully qualified instructor in a dual controlled vehicle.
                        </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">If I fail my test will I need to wait for
                            another one?
                        </summary>
                        <p>Unfortunately, yes, you will need to book another test using the same system. Most of my
                            customers (7/10) pass at the first attempt. Work hard to pass first time and hopefully you will
                            save time and money in the end. The government advises only booking tests through the official
                            gov.uk website <a
                                href="https://www.gov.uk/book-driving-test">https://www.gov.uk/book-driving-test</a></p>
                    </details>


                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Do I need to keep taking lessons while I'm
                            waiting for my
                            test
                            date?</summary>
                        <p>No. If you're ready for your test then you don't need to buy lessons you don't need. If you are
                            waiting for your test date to come around you could
                            have lessons less frequently, or take a break
                            for a period of time and pick things
                            up again nearer to the date. </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">How will I know if I'm ready for my test?
                        </summary>
                        <p>If you can drive safely, legally and independently on a wide variety of road types, and perform
                            all required reverse parking manoeuvres to a reasonable standard then
                            you are ready to be tested. It is also extremely helpful to have mock tests in order to prepare
                            for driving under test conditions. The government has a campaign to ensure candidates attend
                            tests fully prepared.
                            <a href="https://readytopass.campaign.gov.uk/" target="_blank">Click here for the &ldquo;Ready
                                to Pass&rdquo;
                                campaign.</a>
                        </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Which reversing manoeuvres will I do on my
                            test?
                        </summary>
                        <p>You will be asked to perform one manoeuvre which involves reversing. This could be:

                            <span class="has-text-weight-bold">
                                Parallel parking, reverse-in bay parking, reverse-out bay parking, or straight line
                                reversing
                            </span>.
                            The bay parking is generally conducted in a public car park.
                        </p>
                        <br />
                        <p>It is also important that you know how to turn the car around by either a three point turn, or by
                            reversing into a side road.</p>
                        </p>
                        <p>You may also be asked to perform a controlled stop exercise (emergency stop), a normal stops
                            exercise (pulling over safely at the side of the road), and an angled start exercise (moving
                            away from behind a vehicle).</p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Will I need to do big roundabouts on my
                            test?</summary>
                        <p>Yes, there is a good chance that your test will involve a &ldquo;big&rdquo; roundabout, although
                            not all test
                            routes have them. You should be confident emerging onto busy roundabouts. </p>
                        <p>At Sidcup you will need to be able to deal with Ruxley roundabout, Crittals corner and Frognal
                            corner. At Bromley you will need to be able to deal with Plaistow Green and Cliftons roundabout.
                        </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Which car do I use for the driving test?
                        </summary>
                        <p>Most people hire their instructor's car for the test. However, you are allowed to use your own,
                            or hire a car from a third party. <a href="https://www.gov.uk/driving-test/using-your-own-car"
                                target="_blank">Click here for rules for providing
                                your own car</a>. </p>
                    </details>

                    <details class="notification">
                        <summary class="mb-2 has-text-weight-bold cursor-pointer">Will I be asked any theory questions
                            during the test?
                        </summary>
                        <p>No. However, at the beginning of the test you will be asked a basic car maintenance question.
                            During the test you will be asked to use an auxiliary control, such as using the wipers. These
                            are known as &ldquo;show me, tell me&rdquo; questions - link <a
                                href="https://www.gov.uk/government/publications/car-show-me-tell-me-vehicle-safety-questions/car-show-me-tell-me-vehicle-safety-questions"
                                target="_blank">here</a>.
                        </p>
                    </details>

                </div>
            </div>
        </div>
    </x-wrapper>
@endsection
