@extends('layouts.front')

@section('content')
    <!-- Title Bar End-->
    <x-PageHero title="About Us" />
    <!-- Title Bar End-->
    <!-- About Start -->
    <x-about-section />
    <!-- About End -->

    <!-- Ihbox -->
    <x-steps />
    <!-- Ihbox End -->

    <!-- Team start -->
    <x-team-section />
    <!-- Team stop -->

    <!-- Testimonial Interactive -->
    <x-testimonial-inter />
    <!-- Testimonial Interactive -->
@endsection
