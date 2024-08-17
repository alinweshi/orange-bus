<body>
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky cairo-font" id="sidebar">
        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header cairo-font">
            <a href="index.html" class="header-logo">
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu cairo-font">
                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="" class="side-menu__item active">
                            <i class="fas fa-home side-menu__icon"></i>
                            <span class="side-menu__label">{{ __('لوحة التحكم') }}</span>
                        </a>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-people-fill" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('المندوبين') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a></li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-duotone fa-solid fa-bus" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('الأتوبيسات') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="" class="side-menu__item">
                            <i class="bi bi-person-dash" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('الصلاحيات') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-duotone fa-solid fa-id-card" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('السائقين') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-people" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('الموظفين') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-clipboard-data" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('بيانات الرحلات') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="bi bi-phone" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('عملاء الموبايل') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-solid fa-van-shuttle" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('المحطات') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="#" class="side-menu__item">
                            <i class="fa-solid fa-briefcase" style="font-size: 1.5rem; margin-left: 10px;"></i>
                            <span class="side-menu__label">{{ __('الوظائف') }}</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="#">{{ __('المندوبين') }}</a></li>
                            <li class="slide"><a href="tables.html" class="side-menu__item">{{ __('اضافة') }}</a>
                            </li>
                            <li class="slide"><a href="forms.html" class="side-menu__item">{{ __('عرض') }}</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->
                </ul>
                <div class="slide-right" id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="m10.707 17.707 1.414-1.414L7.828 12l4.293-4.293-1.414-1.414L4 12z"></path>
                    </svg>
                </div>
            </nav>
            <!-- End::nav -->
        </div>
        <!-- End::main-sidebar -->
    </aside>
    <!-- End::app-sidebar -->

</body>
