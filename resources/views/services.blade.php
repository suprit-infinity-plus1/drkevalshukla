@extends('layouts.master')
@section('title', 'Our Services')
@section('content')
    <div class="main-container">
        <div class="title-section dark-bg">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>Our Services</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Services</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/service-1.png') }}" alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="{{ route('single-service') }}" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="{{ route('single-service') }}">Lorem, ipsum dolor.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/service-2.png') }}" alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="{{ route('single-service') }}" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="{{ route('single-service') }}">Lorem, ipsum.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/service-3.png') }}" alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="{{ route('single-service') }}" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="{{ route('single-service') }}">Lorem, ipsum dolor.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/service-4.png') }}" alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="{{ route('single-service') }}" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="{{ route('single-service') }}">Lorem, ipsum dolor.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}" alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="{{ route('single-service') }}" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="{{ route('single-service') }}">Lorem, ipsum.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}" alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="{{ route('single-service') }}" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="{{ route('single-service') }}">Lorem, ipsum dolor.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
            </div>
        </div>

    </div>
    <!-- Main Container /-->

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

    <!-- Including Jquery so All js Can run -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- Including Foundation JS so Foundation function can work. -->
    <script src="assets/js/foundation.min.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- Carousel JS -->
    <script src="assets/js/owl.carousel.min.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- TwentyTwenty After Before -->
    <script src="assets/js/jquery.event.move.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>
    <script src="assets/js/jquery.twentytwenty.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- Webful JS -->
    <script src="assets/js/template.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="a15dc910695ef2a5609702cf-|49" defer></script>
    </body>

@endsection
