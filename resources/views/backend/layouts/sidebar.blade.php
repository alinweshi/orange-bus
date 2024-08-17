<body>
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky cairo-font" id="sidebar">
        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header cairo-font">
            <a href="{{ route('backend.index') }}" class="header-logo">
                <img src="{{ asset('assets/images/company-logos/1.png') }}" alt="logo" class="desktop-logo" />
                <img src="{{ asset('assets/images/favicon.png') }}" alt="logo" class="toggle-logo" />
                <img style="width: 100%" src="{{ asset('assets/images/company-logos/1.png') }}" alt="logo"
                    class="desktop-dark" />
                <img src="{{ asset('assets/images/favicon.png') }}" alt="logo" class="toggle-dark" />
            </a>
        </div>
        <!-- End::main-sidebar-header -->
        <!-- Start::main-sidebar -->
        <div class="main-sidebar cairo-font" id="sidebar-scroll">
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open cairo-font">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu cairo-font">
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="{{ route('backend.index') }}" class="side-menu__item active">
                            <i class="fas fa-home side-menu__icon"></i>
                            <span class="side-menu__label">{{ __('Dashboard') }}</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    {{--
                    <!-- Start::slide__category -->
                    <li class="slide__category">
                        <span class="category-name">{{ __('Pages') }}</span>
                    </li>
                    <!-- End::slide__category --> --}}
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="{{ route('delegators.index') }}" class="side-menu__item">
                            <i class="bi bi-people-fill" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('delegators') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="{{ route('delegators.create') }}" class="side-menu__item">{{
                                    __('add') }}</a>
                            </li>
                            <li class="slide"><a href="{{ route('delegators.index') }}" class="side-menu__item">{{
                                    __('show') }}</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-duotone fa-solid fa-bus" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Buses') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="{{ route('buses.create') }}" class="side-menu__item">{{ __('add')
                                    }}</a>
                            </li>
                            <li class="slide"><a href="{{ route('buses.index') }}" class="side-menu__item">{{ __('show')
                                    }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="" class="side-menu__item">
                            <i class="bi bi-person-dash" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Roles') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>

                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-duotone fa-solid fa-id-card" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Drivers') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="{{route('drivers.create') }}" class="side-menu__item">{{
                                    __('add') }}</a>
                            </li>
                            <li class="slide"><a href="{{route('drivers.index') }}" class="side-menu__item">{{
                                    __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-people" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Employees') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-clipboard-data" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Trips Data') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>

                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-phone" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Mobile Customers') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>

                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="{{ route('mobile_customers.create') }}"
                                    class="side-menu__item">{{
                                    __('add') }}</a>
                            </li>
                            <li class="slide"><a href="{{ route('mobile_customers.index') }}" class="side-menu__item">{{
                                    __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-person-video3" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Card Customers') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>

                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="{{ route('card_customers.create') }}" class="side-menu__item">{{
                                    __('add') }}</a>
                            </li>
                            <li class="slide"><a href="{{ route('card_customers.index') }}" class="side-menu__item">{{
                                    __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-bell" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Sending Notifications') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-geo-alt-fill" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('show buses map') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-solid fa-route" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Buses distance') }}</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-sharp fa-solid fa-road" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Buses accommodation') }}</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-solid fa-star" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('App rate') }}</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-badge-ad-fill" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Ads') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>

                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->


                    <!-- End::slide -->

                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-clipboard-data" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Reports') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-person-bounding-box" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('My Profile') }}</span>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('My Profile') }}</a></li>
                            <li class="slide"><a href="#" class="side-menu__item">{{ __('My Profile') }}</a>
                            </li>
                            <li class="slide"><a href="#" class="side-menu__item">{{ __('Change Password') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-gear" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('Settings') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>

                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('add') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('show') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                </ul>
                <div class="slide-right" id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg>
                </div>
            </nav>
            <!-- End::nav -->
        </div>
        <!-- End::main-sidebar -->
    </aside>
    <!-- End::app-sidebar -->
</body>