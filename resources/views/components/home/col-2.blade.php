@inject('carbon', 'Carbon\Carbon')

<div class="content">

    <section class="notification">
        <h1 class="is-uppercase title is-size-6 has-text-weight-bold has-text-black-ter">
            An independent driving instructor based in Chislehurst
        </h1>
        <div>
            <p> <span class="has-text-weight-bold">Enjoyable and professional driving lessons</span> in Chislehurst,
                BR7 and across South East London,
                <span class="has-text-weight-light"> including: Petts Wood BR5, Bickley and Bromley BR1, Sidcup DA15,
                    Eltham, New Eltham and Mottingham SE9, Grove Park and Lee SE12. </span>
            </p>

            <p>
                I work with people <span class="has-text-weight-bold">of all ages and backgrounds</span>.
                I offer refresher driving lessons for
                people who have passed their driving test in the past in the UK or in other parts of the world.
            </p>

            <p>
                <span class="has-text-weight-bold">Reliable</span> and <span class="has-text-weight-bold">punctual</span>
                fully qualified instructor from just <span class="has-text-weight-bold">£38 per lesson</span>.
            </p>
            <p>
                <span class="has-text-weight-semibold">Parents</span> are welcome to sit
                in on lessons and see how things are progressing. You
                can also <a class="has-text-weight-semibold" href="/login">login </a>and keep track of progress and
                payments.
            </p>
            <p>I'm experienced with teaching drivers with ASD, ADHD, Dyslexia and Dyspraxia. I've been trained by the
                <a href="https://www.bbc.co.uk/news/articles/cdxr76929llo">
                    Queen
                    Elizabeth Foundation
                </a> and have some rusty BSL skills, having taught profoundly deaf drivers in the past.
            </p>
        </div>
    </section>

    <section class="notification" id="all-you-need">
        <h2 class="is-uppercase title is-size-6 has-text-weight-bold has-text-black-ter">
            Everything you need to pass your driving test
        </h2>
        <p>
            You can <span class="has-text-weight-bold"> keep track of your driving lessons online.</span> Login for
            course handouts, videos, driving lesson notes,
            quizzes and text
            books. All customers get full free access to
            <a href="https://www.theorytestpro.co.uk">Theory test pro</a>
        </p>
        <p class="has-text-weight-semibold">
            Lesson handouts and links are sent to you via email after your driving lessons.
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
    </section>

    <section class="notification is-hidden-mobile">
        <div class="columns is-vcentered">
            <div class="column is-two-thirds">
                <div>
                    <h2 class="title has-text-weight-bold is-size-6 is-uppercase">Structured driver training</h2>
                    <div class="is-italic">
                        &ldquo;My aim is to equip new drivers with the
                        essential skills they need to stay safe in a wide
                        variety of road and traffic conditions. It matters to me that lessons are enjoyable. They are
                        client-centered and
                        focused on achieving a predefined goal and on
                        gaining valuable driving experience.&rdquo;
                    </div>
                </div>
            </div>
            <div class="column">
                <figure class=" img-thumbnail mb-2">
                    <img src="{{ asset('img/photos/neil-cartwright-portrait.webp') }}"
                        alt="Neil Cartwright. Driving instructor in Chislehurst, South East London" class="image"
                        loading="lazy" />
                    <figcaption class="has-text-success is-flex is-justify-content-center">
                        Neil <span id="emoji"
                            class="has-text-warning is-inline-block has-text-weight-bold ml-2 rotate-90">: )</span>
                    </figcaption>
                </figure>
                <p class="is-italic has-text-centered is-size-7 has-text-weight-bold"><a href="/about">Find out
                        more</a></p>
            </div>
        </div>
    </section>

    <section class="notification is-hidden-mobile">
        <h2 class="title is-size-6 has-text-weight-bold is-uppercase">
            A Local Independent Instructor vs National Driving School?
        </h2>
        <p>
            Unlike large national or regional driving schools, local independent instructors don't have a huge marketing
            budget, so depend upon word of mouth recommendations and excellent customer care. <a href="/reviews"
                target="_blank">Read some recommendations here</a>
        </p>
        <p>Also, when you book with a local independent you will know who is going to be your instructor, whereas with a
            larger driving school you might not.</p>
        <p>Local independent instructors generally offer a similar service as larger driving schools, but with the
            added value of more teaching experience, great local knowledge and a flexible service, often at a
            lower
            cost.</p>
        <p class="has-text-centered"><a href="/contact" class="button is-link has-text-weight-bold">Book a lesson
                today!</a></p>
    </section>

    <section class="notification is-hidden-mobile">
        <h3 class="title is-size-6 has-text-weight-bold mb-2 is-uppercase">
            Practical driving test availability: {{ $carbon::now()->format('l jS M Y') }}
        </h3>
        <p>The current practical driving test waiting list is 22-24 weeks locally. Consider getting your theory test
            done as soon as possible. You cannot book a practical test until the
            theory test has been completed. Full theory test support is also provided during lessons. </p>
        <p>For more info please read the <a href="/faq" class="has-text-weight-bold">frequently asked
                questions</a>
            page.</p>
    </section>

</div>
