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
                            <img src="{{ asset('assets/images/help/blog/blog-brain-tumor.jpg') }}" class="card-img-top"
                                alt="Product Img">
                            <div class="card-body">
                                <h6 class="card-title blog-title">
                                    <a href="{{ route('blog-brain-tumors') }}" class="text-decoration-none text-dark">
                                        What Are Brain Tumors?
                                    </a>
                                </h6>
                                <div class="blog-description-wrapper">
                                    <p class="blog-description">
                                        Brain tumors are abnormal growths within the brain that can be either benign or
                                        malignant. Understanding their causes, symptoms like headaches or seizures, and
                                        treatment options such as surgery, radiation, or chemotherapy is essential for early
                                        diagnosis and effective care.
                                    </p>
                                    <a href="{{ route('blog-brain-tumors') }}" class="blog-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset('assets/images/help/blog/blog-spine-surgery.jpg') }}" class="card-img-top"
                                alt="Product Img">
                            <div class="card-body">
                                <h6 class="card-title blog-title">
                                    <a href="{{ route('blog-spine-surgery') }}" class="text-decoration-none text-dark">
                                        Treating Spine Tumors Safely
                                    </a>
                                </h6>
                                <div class="blog-description-wrapper">
                                    <p class="blog-description">
                                        Spinal cord tumors can affect movement, sensation, and even bladder control. Thanks
                                        to advances in imaging and microsurgical techniques, neurosurgeons can now remove
                                        many of these tumors with high precision, reducing risks and improving quality of
                                        life.
                                    </p>
                                    <a href="{{ route('blog-spine-surgery') }}" class="blog-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset('assets/images/help/blog/blog-open-brain.jpg') }}" class="card-img-top"
                                alt="Product Img">
                            <div class="card-body">
                                <h6 class="card-title blog-title">
                                    <a href="{{ route('blog-open-brain-surgery') }}" class="text-decoration-none text-dark">
                                        Awake Surgery for Brain Tumors
                                    </a>
                                </h6>
                                <div class="blog-description-wrapper">
                                    <p class="blog-description">
                                        Awake brain surgery allows surgeons to operate while the patient is conscious,
                                        helping preserve critical functions like speech and movement. It’s especially useful
                                        for tumors located near vital brain areas and offers greater surgical accuracy with
                                        reduced complications.


                                    </p>
                                    <a href="{{ route('blog-open-brain-surgery') }}" class="blog-readmore">Read More</a>
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
