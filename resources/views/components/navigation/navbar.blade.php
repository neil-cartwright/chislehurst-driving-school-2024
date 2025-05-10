<nav class="navbar" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item font-headings is-size-4 is-size-6-mobile" href="{{ url('/') }}">
            <span class="icon is-large has-text-success mr-2">
                <i class="fas fa-road"></i>
            </span>
            Chislehurst Driving School
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
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
                    <span class="icon is-medium has-text-info">
                        <i class="fas fa-phone"></i>
                    </span>
                    <span>
                        07917 042 740
                    </span></a>
                <a href="mailto:neil@chislehurstdrivingschool.co.uk" class="navbar-item font-body ">
                    <span class="icon is-medium has-text-info">
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
                    <a href="{{ route('dashboard') }}" class="button is-info">
                        Dashboard
                    </a>

                </div>
            @endauth
            @guest
                <a href="/reviews" class="navbar-item ml-2">Reviews</a>
                <a href="/prices" class="navbar-item ml-2">Prices</a>
                <a href="/contact" class="navbar-item ml-2">

                    Contact</a>
            @endguest
            <hr class="is-hidden-desktop">
            <div class="navbar-item">
                <div class="buttons">
                    @guest
                        <a href="/login" class="button is-text">
                            Sign in
                        </a>
                    @endguest
                    @auth
                        <a href="/logout" class="button is-text">Sign out</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
