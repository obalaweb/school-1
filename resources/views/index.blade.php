@extends('layouts.front')

@section('hero')
    <x-HomeHero />
@endsection

@section('content')
    <!-- Marquee -->
    <x-home-slider />
    <!-- Marquee end -->

    <!-- About Start -->
    <x-about-section />
    <!-- About End -->

    <!-- Age Group Box Start -->
    <x-age-group-section />
    <!-- Age Group Box End -->

    <!-- Program Style Start -->
    <x-program-list />
    <!-- Program Style End -->

    <!-- Why choose us Start -->
    <x-why-choose-us />
    <!-- Why choose us End -->

    <!-- Ihbox -->
    <x-steps />
    <!-- Ihbox End -->

    <!-- Gallery Style Start -->
    <x-gallery />
    <!-- Gallery Style End -->

    <!-- Fid Start -->
    <x-counter />
    <!-- Fid End -->

    <!-- Testimonial Start -->
    <x-testimonial />
    <!-- Testimonial End -->

    <!--Blog Start -->
    <x-post-list />
    <!--Blog End -->

    <!-- Partner Start -->
    <x-partner-list />
    <!-- Partner End -->
@endsection
