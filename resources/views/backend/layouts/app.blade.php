<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Orange-Bus</title>
    <meta name="Description" content="Gas-Station" />
    <meta name="Top-Tech" content="Gas-Station" />
    <meta name="keywords" content="Gas-Station" />
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    @include('backend.layouts.style')
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @endif
    @yield('styles')
</head>

<body>

    <div class="page">
        @include('backend.layouts.header')
        @include('backend.layouts.sidebar')
        <div class="main-content app-content">
            @if (session('success'))
            <div class="alert alert-success text-xl p-4">
                {{ session('success') }}
            </div>
        @endif
        
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </div>
        @include('backend.layouts.footer')
    </div>
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    @include('backend.layouts.script')
    @yield('script')
</body>

</html>
