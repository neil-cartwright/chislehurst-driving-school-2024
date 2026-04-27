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
            </span>Quiz</a>
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
            Test routes</a></li>

    <li><a href="/reviews" class="is-flex is-align-items-center">
            <span class="icon mr-4">
                <i class="fa-solid fa-bullhorn"></i>
            </span>
            <span>Customer reviews</span></a>
    </li>

    <li><a href="/fails" class="is-flex is-align-items-center">
            <span class="icon mr-4 has-text-danger">
                <i class="fa-regular fa-circle-xmark"></i>
            </span>
            <span>Test fails</span></a>
    </li>

</ul>
