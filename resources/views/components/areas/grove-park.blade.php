<x-areas.wrapper>
    <x-slot:content>
        <h1 class="title is-size-5">Reliable and experienced driving instructor in Grove Park</h1>
        <p>
            Enjoyable driving lessons available in Grove Park, London SE12.
        </p>
        <p>If you'd like to make an enquiry please use the <a href="/contact" class="has-text-weight-bold">contact
                form</a>. You can
            also
            call/text/whatsapp during office hours or email anytime. I usually
            reply straight away and always within a few hours.</p>
        <p>I will try to reply to missed calls but please do leave a short voicemail if I don't answer.</p>

        <p>The nearest driving test centre is <a href="/tests/routes/bromley">Bromley</a>. The waiting list for tests at
            Bromley is quite long, so another
            option
            is <a href="/tests/routes/sidcup">Sidcup</a> or <a href="/tests/routes/west-wickham">West Wickham</a>.</p>

        <p>For further information please also read the <a href="/faq">Frequently asked questions</a> page.</p>

    </x-slot:content>

    <x-slot:case_study>
        <h2 class="tag title is-warning has-text-weight-bold is-size-5" id="staggered-crossroads">Driving lessons in Grove
            park
        </h2>
        <div class="columns">
            <div class="column is-three-fifths">
                <div class="content">
                    <p class="title is-size-6">How to deal with staggered junctions</p>
                    <p>
                        Taking driving lessons in Grove Park will involve navigating the staggered crossroads outside
                        Grove Park Station.
                        You will need to learn to deal with narrow lanes, filter lights and box junctions.
                    </p>
                    <figure class="mb-0">
                        <img src="{{ asset('/img/graphics/box-junction.jpg') }}"
                            alt="box junction image from highway code" style="max-width:300px;">
                    </figure>
                    <details class="has-text-centered cursor-pointer mb-2">
                        <summary class="has-text-weight-bold">When may you enter a box junction?</summary>
                        <p>When your exit road is clear</p>
                    </details>
                    <p>When driving ahead on Baring road leave space from the vehicle in front, be mindful of the box
                        junctions and only enter when you can see that the road ahead is clear. Check behind before
                        stopping.</p>
                    <p>Look out for filter lights which may indicate you can travel in a specific direction.</p>
                    <p>Underneath the traffic light there may be mandatory signs telling you which directions are
                        allowed.</p>
                    <p class="has-text-weight-bold">Lewisham speed limits</p>
                    <figure class="has-text-centered">
                        <img src="{{ asset('/img/road-signs/prohibitory/speed-limit-20.webp') }}"
                            alt="S speed limit sign" class="image">
                        <figcaption>All Lewisham roads are 20mph, except Red Routes where the speed limit is controlled
                            by
                            TFL</figcaption>
                    </figure>

                </div>
            </div>
            <div class="column">

                <figure class="has-text-centered mb-2">
                    <img src="{{ asset('/img/road-signs/traffic-lights/filter.png') }}"
                        alt="A filter light found at Grove Park" class="image">
                    <figcaption>Straight ahead filter light</figcaption>
                </figure>

                <figure class="has-text-centered mb-2">
                    <img src="{{ asset('/img/road-signs/warnings/staggered-junction.png') }}"
                        alt="A staggered junction sign" class="image">
                    <figcaption>Warning - Staggered crossroads</figcaption>
                </figure>

                <figure class="has-text-centered mb-4">
                    <img src="{{ asset('/img/driving-images/regulatory-signs/go-left.png') }}" alt="A go left sign"
                        class="image">
                    <figcaption>Mandatory signs</figcaption>
                </figure>


            </div>
        </div>
    </x-slot:case_study>
</x-areas.wrapper>
