@extends('frontend.layouts.app')
@section('content')
    <!-- ===== Hero Section Start ===== -->
    @include('frontend.home.hero', ['hero' => $hero])
    <!-- ===== Hero Section End ===== -->

    <!-- ===== Features Section Start ===== -->
    @include('frontend.home.features')
    <!-- ===== Features Section End ===== -->

    <!-- ===== About Section Start ===== -->
    @include('frontend.home.about')
    <!-- ===== About Section End ===== -->

    <!-- ===== Team Section Start ===== -->
    @include('frontend.home.team')
    <!-- ===== Team Section End ===== -->

    <!-- ===== Portfolio Section Start ===== -->
    @include('frontend.home.portfolio')
    <!-- ===== Portfolio Section End ===== -->

    <!-- ===== Testimonial Section Start ===== -->
    @include('frontend.home.testimonial')
    <!-- ===== Testimonial Section End ===== -->

    <!-- ====== Brands Section Start -->
    @include('frontend.home.brands')
    <!-- ====== Brands Section End -->

    <!-- ===== Pricing Section Start ===== -->
    @include('frontend.home.pricing')
    <!-- ===== Pricing Section End ===== -->

    <!-- ===== Blog Section Start ===== -->
    @include('frontend.home.blog')
    <!-- ===== Blog Section End ===== -->

    <!-- ===== Support Section Start ===== -->
    @include('frontend.home.support')
    <!-- ===== Support Section End ===== -->

    <!-- ===== CTA Section Start ===== -->
    @include('frontend.home.cta')
    <!-- ===== CTA Section End ===== -->
@endsection
