@extends('layouts.master')
@section('title', 'Dr. Keval Shukla | Blog-Details')
@section('content')

    <div class="main-container">

        <div class="title-section dark-bg module">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>Our Single Blog Posts</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">blog Detail</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>

        <section class="blog-post section-padding">
            <div class="container">
                <div class="row">
                    <!-- Blog Content -->
                    <div class="col-lg-9">
                        <div class="blog-detail-content">
                            {{-- <img src="{{ asset('assets/images/help/blog/blog-brain-tumor.jpg') }}" alt="Blog Image"
                                class="img-fluid rounded mb-4 w-100"> --}}
                            <img src="{{ asset($blog->cover_image) }}" alt="{{ $blog->title }}"
                                class="img-fluid rounded mb-4 w-100">

                            <h2 class="mb-3">{{ $blog->title }}</h2>
                            <p>Posted by {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}</p>

                            {!! $blog->description !!}


                        </div>
                    </div>

                    <!-- Related Blogs -->
                    <div class="col-lg-3">
                        <div class="related-blogs">
                            <h5 class="mb-4">Related Blogs</h5>

                            @foreach ($recentBlogs as $recent)
                                <div class="d-flex mb-4">
                                    <img src="{{ asset($recent->cover_image) }}" alt="Blog 1"
                                        class="img-fluid rounded me-3"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                    <div>
                                        <a href="{{ route('blog', $recent->blog_url) }}"
                                            class="mb-1">{{ str($recent->title)->limit(20) }}</a>
                                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">
                                            {{ str(strip_tags($recent->description))->limit(20) }}</p>
                                    </div>
                                </div>
                            @endforeach

                            <!-- <div class="d-flex mb-4">
                                <img src="{{ asset('assets/images/help/blog/blog-spine-surgery.jpg') }}" alt="Blog 1"
                                    class="img-fluid rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <a href="{{ route('blog-spine-surgery') }}" class="mb-1">Treating Spine Tumors
                                        Safely</a>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Spinal cord tumors can </p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <img src="{{ asset('assets/images/help/blog/blog-open-brain.jpg') }}" alt="Blog 2"
                                    class="img-fluid rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <a href="{{ route('blog-open-brain-surgery') }}" class="mb-1">Awake Surgery for
                                        Brain Tumors</a>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Awake brain surgery allows</p>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container ">
            <div class="bg-light p-4 rounded col-md-10 mx-auto mt-5">
                <h5 class="mb-3">Book an Appointment</h5>
                <form action="">
                    <input type="text" value="" placeholder="Full Name" class="form-control mb-3">
                    <input type="text" value="" placeholder="Phone Number" class="form-control mb-3">

                    <div class="row mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <select name="gender" id="gender" class="form-select">
                                <option value="" selected disabled>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <input type="number" value="" placeholder="Age" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <input type="date" class="form-control" name="appointment_date" placeholder="Select Date"
                                required>
                        </div>
                        <div class="col-sm-6">
                            <input type="time" class="form-control" name="appointment_time" placeholder="Select Time"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea id="Reason" class="form-control" rows="3" placeholder="Problem in Brief" required></textarea>
                    </div>

                    <a class="button secondary button-second">Send Message</a>
                </form>
            </div>
        </section>



    </div>

    <a href="#" id="top" title="Go to Top">
        <i class="fas fa-arrow-alt-circle-up"></i>
    </a>

    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>


@endsection

@section('extrajs')
@endsection
