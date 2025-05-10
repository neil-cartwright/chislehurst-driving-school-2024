@inject('carbon', 'Carbon\Carbon')

<div class="has-text-grey-lighter admin-menu">
    <div class="menu ">
        <!-- customers -->
        <p class="menu-label">Customers <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span>
        </p>
        <ul class="menu-list ">
            <li>
                <span class="icon">
                    <i class="fa fa-plus"></i>
                </span>
                <a class="{{ request()->routeIs('admin.customers.create') ? 'is-active' : '' }}"
                    href="/admin/customer/create" class="menu-item">Add a customer</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fas fa-envelope"></i>
                </span>
                <a class="{{ request()->routeIs('admin.customers') ? 'is-active' : '' }}" href="/admin/customers"
                    class="level-item">All customers
                </a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.customers.search') ? 'is-active' : '' }}"
                    href="/admin/customers/customer/search" class="level-item">Search customers</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.customers.archive') ? 'is-active' : '' }}"
                    href="/admin/customers/archive/archive" class="level-item">Archive</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.customers.test_passes') ? 'is-active' : '' }}"
                    href="/admin/customers/archive/test-passes" class="level-item">Test passes</a>
            </li>

            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.customers.tests.index') ? 'is-active' : '' }}"
                    href="/admin/customers/tests/index" class="level-item">Test bookings</a>
            </li>
        </ul>
    </div>

    <div class="menu ">
        <!-- lessons -->
        <p class="menu-label is-clickable">Lessons <span class="icon is-hidden-tablet"><i
                    class="fa fa-caret-down"></i></span></p>
        <ul class="menu-list">
            <li>
                <span class="icon">
                    <i class="fas fa-save"></i>
                </span>
                <a class="{{ request()->routeIs('admin.lessons.create') ? 'is-active' : '' }}"
                    href="/admin/lesson/create" class="level-item">Save a lesson</a>
            </li>
            <li>
                <span class="icon"><i class="far fa-clipboard"></i></span>
                <a class="{{ request()->routeIs('admin.lessons') || request()->routeIs('admin') ? 'is-active' : '' }}"
                    href="/admin/lessons" class="level-item">All lessons </a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.lessons.find') ? 'is-active' : '' }}" href="/admin/lessons/find"
                    class="level-item">Find lesson</a>
            </li>

        </ul>
    </div>

    <!-- admin -->
    <div class="menu ">
        <p class="menu-label">Costs <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span></p>
        <ul class="menu-list">
            <li>
                <span class="icon">
                    <i class="fa fa-plus"></i>
                </span>
                <a class="{{ request()->routeIs('admin.cost.create') ? 'is-active' : '' }}"
                    href="/admin/cost/create">Add a cost</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-minus"></i>
                </span>
                <a class="{{ request()->routeIs('admin.costs') ? 'is-active' : '' }}" href="/admin/costs">All costs</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.costs.find') ? 'is-active' : '' }}"
                    href="/admin/costs/find">Find costs</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.costs.timeFrame') ? 'is-active' : '' }}"
                    href="/admin/costs/show/{{ $carbon::now()->format('m') }}/{{ $carbon::now()->format('Y') }}">Monthly
                    costs</a>
            </li>
            <li>
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
                <a class="{{ request()->routeIs('admin.costs.averages') ? 'is-active' : '' }}"
                    href="/admin/costs/averages/2024">Monthly
                    averages</a>
            </li>
        </ul>
    </div>

    <div class="menu mb-4">
        <p class="menu-label">Sheets <span class="icon is-hidden-tablet"><i class="fa fa-caret-down"></i></span></p>
        <ul class="menu-list">
            <li class="is-block">
                <span class="is-flex is-align-items-center">
                    <span class="icon">
                        <i class="far fa-clipboard"></i>
                    </span>
                    <a class="has-dropdown-menu">Print</a>
                </span>
                <ul class="is-dropdown-menu">
                    <li>
                        <a href="/admin/records/new-customer">New customer</a>
                    </li>
                    <li>
                        <a href="/admin/records/driving-test-report">Driving test</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

@push('scripts-after')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuLabel = document.querySelectorAll('.admin-menu .menu-label');
            const menuList = document.querySelectorAll('.admin-menu .menu-list');


            menuList.forEach((item) => {
                item.classList.add('is-hidden-mobile');
            })

            menuLabel.forEach((item) => {
                item.addEventListener('click', function() {
                    this.nextSibling.classList.toggle('is-hidden-mobile')
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
