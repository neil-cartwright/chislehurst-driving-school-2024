<p class="menu-label">Learning to drive</p>
<ul class="menu-list">

    @auth
        <li><a href="{{ route('user.lessons') }}" class="is-flex is-align-items-center">
                <span class="icon mr-4">
                    <i class="fa fa-user has-text-grey-lighter"></i>
                </span>
                <span>My lessons</span></a>
        </li>
    @endauth

    <li><a href="/driving-lessons" class="is-flex is-align-items-center">
            <span class="icon mr-4">
                <i class="fa fa-th has-text-warning"></i>
            </span>
            <span>Driving lessons</span></a>
    </li>
    <li><a href="/quiz/junctions" class="is-flex is-align-items-center">
            <span class="icon mr-4">
                <i class="fa fa-graduation-cap has-text-success"></i>
            </span>Quizzes</a>
    </li>
    <li><a href="/signs" class="is-flex is-align-items-center">
            <span class="icon mr-4">
                <i class="fa fa-question-circle has-text-dark"></i>
            </span>Signs</a>
    </li>
    <li><a href="https://chislehurstdrivingschool.theorytestpro.co.uk/students/new"
            class="is-flex is-align-items-center">
            <span class="icon mr-4"><i class="fa fa-graduation-cap has-text-info"></i></span>Theory
            test
            pro</a>
    </li>
    <li><a href="/tests/routes/sidcup" class="is-flex is-align-items-center">
            <span class="icon mr-4"><i class="fa fa-map has-text-primary"></i></span>
            Driving test routes</a></li>
    <li><a href="/news" class="is-flex is-align-items-center">
            <span class="icon mr-4"><i class="fa-solid fa-newspaper has-text-grey-lighter"></i></span>
            News</a></li>
    <li><a href="/reviews" class="is-flex is-align-items-center">
            <span class="icon mr-4">
                <i class="fa-solid fa-bullhorn"></i>
            </span>
            <span>Customer reviews</span></a>
    </li>
    <li><a target="_blank" href="https://www.sabre-roads.org.uk/" class="is-flex is-align-items-center">
            <span class="icon mr-4">
                <i class="fa-solid fa-road has-text-grey-lighter"></i>
            </span>
            <span>Sabre Roads</span></a>
    </li>
</ul>
