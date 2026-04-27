@inject('carbon', 'Carbon\Carbon')

<footer class="footer mt-auto has-background-light">
    <div class="columns">
        <div class="column is-4">
            <div class="menu">
                <p class="menu-label">Contact</p>
                <ul class="menu-list">
                    <li><a href="mailto:neil@chislehurstdrivingschool.co.uk" class="navbar-item font-body">
                            <span class="icon is-medium">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span>neil@chislehurstdrivingschool.co.uk</span></a></li>
                    <li> <a href="tel:07917042740" class="navbar-item font-body">
                            <span class="icon is-medium">
                                <i class="fas fa-phone"></i>
                            </span>
                            <span>
                                07917 042 740
                            </span></a></li>
                </ul>
            </div>
        </div>

        @guest
            <div class="column is-4">
                <div class="menu">
                    <p class="menu-label">Site links</p>
                    <ul class="menu-list">
                        <li><a class="has-background-light" href="/driving-lessons">Driving lessons</a></li>
                        <li><a class="has-background-light" href="/contact">Contact</a></li>
                        <li><a class="has-background-light" href="/prices">Prices</a></li>
                        <li><a class="has-background-light" href="/news">News</a></li>
                    </ul>
                </div>
            </div>
        @endguest
    </div>

    <hr>

    <div class="content has-text-centered mt-6">
        <p class="font-headings">
            &copy; Chislehurst Driving School. 2008 - {{ $carbon::now()->format('Y') }}
        </p>
    </div>

</footer>
