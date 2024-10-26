<header class="site-header header-style-1">
    <div class="pbmit-header-overlay">
        <div class="container">
            <div class="pbmit-pre-header-wrapper">
                <div class="d-flex justify-content-between">
                    <div class="pbmit-pre-header-left">
                        <ul class="pbmit-contact-info">
                            <li>
                                <a href="mailto:info@domain.com">
                                    <i class="pbmit-base-icon-envelope-solid"></i>info@codprez.com
                                </a>
                            </li>
                            <li>
                                <i class="pbmit-base-icon-location-dot-solid"></i>250 Main Street, 2nd Floor.
                                UG
                            </li>
                        </ul>
                    </div>
                    <div class="pbmit-pre-header-right">
                        <ul class="pbmit-contact-info">
                            <li>
                                <a href="tel:+2567720 32435">
                                    <i class="pbmit-base-icon-phone-volume-solid"></i>+256(0) 7720 32435
                                </a>
                            </li>
                        </ul>
                        <ul class="pbmit-social-links">
                            <li class="pbmit-social-li pbmit-social-facebook">
                                <a title="Facebook" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-twitter">
                                <a title="Twitter" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-twitter-x"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-linkedin">
                                <a title="LinkedIn" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-linkedin-in"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-instagram">
                                <a title="Instagram" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pbmit-header-height-wrapper">
            <div class="container">
                <div class="pbmit-main-header-area">
                    <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                        <div class="pbmit-logo-menuarea">
                            <div class="site-branding">
                                <h1 class="site-title">
                                    <a href="i{{ route('front') }}">
                                        <img class="logo-img" src="{{ asset('assets/images/logo.svg') }}"
                                            alt="Codprez">
                                    </a>
                                </h1>
                            </div>
                        </div>
                        <div class="site-navigation">
                            <nav class="main-menu navbar-expand-xl navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button">
                                        <i class="pbmit-base-icon-menu-1"></i>
                                    </button>
                                </div>
                                <div class="pbmit-mobile-menu-bg"></div>
                                <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                    <div class="pbmit-menu-wrap">
                                        <span class="closepanel">
                                            <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg"
                                                width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                <rect width="36" height="1"
                                                    transform="translate(0.707) rotate(45)"></rect>
                                                <rect width="36" height="1"
                                                    transform="translate(0 25.456) rotate(-45)"></rect>
                                            </svg>
                                        </span>
                                        <ul class="navigation clearfix">
                                            <li class="active">
                                                <a href="{{ route('front') }}">Home</a>
                                            </li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="{{ route('history') }}">Our History</a></li>
                                                    <li><a href="{{ route('team') }}">Team</a>
                                                    </li>
                                                    <li><a href="{{ route('faq') }}">Faq</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('events') }}">Events</a></li>
                                            <li><a href="{{ route('blog') }}">News</a></li>
                                            <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="pbmit-right-box d-flex align-items-center">
                            <div class="pbmit-header-search-btn">
                                <a href="#">
                                    <i class="pbmit-base-icon-search-1"></i>
                                </a>
                            </div>
                            <div class="pbmit-button-box">
                                <a href="{{ route('admissions') }}" class="pbmit-btn">
                                    <span>Admissions</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-img-animation-01 slider-a-pattern-02-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-02.png') }}" alt="">
    </div>
    <div class="pbmit-img-animation-02 slider-a-pattern-07-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-07.png') }}" alt="">
    </div>
    <div class="pbmit-img-animation-06 slider-a-pattern-05-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-05.png') }}" alt="">
    </div>
    <div class="pbmit-img-animation-06 slider-a-pattern-03-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-03.png') }}" alt="">
    </div>
    @yield('hero')
    <div class="pbmit-img-animation-02 slider-a-pattern-04-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-04.png') }}" alt="">
    </div>
    <div class="pbmit-img-animation-05 slider-a-pattern-01-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-01.png') }}" alt="">
    </div>
    <div class="pbmit-img-animation-02 slider-a-pattern-06-img">
        <img src="{{ asset('assets/images/pbmit-slider/slider-a-pattern-06.png') }}" alt="">
    </div>
</header>
