@extends('frontend.main_master')
@section('main')

@section('title')
Home | EasyLearning Website
@endsection

    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')
    <!-- about-area-end -->

    <!-- services-area -->

    <!-- services-area-end -->

    <!-- work-process-area -->

    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    @include('frontend.home_all.portfolio')
    <!-- portfolio-area-end -->

    <!-- partner-area -->

    <!-- partner-area-end -->

    <!-- testimonial-area -->

    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @include('frontend.home_all.home_blog')
    <!-- blog-area-end -->

    <!-- contact-area -->

    <!-- contact-area-end -->

@endsection
