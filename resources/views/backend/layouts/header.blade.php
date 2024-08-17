<!-- app-header -->
<header class="app-header">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">
        <!-- Start::header-content-left -->
        <div class="header-content-left">
            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src={{asset("assets/images/logo22.png" )}} alt="logo" class="desktop-logo" />
                        <img src={{asset("assets/images/favicon.png")}}  alt="logo" class="toggle-logo" />
                        <img src={{asset("assets/images/logo12.png" )}} alt="logo" class="desktop-dark" />
                        <img src={{asset("assets/images/favicon.png")}}  alt="logo" class="toggle-dark" />
                    </a>
                </div>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="#"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-left -->
        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element header-search">
                <!-- Start::header-link -->
                <a href="#" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal"> <i
                        class="bx bx-search-alt-2 header-link-icon"></i> </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element country-selector">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    @if (App::getLocale() == 'ar')
                        <img src="{{ asset('assets/images/flags/egypt.png') }}" alt="img" class="rounded-circle" />
                </a>
            @else
                <img src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="img" class="rounded-circle" /> </a>
                @endif
                <!-- End::header-link|dropdow-toggle -->
                <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" datan-popper-placement="none">
                    @foreach ($available_locales as $locale_name => $available_locale)
                        @if ($available_locale === $current_locale)
                            <li class="dropdown-item">
                                <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>
                            </li>
                        @else
                            <li class="dropdown-item">
                                <a class="ml-1 underline ml-2 mr-2 d-flex align-items-center"
                                    href="{{ route('lang.switch', $available_locale) }}">
                                    <span>{{ $locale_name }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

            </div>

            <!-- Start::header-element -->
            <div class="header-element cart-dropdown">
                {{--  <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                    data-bs-toggle="dropdown">
                    <i class="bx bx-cart header-link-icon"></i> <span
                        class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->  --}}
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                            <span class="badge bg-success-transparent" id="cart-data">5 Items</span>
                        </div>
                    </div>
                    <div>
                        <hr class="dropdown-divider" />
                    </div>
                    <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src={{asset("assets/images/ecommerce/jpg/1.jpg")}}  alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3" />
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold"><a href="#">SomeThing
                                                Phone</a></div>
                                        <div>
                                            <span class="text-black mb-1">$1,299.00</span> <a href="#"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Metallic Blue</li>
                                            <li>6gb Ram</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src={{asset("assets/images/ecommerce/jp g/3.jpg")}} alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3" />
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold"><a href="#">Stop Watch</a>
                                        </div>
                                        <div>
                                            <span class="text-black mb-1">$179.29</span>
                                            <a href="#"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item">
                                            <li>Analog</li>
                                            <li><span class="badge bg-pink-transparent fs-10">Free
                                                    shipping</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src={{asset("assets/images/ecommerce/jp g/5.jpg")}} alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3" />
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold"><a href="#">Photo
                                                Frame</a></div>
                                        <div>
                                            <span class="text-black mb-1">$29.00</span> <a href="#"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Decorative</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src={{asset("assets/images/ecommerce/jpg/4.jpg")}} alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3" />
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold"><a href="#">Kikon
                                                Camera</a></div>
                                        <div>
                                            <span class="text-black mb-1">$4,999.00</span> <a href="#"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Black</li>
                                            <li>50MM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start cart-dropdown-item">
                                <img src={{asset("assets/images/ecommerce/jp g/6.jpg")}} alt="img"
                                    class="avatar avatar-sm avatar-rounded br-5 me-3" />
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-start justify-content-between mb-0">
                                        <div class="mb-0 fs-13 text-dark fw-semibold"><a href="#">Canvas
                                                Shoes</a></div>
                                        <div>
                                            <span class="text-black mb-1">$129.00</span> <a href="#"
                                                class="header-cart-remove float-end dropdown-item-close"><i
                                                    class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start justify-content-between">
                                        <ul class="header-product-item d-flex">
                                            <li>Gray</li>
                                            <li>Sports</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item border-top">
                        <div class="d-grid"><a href="#" class="btn btn-primary">Proceed to checkout</a></div>
                    </div>
                    <!-- if Cart is Empty show this  -->
                    <div class="p-5 empty-item d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-warning-transparent"> <i
                                    class="ri-shopping-cart-2-line fs-2"></i> </span>
                            <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                            <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                            <a href="#" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue
                                shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element notifications-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                    <i class="bx bx-bell header-link-icon"></i> <span
                        class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                        id="notification-icon-badge">5</span>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                            <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i
                                            class="ti ti-gift fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="#">Your Order Has Been Shipped</a>
                                        </p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Order
                                            No: 123456 Has Shipped To Your Delivery Address</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i
                                            class="ti ti-discount-2 fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="#">Discount Available</a></p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Discount
                                            Available On Selected Products</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-pink-transparent avatar-rounded"><i
                                            class="ti ti-user-check fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold"><a href="#">Account Has Been Verified</a>
                                        </p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Your
                                            Account Has Been Verified Sucessfully</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-warning-transparent avatar-rounded"><i
                                            class="ti ti-circle-check fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold">
                                            <a href="#">Order Placed <span class="text-warning">ID:
                                                    #1116773</span></a>
                                        </p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Order
                                            Placed Successfully</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="pe-2">
                                    <span class="avatar avatar-md bg-success-transparent avatar-rounded"><i
                                            class="ti ti-clock fs-18"></i></span>
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold">
                                            <a href="#">Order Delayed <span class="text-success">ID:
                                                    7731116</span></a>
                                        </p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Order
                                            Delayed Unfortunately</span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="d-grid"><a href="#" class="btn btn-primary">View All</a></div>
                    </div>
                    <!-- if No New Notifications  -->
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i
                                    class="ri-notification-off-line fs-2"></i> </span>
                            <h6 class="fw-semibold mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->

            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0"><img src={{asset("assets/images/faces/9.jpg")}}  alt="img" width="32"
                                height="32" class="rounded-circle" /></div>
                        <div class="d-sm-block d-none">
                            <p class="fw-semibold mb-0 lh-1"> ali nweshi </p>
                            {{--  <p class="fw-semibold mb-0 lh-1"> {{ auth()->guard('admin')->user()->name }} </p>  --}}
                            {{--  <span class="op-7 fw-normal d-block fs-11">Web Designer</span>  --}}
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li>
                        <a class="dropdown-item d-flex" href="#"><i
                                class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#"><i
                                class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                class="badge bg-success-transparent ms-auto">25</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex border-block-end" href="#"><i
                                class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#"><i
                                class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex border-block-end" href="#"><i
                                class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href="#"><i
                                class="ti ti-headset fs-18 me-2 op-7"></i>Support</a>
                    </li>
                    <li>
                        <form id="logout-form" action="" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item d-flex" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out
                        </a>
                    </li>

                </ul>
            </div>
            <!-- End::header-element -->

        </div>
        <!-- End::header-content-right -->
    </div>
    <!-- End::main-header-container -->
</header>
<!-- /app-header -->
