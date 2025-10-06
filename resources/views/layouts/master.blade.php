<!doctype html>
<html lang="en">

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- <title>Dr. Keval Shukla</title> --}}
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">

    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">


    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- FavIcon for Website /-->
    {{--
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/drkevalshukla-mainlogo.png') }}">

    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" media="all" />
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{--
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    --}}
    {{--
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}

    {{-- bootstrap 5.3 css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/css/bootstrap.min.css"
        integrity="sha512-72OVeAaPeV8n3BdZj7hOkaPSEk/uwpDkaGyP4W2jSzAC8tfiO4LMEDWoL3uFp5mcZu+8Eehb4GhZWFwvrss69Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/foundation.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-styles.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive-styles.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/twentytwenty-no-compass.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.min.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3TGX5NPBH2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3TGX5NPBH2');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3TGX5NPBH2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3TGX5NPBH2');
    </script>
</head>

<body>


    <div class="main-container">

        <div class="main-header" id="mainHeader">


            <div class="header">
                <div class="grid-container grid-x grid-padding-x">

                    <div class="small-12 large-3 medium-3 cell">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <!-- <h2 style="margin-bottom:0px;">
                                Dr. Keval Shukla
                            </h2> -->
                                <img src="{{ asset('assets/images/drkevalshukla-logo.png') }}"
                                    alt="Dr Keval Shukla Logo" />
                            </a>
                        </div>
                    </div><!-- Cell /  -->

                    <div class="small-12 large-9 medium-9 cell margin-auto">
                        <div class="info-container">
                            <div class="icon-box">
                                <div class="icon-side">
                                    <img src="{{ asset('assets/images/help/icons/tablet.png') }}" alt="icon" />
                                </div><!-- Icon Side /-->
                                <div class="info-side">
                                    <p><a href="tel:+91 9699915789">+91 9699915789</a><br>
                                        Book an Appointment
                                    </p>
                                </div><!-- Info Side /-->
                            </div>
                            <div class="icon-box">
                                <div class="icon-side">
                                    <img src="{{ asset('assets/images/help/icons/pointer.png') }}" alt="icon" />
                                </div><!-- Icon Side /-->
                                <div class="info-side">
                                    <p><strong>Wockhardt Hospital </strong><br>
                                        Agripada , Mumbai Centra
                                    </p>
                                </div><!-- Info Side /-->
                            </div>
                        </div><!-- Info Container /-->
                    </div><!-- Cell /  -->

                </div><!-- Grid Container /-->
            </div>
            <!-- Header /-->

            <div class="navigation">
                <nav class="navbar navbar-expand-lg navbar-white bg-white p-0" aria-label="Ninth navbar example">
                    <div class="container-xl">
                        <button class="navbar-toggler border-0 shadow-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL"
                            aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarsExample07XL" style="">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-4">
                                <li class="nav-item">
                                    <a class="nav-link p-2 p-lg-3 fw-semibold text-uppercase {{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 p-lg-3 fw-semibold text-uppercase {{ request()->routeIs('about') ? 'active' : '' }}"
                                        href="{{ route('about') }}">About</a>
                                </li>
                                {{-- DESKTOP ONLY (hover dropdown) --}}
                                <li class="nav-item dropdown d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle p-2 p-lg-3 fw-semibold text-uppercase
       {{ request()->is('services/*') ? 'active' : '' }}"
                                        href="{{ route('services') }}">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="{{ route('minimally-invasive-spine-surgeries') }}">Minimally
                                                Invasive Spine Surgeries
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('neuro-oncology') }}">Neuro
                                                Oncology
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('neuro-trauma') }}">Neuro
                                                Trauma</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('vascular-neurosurgery') }}">Vascular
                                                Neurosurgery</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('epilepsy-surgery') }}">Epilepsy
                                                Surgery</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('endoscopic-skull-base-surgery') }}">Endoscopic Skull
                                                Base
                                                Surgery</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('spine-surgery') }}">Spine
                                                Surgery</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('spine-surgery') }}">Brain
                                                Surgery</a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- MOBILE ONLY: Services text (link) + dropdown toggle (arrow) --}}
                                <li class="nav-item dropdown d-block d-lg-none">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center px-3 py-2">
                                        {{-- Left: Clickable text --}}
                                        <a href="{{ route('services') }}"
                                            class="col-11 fw-semibold text-uppercase text-decoration-none
            {{ request()->is('services') ? 'active' : '' }}">
                                            Services
                                        </a>

                                        {{-- Right: Dropdown toggle (only arrow) --}}
                                        <button class="col-1 dropdown-toggle text-dark text-decoration-none"
                                            data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                        </button>

                                        <ul class="col-12 dropdown-menu border-0">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('minimally-invasive-spine-surgeries') }}">Minimally
                                                    Invasive Spine Surgeries</a></li>
                                            <li><a class="dropdown-item" href="{{ route('neuro-oncology') }}">Neuro
                                                    Oncology
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{ route('neuro-trauma') }}">Neuro
                                                    Trauma</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('vascular-neurosurgery') }}">Vascular
                                                    Neurosurgery</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('epilepsy-surgery') }}">Epilepsy
                                                    Surgery</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('endoscopic-skull-base-surgery') }}">Endoscopic
                                                    Skull
                                                    Base
                                                    Surgery</a></li>
                                        </ul>
                                    </div>
                                </li>






                                <!-- <li class="nav-item">
                                <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('staff') ? 'active' : '' }}"
                                    href="{{ route('staff') }}">Our Staff</a>
                            </li> -->
                                <li class="nav-item">
                                    <a class="nav-link p-2 p-lg-3 fw-semibold text-uppercase {{ request()->routeIs('appointment') ? 'active' : '' }}"
                                        href="{{ route('appointment') }}">Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 p-lg-3 fw-semibold text-uppercase {{ request()->routeIs('blog') ? 'active' : '' }}"
                                        href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 p-lg-3 fw-semibold text-uppercase {{ request()->routeIs('contact') ? 'active' : '' }}"
                                        href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                        <div class="social-icons d-flex gap-3">
                            <a href="https://www.facebook.com/people/Dr-Keval-Shukla/61578950248122/"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/drkevalshukla/"><i class="fab fa-instagram"></i></a>
                            <a
                                href="https://in.linkedin.com/in/keval-shukla-b936076b?trk=public_post_follow-view-profile"><i
                                    class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>

            </div>
            <!-- navigation CSS Ends /-->
        </div>
        <div class="sticky-nav d-none position-sticky top-0 w-100 bg-white shadow-sm z-3" id="stickyHeader">


            <div class="header">
                <div class="grid-container grid-x grid-padding-x">

                    <div class="small-12 large-3 medium-3 cell">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <!-- <h2 style="margin-bottom:0px;">
                                Dr. Keval Shukla
                            </h2> -->
                                <img src="{{ asset('assets/images/drkevalshukla-logo.png') }}"
                                    alt="Dr Keval Shukla Logo" />
                            </a>
                        </div>
                    </div><!-- Cell /  -->

                    <div class="small-12 large-9 medium-9 cell margin-auto">
                        <div class="info-container">
                            <div class="icon-box">
                                <div class="icon-side">
                                    <img src="{{ asset('assets/images/help/icons/tablet.png') }}" alt="icon" />
                                </div><!-- Icon Side /-->
                                <div class="info-side">
                                    <p><a href="tel:+91 9699915789">+91 9699915789</a><br>
                                        Book an Appointment
                                    </p>
                                </div><!-- Info Side /-->
                            </div>
                            <div class="icon-box">
                                <div class="icon-side">
                                    <img src="{{ asset('assets/images/help/icons/pointer.png') }}" alt="icon" />
                                </div><!-- Icon Side /-->
                                <div class="info-side">
                                    <p><strong>Wockhardt Hospital </strong><br>
                                        Agripada , Mumbai Centra
                                    </p>
                                </div><!-- Info Side /-->
                            </div>
                        </div><!-- Info Container /-->
                    </div><!-- Cell /  -->

                </div><!-- Grid Container /-->
            </div>
            <!-- Header /-->

            <div class="navigation">
                <nav class="navbar navbar-expand-lg navbar-white bg-white p-0" aria-label="Ninth navbar example">
                    <div class="container-xl">
                        <button class="navbar-toggler border-0 shadow-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL"
                            aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarsExample07XL" style="">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-4">
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('about') ? 'active' : '' }}"
                                        href="{{ route('about') }}">About</a>
                                </li>
                                {{-- DESKTOP ONLY (hover dropdown) --}}
                                <li class="nav-item dropdown d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle p-3 fw-semibold text-uppercase
       {{ request()->is('services/*') ? 'active' : '' }}"
                                        href="{{ route('services') }}">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="{{ route('minimally-invasive-spine-surgeries') }}">Minimally
                                                Invasive Spine Surgeries
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('neuro-oncology') }}">Neuro
                                                Oncology
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('neuro-trauma') }}">Neuro
                                                Trauma</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('vascular-neurosurgery') }}">Vascular
                                                Neurosurgery</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('epilepsy-surgery') }}">Epilepsy
                                                Surgery</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('endoscopic-skull-base-surgery') }}">Endoscopic Skull
                                                Base
                                                Surgery</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('brain-surgery') }}">Brain
                                                Surgery</a></li>
                                        <li><a class="dropdown-item" href="{{ route('spine-surgery') }}">Spine
                                                Surgery</a></li>
                                    </ul>
                                </li>

                                {{-- MOBILE ONLY: Services text (link) + dropdown toggle (arrow) --}}
                                <li class="nav-item dropdown d-block d-lg-none">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center px-3 py-2">
                                        {{-- Left: Clickable text --}}
                                        <a href="{{ route('services') }}"
                                            class="col-11 fw-semibold text-uppercase text-decoration-none
            {{ request()->is('services') ? 'active' : '' }}">
                                            Services
                                        </a>

                                        {{-- Right: Dropdown toggle (only arrow) --}}
                                        <button class="col-1 dropdown-toggle text-dark text-decoration-none"
                                            data-bs-toggle="dropdown" aria-expanded="false" type="button">
                                        </button>

                                        <ul class="col-12 dropdown-menu border-0">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('minimally-invasive-spine-surgeries') }}">Minimally
                                                    Invasive Spine Surgeries</a></li>
                                            <li><a class="dropdown-item" href="{{ route('neuro-oncology') }}">Neuro
                                                    Oncology
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{ route('neuro-trauma') }}">Neuro
                                                    Trauma</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('vascular-neurosurgery') }}">Vascular
                                                    Neurosurgery</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('epilepsy-surgery') }}">Epilepsy
                                                    Surgery</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('endoscopic-skull-base-surgery') }}">Endoscopic
                                                    Skull
                                                    Base
                                                    Surgery</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('brain-surgery') }}">Brain
                                                    Surgery</a></li>
                                            <li><a class="dropdown-item" href="{{ route('spine-surgery') }}">Spine
                                                    Surgery</a></li>
                                        </ul>
                                    </div>
                                </li>






                                <!-- <li class="nav-item">
                                <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('staff') ? 'active' : '' }}"
                                    href="{{ route('staff') }}">Our Staff</a>
                            </li> -->
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('appointment') ? 'active' : '' }}"
                                        href="{{ route('appointment') }}">Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('blog') ? 'active' : '' }}"
                                        href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-semibold text-uppercase {{ request()->routeIs('contact') ? 'active' : '' }}"
                                        href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                        <div class="social-icons d-flex gap-3">
                            <a href="https://www.facebook.com/people/Dr-Keval-Shukla/61578950248122/"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/drkevalshukla/"><i class="fab fa-instagram"></i></a>
                            <a
                                href="https://in.linkedin.com/in/keval-shukla-b936076b?trk=public_post_follow-view-profile"><i
                                    class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>

            </div>
            <!-- navigation CSS Ends /-->
        </div>
        <div id="stickySpacer" style="height: 0;"></div>
        @yield('content')






        <div class="footer">

            <div class="call-to-action dark-bg grey-bg">

                <div class="grid-container grid-x grid-padding-x">

                    <div class="large-12 medium-12 small-12 cell">
                        <div class="call-to-action-text">
                            <img src="{{ asset('assets/images/help/icons/ribbon.png') }}" alt="Ribbon" />
                            <h2>Its For your Great Life!</h2>
                            <p>Advanced brain and spine care tailored to your lifestyle and goals.</p>
                            <a class="button button-second secondary" data-bs-toggle="modal"
                                data-bs-target="#appointmentModal">Fix an Appointment</a>
                        </div><!-- Form/-->
                    </div>

                </div><!-- Grid Container /-->

            </div><!-- Call To Action /-->

            <div class="footer-top grey-bg">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box footer-logo-side">
                                <a href="{{ route('index') }}">
                                    <h3>
                                        <!-- Dr. Keval Shukla -->
                                        <img src="{{ asset('assets/images/drkevalshukla-logo.png') }}"
                                            alt="Dr Keval Shukla Logo" />
                                    </h3>
                                </a>
                                <p>
                                    Dr. Keval Shukla is an experienced Brain and Spine surgeon with over 8 years of
                                    experience in this field. After completing his training, Dr. Keval has worked at a
                                    major corporate hospital in Mumbai .
                                </p>

                                <div class="social-icons">
                                    <ul class="menu">
                                        <li><a href="https://www.facebook.com/people/Dr-Keval-Shukla/61578950248122/"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/drkevalshukla/"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a
                                                href="https://in.linkedin.com/in/keval-shukla-b936076b?trk=public_post_follow-view-profile"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-box border-btm">
                                <h6>Quick Links</h6>
                                <ul class="links">
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('services') }}">Our Services</a></li>
                                    <li><a href="{{ route('appointment') }}">Appointment</a></li>
                                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div><!-- Footer Box /-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-box border-btm">
                                <h6>Services</h6>
                                <ul class="links">
                                    <li>
                                        <a href="{{ route('minimally-invasive-spine-surgeries') }}">Minimally
                                            Invasive Spine Surgeries
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('neuro-oncology') }}">Neuro Oncology
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('neuro-trauma') }}">Neuro Trauma</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('vascular-neurosurgery') }}">Vascular
                                            Neurosurgery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('epilepsy-surgery') }}">Epilepsy
                                            Surgery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('endoscopic-skull-base-surgery') }}">Endoscopic Skull Base
                                            Surgery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('brain-surgery') }}">
                                            BrainSurgery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('spine-surgery') }}">Spine
                                            Surgery
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- Footer Box /-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-box border-btm footer-logo-side">
                                <h6>Contact</h6>


                                <div class="contact-us">
                                    <ul>
                                        <li class="d-flex">
                                            <div>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <span>Address:</span>
                                            <div>
                                                <a href="#">


                                                    Wockhardt Hospitals, 1877, Mumbai Central, Mumbai -
                                                    400011</a>
                                            </div>
                                        </li>
                                        <li><i class="fas fa-mobile-alt"></i><a href="#"><span>Phone:</span>
                                                +91 9699915789</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="#"><span>Email:</span>
                                                keval242@gmail.com</a>
                                        </li>
                                    </ul>
                                    <div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15092.062996140385!2d72.8140650347248!3d18.974911857187383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce68931537f1%3A0xf7c810f37868e781!2sWockhardt%20Hospitals%2C%20Agripada%2C%20Mumbai%2C%20Maharashtra%20400011!5e0!3m2!1sen!2sin!4v1759745123556!5m2!1sen!2sin"
                                            height="150" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                {{-- <div class="social-icons">
                                    <ul class="menu">
                                        <li><a href="https://www.facebook.com/people/Dr-Keval-Shukla/61578950248122/"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/drkevalshukla/"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a
                                                href="https://in.linkedin.com/in/keval-shukla-b936076b?trk=public_post_follow-view-profile"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div><!-- Footer Box /-->
                        </div>


                        {{-- <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-box border-btm">
                                <h6>Recent News</h6>
                                <div class="footer-news-post">
                                    <div class="footer-news">
                                        <img style="width: 80px; height: 80px; object-fit: cover;"
                                            src="{{ asset('assets/images/help/blog/blog-brain-tumor.jpg') }}"
                                            alt="News" />
                                        <h2><a href="{{ route('blog-brain-tumors') }}">What Are Brain Tumors?</a>
                                        </h2>
                                        <p>29 July 2025</p>
                                    </div>
                                    <div class="footer-news">
                                        <img style="width: 80px; height: 80px; object-fit: cover;"
                                            src="{{ asset('assets/images/help/blog/blog-spine-surgery.jpg') }}"
                                            alt="News" />
                                        <h2><a href="{{ route('blog-spine-surgery') }}">Treating Spine Tumors
                                                Safely</a></h2>
                                        <p>25 July 2025</p>
                                    </div>
                                    <div class="footer-news">
                                        <img style="width: 80px; height: 80px; object-fit: cover;"
                                            src="{{ asset('assets/images/help/blog/blog-open-brain.jpg') }}"
                                            alt="News" />
                                        <h2><a href="{{ route('blog-open-brain-surgery') }}">Awake Surgery for Brain
                                                Tumors</a></h2>
                                        <p>22 July 2025</p>
                                    </div>
                                </div>
                            </div><!-- Footer Box /-->
                        </div>
                        --}}
                    </div>

                </div><!-- Grid Container /-->

            </div><!-- Footer Top /-->

            <div class="footer-bottom">

                <div class="grid-container grid-x grid-padding-x">

                    <div class="medium-6 large-6 small-12 cell">
                        <div class="copyrightinfo">© Copyright 2025 All rights reserved. Powered by <a
                                href="https://sanjaresolutions.com/" target="_blank">Sanjar-e-solutions</a></div>
                    </div><!-- Left cell /-->

                    <div class="medium-6 large-6 small-12 cell">
                        <div class="footer-bottom-nav">
                            <ul class="menu">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div><!-- Right cell /-->

                </div><!-- Grid Container /-->

            </div><!-- Footer Bottom /-->

        </div>
        <!-- Footer /-->


        <!-- Move to Top Icon
        Remove to Not Display /-->
        <a href="#" id="top" title="Go to Top">
            <i class="fas fa-arrow-alt-circle-up"></i>
        </a>
    </div>
    <!-- Page Preloader
            Delete to Remove Preloader /-->
    {{-- <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div> --}}
    <!-- Preloader /-->



    <!-- Appointment Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Fix an Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control mb-3 shadow-none"
                            placeholder="Full Name" />

                        <input type="text" name="phone" class="form-control mb-3 shadow-none"
                            placeholder="Phone Number" />

                        <div class="row">
                            <div class="col-sm-6 shadow-none">
                                <select name="gender" id="gender">
                                    <option value="" selected disabled>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" name="age" class="form-control shadow-none"
                                    placeholder="Age" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="date" name="appointment_date" class="form-control shadow-none">
                            </div>
                            <div class="col-sm-6">
                                <input type="time" name="appointment_time" class="form-control shadow-none">
                            </div>
                        </div>

                        <textarea name="message" class="form-control shadow-none" rows="3" placeholder="Problem in Brief"></textarea>
                        <input type="hidden" name="form_type" value="appointment_form">
                        <button type="submit" class="button secondary button-second mb-0">Send Message</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/+919699915789" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <a href="tel:+919699915789" class="call-btn">
        <i class="fa-solid fa-phone text-light"></i>
    </a>

    <a data-bs-toggle="modal" data-bs-target="#appointmentModal" class="enquiry-btn">
        Enquire Now
    </a>



    @yield('extrajs')
    <!-- Including Jquery so All js Can run -->
    {{--
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    {{--
    <script src="{{ asset('assets/js/jquery.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Including Foundation JS so Foundation function can work. -->
    <script src="{{ asset('assets/js/foundation.min.js') }} "></script>

    <!-- Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{--
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}

    <!-- TwentyTwenty After Before -->
    <script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.twentytwenty.js') }}"></script>

    <!-- Webful JS -->
    <script src="{{ asset('assets/js/template.js') }}"></script>

    {{--
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="46bab44878df5714b4619bc3-|49" defer></script> --}}
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"
        integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>


<script>
    const stickyHeader = document.getElementById('stickyHeader');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) {
            stickyHeader.classList.remove('d-none');
        } else {
            stickyHeader.classList.add('d-none');
        }
    });
    const sticky = document.getElementById('stickyHeader');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            sticky.classList.add('visible');
        } else {
            sticky.classList.remove('visible');
        }
    });
</script>

</html>
