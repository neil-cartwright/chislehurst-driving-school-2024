@inject('carbon', 'Carbon\Carbon')

<main class="content">

    <div class="notification">
        <h1 class="is-uppercase title is-size-6 has-text-weight-bold has-text-black-ter">
            An independent driving school based in Chislehurst
        </h1>
        <div>
            <p> <span class="has-text-weight-bold">Experienced driving
                    instructor</span> in Chislehurst,
                BR7 and working across South East London,
                <span class="has-text-weight-light"> including: Petts Wood BR5, Bickley and Bromley BR1, Sidcup DA14,
                    Eltham, New Eltham and Mottingham SE9, Grove Park and Lee SE12. </span>
            </p>
            <p>
                <span class="has-text-weight-bold">Professional</span> and <span
                    class="has-text-weight-bold">enjoyable</span> driving lessons in an
                <span class="has-text-weight-bold">eco-friendly dual-controlled vehicle</span>.

            </p>

            <p>
                I work with people <span class="has-text-weight-bold">of all ages and backgrounds</span>.
                I also provide <span class="has-text-weight-bold">refresher lessons</span> for
                people who have passed their driving test in the past either in the UK or in other countries.
            </p>

            <p>
                <span class="has-text-weight-bold">Reliable</span> and <span
                    class="has-text-weight-bold">punctual</span>
                fully qualified instructor from just <span class="has-text-weight-bold">£40 per hour</span>.
            </p>
            <p>
                <span class="has-text-weight-semibold">Parents</span> are welcome to sit
                in on lessons and see how things are progressing. You
                can also <a class="has-text-weight-semibold" href="/login">login </a>and keep track of payments.
            </p>
        </div>
    </div>

    <div class="is-hidden-tablet mb-3">
        <recommendations-component></recommendations-component>
    </div>

    <div class="notification is-light" id="all-you-need">
        <h2 class="is-uppercase title is-size-6 has-text-weight-bold has-text-black-ter">
            Everything you need to pass your driving test
        </h2>
        <p>
            You can <span class="has-text-weight-bold"> keep track of your lessons online.</span> Login for
            course handouts, videos, lesson notes,
            quizzes and text
            books. All customers get full free access to
            <a href="https://www.theorytestpro.co.uk">Theory test pro</a>
        </p>
        <p class="has-text-weight-semibold">
            Lessons handouts and links are sent to you via email after your driving lessons.
        </p>

        <div class="flex-buttons">
            <a href="{{ url('/quiz/signs') }}" class="button has-text-weight-bold is-success is-flex-grow-1">
                <span class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <span>Driving quizzes</span>
            </a>
            <a href="/signs/warning-signs" class="button has-text-weight-bold is-warning is-flex-grow-1">
                <span class="icon">
                    <i class="fa fa-question-circle"></i>
                </span>
                <span>Learn the road signs</span>
            </a>
        </div>
    </div>

    <div class="notification">
        <figure class="image is-pulled-right img-thumbnail">
            <img src="{{ asset('img/photos/neil-cartwright-thumb.jpg') }}"
                alt="Neil Cartwright. Driving instructor in Chislehurst, South East London" class="image" />
            <figcaption class="has-text-success">
                Neil <span id="emoji" class="has-text-danger is-inline-block ml-2 rotate-90">: )</span>
            </figcaption>
        </figure>

        <div>
            <h2 class="title has-text-weight-bold is-size-6 is-uppercase">Structured driver training</h2>
            <p class="is-italic">

                &ldquo;My aim is to equip new drivers with the
                essential skills they need to stay safe in a wide
                variety of road and traffic conditions. Lessons are
                focused on achieving a predefined goal and on
                gaining valuable driving experience. A positive
                attitude towards other road users is strongly
                encouraged. Last year 17 out of 23 customers passed their test at the first attempt.&rdquo;
            </p>
        </div>
    </div>

    <div class="notification">
        <h2 class="title is-size-6 has-text-weight-bold is-uppercase">
            Eco friendly driving tuition vehicle
        </h2>
        <p>
            I use a manual gearbox Skoda Fabia training vehicle. It has stop/start technology and has very low co2
            emmisions. The vehicle is dual controlled, with climate control air
            conditioning. The vehicle has lots of varied seating positions and is great for people of all shapes and
            sizes.
        </p>
    </div>

    <notification-component class="is-light">
        <p class="has-text-weight-bold mb-2">
            Practical driving test availability: {{ $carbon::now()->format('l jS M Y') }}
        </p>
        <p>The current practical driving test waiting list is 22-24 weeks locally. Consider getting your theory test
            done as soon as possible. You cannot book a practical test until the
            theory test has been completed. Full theory test support is also provided during lessons. </p>
        <p>For more info please read the <a href="/faq" class="has-text-weight-bold">frequently asked questions</a>
            page.</p>
    </notification-component>

</main>
