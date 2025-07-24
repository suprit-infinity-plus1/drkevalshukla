@extends('layouts.master')
@section('title', 'Our Blogs')
@section('content')
    <div class="main-container">

        <div class="title-section dark-bg module">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>Our Blog Posts</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blogs</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>
        <!-- Title Section Ends /-->

        <div class="blog-section pb-5">
            <div class="container">
                <div class="section-title mb-5 text-center">
                    <h2>Our Blogs</h2>
                    <p>Our latest blog updates for the week.</p>
                </div>

                <div class="row g-4">
                    <!-- Blog Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset('assets/images/help/blog/blog-img-1.jpg') }}" class="card-img-top"
                                alt="Product Img">
                            <div class="card-body">
                                <h6 class="card-title blog-title">
                                    <a href="{{ route('single-post-page') }}" class="text-decoration-none text-dark">
                                        Lorem ipsum dolor sit amet.ndfsdkjfskdfhskjhk
                                    </a>
                                </h6>
                                <div class="blog-description-wrapper">
                                    <p class="blog-description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered some dummy text that goes on and on to test clamping properly.
                                    </p>
                                    <a href="{{ route('single-post-page') }}" class="blog-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset('assets/images/help/blog/blog-img-2.jpg') }}" class="card-img-top"
                                alt="Product Img">
                            <div class="card-body">
                                <h6 class="card-title blog-title">
                                    <a href="{{ route('single-post-page') }}" class="text-decoration-none text-dark">
                                        Lorem ipsum dolor sit amet.
                                    </a>
                                </h6>
                                <div class="blog-description-wrapper">
                                    <p class="blog-description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered some dummy content.
                                    </p>
                                    <a href="{{ route('single-post-page') }}" class="blog-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset('assets/images/help/blog/blog-img-3.jpg') }}" class="card-img-top"
                                alt="Product Img">
                            <div class="card-body">
                                <h6 class="card-title blog-title">
                                    <a href="{{ route('single-post-page') }}" class="text-decoration-none text-dark">
                                        Lorem ipsum dolor sit amet.
                                    </a>
                                </h6>
                                <div class="blog-description-wrapper">
                                    <p class="blog-description">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered some form of alteration in randomised words.
                                    </p>
                                    <a href="{{ route('single-post-page') }}" class="blog-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials /-->
    </div>
    <!-- Main Container /-->

    <!-- Move to Top Icon 
                         Remove to Not Display /-->
    <a href="#" id="top" title="Go to Top">
        <i class="fas fa-arrow-alt-circle-up"></i>
    </a>

    <!-- Page Preloader
                         Delete to Remove Preloader /-->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div><!-- Preloader /-->
@endsection