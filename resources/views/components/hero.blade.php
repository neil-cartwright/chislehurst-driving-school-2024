@props(['area' => 'Chislehurst'])

<div class="hero is-relative">
    <img src="{{ asset('img/hero/professional-driving-lessons.webp') }}"
        alt="Driving Lessons in {{ ucfirst($area) }}, South East London">
    <a class="button button-cta font-body is-link animate__animated animate__pulse animate__repeat-3 animate__delay-2s"
        href="/contact">
        <span class="icon"><i class="fa-regular fa-calendar"></i></span>
        <span>Book a Driving Lesson</span></a>
</div>
