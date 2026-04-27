<nav class="navbar" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item font-headings is-size-5 is-size-6-mobile " href="{{ url('/') }}">
            <span class="icon is-large has-text-success">
                <i class="fas fa-road"></i>
            </span>
            Chislehurst Driving School
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="main-navbar" class="navbar-menu">
        <div class="navbar-start">
            @admin
                <a href="{{ route('admin') }}" class="navbar-item">
                    <span class="icon is-large has-text-danger">
                        <i class="fas fa-lock"></i>
                    </span>
                    Admin
                </a>
            @endadmin


            @guest
                <a href="tel:07917042740" class="navbar-item font-body">
                    <span class="icon is-medium has-text-success is-hidden-desktop-only">
                        <i class="fas fa-phone"></i>
                    </span>
                    <span>
                        07917 042 740
                    </span></a>
                <a href="mailto:neil@chislehurstdrivingschool.co.uk" class="navbar-item font-body ">
                    <span class="icon is-medium has-text-success is-hidden-desktop-only">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span>neil@chislehurstdrivingschool.co.uk</span></a>
            @endguest
        </div>
        <div class="navbar-end">
            <hr class="is-hidden-desktop">

            <!--  -->

            @auth
                <div class="navbar-item">
                    <a href="{{ route('dashboard') }}" class="button is-link">
                        Dashboard
                    </a>

                </div>
            @endauth
            @guest
                <a href="/about" class="navbar-item ml-2">About</a>
                <a href="/faq" class="navbar-item ml-2">FAQ</a>
                <a href="/prices" class="navbar-item ml-2">Prices</a>
                <a href="/contact" class="navbar-item ml-2">Contact</a>

                <div class="navbar-item has-dropdown is-hoverable is-hidden-desktop-only">
                    <a class="navbar-link ml-2">
                        More
                    </a>
                    <div class="navbar-dropdown">
                        <a href="/reviews" class="navbar-item">Reviews</a>
                        <a href="/quiz" class="navbar-item">Quiz</a>
                        <a href="/signs/warning-signs" class="navbar-item">Signs</a>
                        <a href="/tests/routes" class="navbar-item ">Test routes</a>
                        <a href="/driving-lessons" class="navbar-item">Driving lessons</a>
                        <a href="/fails" class="navbar-item">Driving test fails</a>
                    </div>
                </div>
            </div>

        @endguest
        <hr class="is-hidden-desktop">
        <div class="navbar-item">
            <div class="buttons">
                @guest
                    <a href="/login" class="button is-success has-text-white has-text-weight-bold">
                        Sign in
                    </a>
                @endguest
                @auth
                    <a href="/logout" class="button is-text">Sign out</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
