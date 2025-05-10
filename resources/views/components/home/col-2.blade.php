@inject('carbon', 'Carbon\Carbon')

<div class="content">

    <notification-component class="is-warning">
        <p class="has-text-weight-bold mb-2">
            Driving lesson availability:
            {{ $carbon::now()->addHour()->format('jS F Y') }}
        </p>
        <p>
            Spaces are available for the end of May and June. If you'd like to enquire about booking driving lessons
            please email <a href="mailto:neil@chislehurstdrivingschool.co.uk"><span
                    style="word-break:break-word">neil@chislehurstdrivingschool.co.uk</span></a> or call/text on <a
                href="tel:07917042740">07917 042 740</a>.<br />
            I always reply to emails within 24 hours. If you call please leave a voicemail and I will call back asap.
        </p>
    </notification-component>

    <div class="notification">
        <h1 class="is-uppercase title is-size-6 has-text-weight-bold has-text-black-ter">
            An independent driving school based in Chislehurst
        </h1>
        <div>
            <p>
                <span class="has-text-weight-bold">Experienced driving instructor</span> in Chislehurst,
                BR7 and teaching across South East London,
                <span class="has-text-weight-light"> including: Petts Wood BR5, Bickley and Bromley BR1, Sidcup DA14,
                    Eltham, New Eltham and Mottingham SE9, Grove Park and Lee SE12. </span>
            </p>
            <p>
                <span class="has-text-weight-bold">Enjoyable</span> and <span
                    class="has-text-weight-bold">professional</span> driving lessons in an
                <span class="has-text-weight-bold">eco-friendly dual-controlled vehicle</span>.
            </p>

            <p>
                I work with people <span class="has-text-weight-bold">of all ages and backgrounds</span>.
                I also provide <span class="has-text-weight-bold">refresher lessons</span> for
                people who have passed their driving test in the past either in the UK or in other countries.
            </p>

            <p>
                <span class="has-text-weight-bold">Reliable</span> and <span
                    class="has-text-weight-bold">punctual</span> fully qualified instructor from just <span
                    class="has-text-weight-bold">£37 per hour</span>.
            </p>
            <p>
                <span class="has-text-weight-semibold">Parents</span> are welcome to sit
                in on lessons and see how things are progressing. You
                can also <a class="has-text-weight-semibold" href="/login">login </a>and keep track of payments.
            </p>
        </div>
    </div>


    <div class="notification is-light" id="all-you-need">
        <h6 class="is-uppercase title is-size-6 has-text-weight-bold has-text-black-ter">
            All you need to pass your driving test
        </h6>
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

    <notification-component class="is-warning">
        <p class="has-text-weight-bold mb-2">
            Practical driving test availability:
        </p>
        <p>The current practical driving test waiting list is 22-24 weeks locally. Consider getting your theory test
            done as soon as possible. You cannot book a practical test until the
            theory test has been completed. Full theory test support is also provided during lessons. <a
                href="https://www.gov.uk/government/speeches/car-practical-driving-test-waiting-times">Read the
                government statement regarding driving test waiting times</a> </p>
    </notification-component>

    <div class="box">
        <figure class="image is-pulled-right img-thumbnail is-hidden-mobile">
            <img src="{{ asset('img/photos/neil-cartwright-thumb.jpg') }}"
                alt="Neil Cartwright. Driving instructor in Chislehurst, South East London" class="image" />
            <figcaption class="has-text-success">
                Neil <span id="emoji" class="has-text-danger is-inline-block ml-2 rotate-90">: )</span>
            </figcaption>
        </figure>

        <div class="">
            <p>
                &ldquo;My aim is to equip new drivers with the
                essential skills they need to stay safe in a wide
                variety of road and traffic conditions. Lessons are
                focused on achieving a predefined goal and on
                gaining valuable driving experience. A positive
                attitude towards other road users is strongly
                encouraged. 90% of my customers pass their test on
                either the first or second attempt.&rdquo;
            </p>
        </div>
    </div>

    <div class="notification is-warning">
        <h6 class="title is-size-6 has-text-weight-bold is-uppercase">
            Eco friendly driving tuition vehicle
        </h6>
        <p>
            I use a nearly new manual gearbox Skoda Fabia training vehicle. It is
            equipped with stop/start technology and has very low co2
            emmisions. The vehicle is dual controlled, with climate control air
            conditioning. The vehicle has lots of varied seating positions and is great for people of all shapes and
            sizes. I use the same TomTom 52 Sat Nav as driving
            examiners on tests.
        </p>
    </div>
</div>
