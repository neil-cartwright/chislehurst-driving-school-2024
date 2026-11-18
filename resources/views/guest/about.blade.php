@extends('layouts.app')

@section('title', 'About')

@section('description', 'About Neil from Chislehurst Driving School')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active"><a>About</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column is-6 mb-6">
                <div class="content">
                    <h1 class="title is-size-6">About</h1>

                    <figure class="m-2 is-pulled-right is-hidden-tablet" style="max-width:40%;">
                        <img src="{{ asset('/img/photos/neil-cartwright-portrait.webp') }}" alt="neil cartwright ADI">
                    </figure>
                    <p>Chislehurst Driving School doesn't have a team of driving instructors. It's just me. I live in
                        Chislehurst with my wife and
                        daughter.</p>
                    <p class="has-text-weight-bold">History</p>
                    <p>I've been a fully qualified driving instructor since 2004. I started out working for Lanes, in
                        Bromley. I
                        then quickly moved on to working for the AA Driving School before establishing my own driving school
                        in
                        Charlton and then in Chislehurst, South East London.</p>
                    <p>I have experience of teaching people to drive who are profoundly deaf, although my BSL skills are
                        somewhat rusty. I've also taken part in training from the QEF Foundation, which is now sadly
                        closing.
                    </p>
                    <p>Before becoming a driving instructor I had lots of different driving jobs, including driving 7&#189;
                        ton trucks
                        as a parcel courier.</p>
                    <p>I have a full motorcycle licence and have passed RoSPA and IAM Driving tests. </p>
                    <p>I once drove across Australia, which took about a month, from Perth to Brisbane via Sydney, in a
                        Mitsubishi
                        L300 van.</p>
                    <p class="has-text-weight-bold">Being an <abbr title="Approved Driving Instructor">ADI</abbr></p>
                    <p>My favourite part of the job, and one of the great things about teaching in London, is
                        getting to know
                        interesting people from different
                        backgrounds and helping them develop what can be a completely life-changing skill. </p>
                    <p>It's especially rewarding to help someone learn to drive who <span class="is-italic">really</span>
                        needs
                        their licence, for example, to help to get a new job somewhere. </p>
                    <p>My least favourite part of the job is currently the testing process. Since Covid it's become quite
                        challenging to
                        prepare and motivate people for tests with such long waiting times. Hopefully the DVSA will improve
                        the situation soon.
                    </p>

                    <p class="has-text-weight-bold">Timeline</p>
                    <ul>
                        <li>1992 Passed driving test in Loughton, Essex</li>
                        <li>1996 Graduated Middlesex University</li>
                        <li>1997-2001 Travelled Australia, India and UK</li>
                        <li>2004 Qualified as Approved Driving Instructor</li>
                        <li>2005 Worked with Lanes Driving School in Bromley</li>
                        <li>2006 Worked with AA Driving School in Greenwich and Lewisham</li>
                        <li>2008 Started Charlton Driving School in South East London</li>
                        <li>2009 Joined Institute of Advanced Motorists</li>
                        <li>2010 Obtained RoSPA (silver) award. I also helped to form SELKent Driving Instructor Association
                        </li>
                        <li>2011 Passed Full Motorcycle test in Erith</li>
                        <li>2012 Queen Elizabeth Foundation: Teaching disabled drivers and drivers with Special Driver
                            Educational
                            needs. Also began learning BSL.</li>
                        <li>2014 Started Chislehurst Driving School</li>
                        <li>2019 DVSA Grade A Check test</li>
                        <li>2022 also working as Front end web developer in Richmond</li>
                    </ul>
                    <p>I currently work full-time as a driving instructor.</p>
                </div>

            </div>
            <div class="column is-3">
                <figure class="has-text-centered mb-4 is-hidden-mobile">
                    <img src="{{ asset('/img/photos/neil-cartwright-portrait.webp') }}" alt="neil cartwright ADI"
                        style="max-width:300px;">
                    <figcaption>Neil, ADI since 2004</figcaption>
                </figure>
                <figure class="has-text-centered mb-4">
                    <img src="{{ asset('/img/photos/neil-kinder-scout.webp') }}" alt="neil at kinder scount"
                        style="max-width:300px;">
                    <figcaption>I like driving but prefer walking</figcaption>
                </figure>
                <figure class="has-text-centered">
                    <img src="{{ asset('/img/photos/neil-sydney-harbour.jpg') }}" alt="neil at sydney harbour bridge"
                        style="max-width:300px;">
                    <figcaption>I drove across Australia in 2001</figcaption>
                </figure>
            </div>
        </div>
    </x-wrapper>
@endsection
