<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kidzieo Demo 01 – Kindergarten School HTML Template</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- CSS
   ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Base Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/shortcode.css') }}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- page wrapper -->
    <div class="page-wrapper" id="page">

        <!-- Header Main Area -->
        @include('layouts.header')
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">
            @yield('content')
        </div>
        <!-- page content End -->

        <!-- footer -->
        @include('layouts.footer')
        <!-- footer End -->

    </div>
    <!-- page wrapper End -->

    <!-- Search Box Start Here -->
    <div class="pbmit-search-overlay">
        <div class="pbmit-icon-close">
            <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
                viewBox="0 0 26.163 26.163">
                <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
            </svg>
        </div>
        <div class="pbmit-search-outer">
            <form class="pbmit-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
                <button type="submit"></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap">
        <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
  ============================================ -->
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- jquery Appear JS -->
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <!-- Numinate JS -->
    <script src="{{ asset('assets/js/numinate.min.js') }}"></script>
    <!-- Slick JS -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- Magnific JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- countdown JS -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- AOS -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- GSAP -->
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <!-- Scroll Trigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <!-- Magnetic -->
    <script src="{{ asset('assets/js/magnetic.js') }}"></script>
    <!-- Scripts JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- GSAP Animation -->
    <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
</body>

</html>
