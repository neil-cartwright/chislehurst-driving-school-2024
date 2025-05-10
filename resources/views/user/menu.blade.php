<div class="has-text-grey-lighter dashboard-menu">
    @auth
        <div class="menu">
            <!-- lessons -->
            <p class="menu-label">Lessons <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span></p>
            <ul class="menu-list">
                <li>
                    <span class="icon">
                        <i class="fa fa-user"></i>
                    </span>
                    <a class="{{ request()->routeIs('user.lessons') ? 'is-active' : '' }}" href="/user/lessons"
                        class="menu-item">Lessons</a>
                </li>
            </ul>
        </div>

        <!-- handouts -->
        <div class="menu">
            <p class="menu-label">Resources <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span></p>
            <ul class="menu-list">
                <li>
                    <span class="icon">
                        <i class="fa-solid fa-paperclip"></i>
                    </span>
                    <a class="{{ request()->routeIs('handouts') ? 'is-active' : '' }}" href="/handouts"
                        class="level-item">Handouts</a>
                </li>
                <li>
                    <span class="icon"><i class="far fa-book"></i></span>
                    <a class="{{ request()->routeIs('text-books') ? 'is-active' : '' }}" href="/text-books"
                        class="level-item">Text books</a>
                </li>
                <li> <span class="icon"><i class="far fa-car"></i></span>
                    <a class="{{ request()->routeIs('driver-active') ? 'is-active' : '' }}" href="/driver-active">Driver
                        Active</a>
                </li>
            </ul>
        </div>

        <div class="menu">
            <!-- interactive -->
            <p class="menu-label">Interactive <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span>
            </p>
            <ul class="menu-list">
                <li>
                    <span class="icon">
                        <i class="fa fa-search"></i>
                    </span>
                    <a href="/quiz">Quizzes</a>
                </li>
                <li>
                    <span class="icon">
                        <i class="fa fa-sign"></i>
                    </span>
                    <a href="/signs/bus-and-cycle-signs">Signs
                    </a>
                </li>
                <li>
                    <span class="icon">
                        <i class="fa fa-video"></i>
                    </span>
                    <a class="{{ request()->routeIs('videos') ? 'is-active' : '' }}" href="/videos">Videos</a>
                </li>
            </ul>
        </div>


        <div class="menu">
            <p class="menu-label">External sites <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span>
            </p>
            <ul class="menu-list">

                <li><a target="_blank" href="https://app.theorytestpro.co.uk/login">Theory Test Pro</a>
                </li>
            </ul>
        </div>
    @endauth

    <div class="menu">
        <p class="menu-label">Test routes <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span>
        </p>
        <ul class="menu-list">
            <li class="is-block">
                <span class="is-flex is-align-items-center">
                    <span class="icon">
                        <i class="far fa-map"></i>
                    </span>
                    <a class="has-dropdown-menu {{ request()->routeIs('test.routes') ? 'has-text-weight-bold' : '' }} ">Test
                        Centre</a>
                </span>
                <ul class="is-dropdown-menu">
                    <li>
                        <a class="{{ request()->segment(count(request()->segments())) == 'sidcup' ? 'is-active' : '' }}"
                            href="/tests/routes/sidcup">Sidcup</a>
                    </li>
                    <li>
                        <a
                            class="{{ request()->segment(count(request()->segments())) == 'bromley' ? 'is-active' : '' }}"href="/tests/routes/bromley">Bromley</a>
                    </li>
                    <li>
                        <a class="{{ request()->segment(count(request()->segments())) == 'hither-green' ? 'is-active' : '' }}"
                            href="/tests/routes/hither-green">Hither Green</a>
                    </li>
                    <li>
                        <a class="{{ request()->segment(count(request()->segments())) == 'west-wickham' ? 'is-active' : '' }}"
                            href="/tests/routes/west-wickham">West Wickham</a>
                    </li>
                    <li>
                        <a class="{{ request()->segment(count(request()->segments())) == 'erith' ? 'is-active' : '' }}"
                            href="/tests/routes/erith">Erith</a>
                    </li>
                    <li>
                        <a class="{{ request()->segment(count(request()->segments())) == 'sevenoaks' ? 'is-active' : '' }}"
                            href="/tests/routes/sevenoaks">Sevenoaks</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="menu is-hidden">
        <p class="menu-label">Routes App</p>
        <ul class="menu-list">
            <li><a href="/routes-app/sidcup">Sidcup Routes app</a></li>
        </ul>
    </div>
</div>

@push('scripts-after')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuLabel = document.querySelectorAll('.dashboard-menu .menu-label');
            const menuList = document.querySelectorAll('.dashboard-menu .menu-list');


            menuList.forEach((item) => {
                item.classList.add('is-hidden-mobile');
            })

            menuLabel.forEach((item) => {
                item.addEventListener('click', function() {
                    this.nextSibling.classList.toggle('is-hidden-mobile');
                    this.classList.toggle('is-active')
                    let caret = this.querySelector('.fa');
                    if (caret.classList.contains('fa-caret-down')) {
                        caret.classList.remove('fa-caret-down');
                        caret.classList.add('fa-caret-up')
                    } else {
                        caret.classList.remove('fa-caret-up')
                        caret.classList.add('fa-caret-down')
                    }
                })
            })
        });
    </script>
@endpush
