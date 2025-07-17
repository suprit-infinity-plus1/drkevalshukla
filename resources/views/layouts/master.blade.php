<!doctype html>
<html lang="en">

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- <title>Dr. Keval Shukla</title> --}}
    <title>@yield('title')</title>

    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- FavIcon for Website /-->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/help/icons/pointer.png') }}">

    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" media="all" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet"
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

</head>

<body>


    <div class="main-container">

        <div class="header">
            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 large-3 medium-3 cell">
                    <div class="logo">
                        <a href="index.html">
                            <h2 style="margin-bottom:0px;">
                                Dr. Keval Shukla
                            </h2>
                            {{-- <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" /> --}}
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
                                <p><strong>+91 969 991 5789</strong><br>
                                    Book an Appointment
                                </p>
                            </div><!-- Info Side /-->
                        </div>
                        <div class="icon-box">
                            <div class="icon-side">
                                <img src="{{ asset('assets/images/help/icons/pointer.png') }}" alt="icon" />
                            </div><!-- Icon Side /-->
                            <div class="info-side">
                                <p><strong>4th Avenue Bloom</strong><br>
                                    ST 4th, Sanfrans, FL, USA
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
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarsExample07XL" style="">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active p-3 fw-semibold text-uppercase" aria-current="page"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-3 fw-semibold text-uppercase" aria-current="page"
                                    href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item dropdown"> <a
                                    class="nav-link dropdown-toggle p-3 fw-semibold text-uppercase" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false">Services </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Service 1</a></li>
                                    <li><a class="dropdown-item" href="#">Service 2</a></li>
                                    <li><a class="dropdown-item" href="#">Service 3</a></li>
                                    <li><a class="dropdown-item" href="#">Service 4</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a class="nav-link p-3 fw-semibold text-uppercase"
                                    href="#">Our Staff</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link p-3 fw-semibold text-uppercase"
                                    href="#">Appointment</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link p-3 fw-semibold text-uppercase"
                                    href="#">Blog</a> </li>
                            <li class="nav-item"> <a class="nav-link p-3 fw-semibold text-uppercase"
                                    href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <div class="search-wrap float-right">
                            <a href="#" class="search-icon-toggle" data-toggle="search-dropdown"
                                aria-controls="search-dropdown" data-is-focus="false" data-yeti-box="search-dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets/images/help/icons/magnifier.png') }}" alt="icon" />
                            </a><!-- Search Icon button /-->
                            <a href="#" class="cart-icon-toggle" data-toggle="cart-dropdown"
                                data-is-focus="false" data-yeti-box="cart-dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="{{ asset('assets/images/help/icons/basket.png') }}" alt="icon" />
                            </a><!-- Shopping Cart Button /-->
                            <a href="#">
                                <img src="{{ asset('assets/images/help/icons/share.png') }}" alt="icon" />
                            </a><!-- Search Icon button /-->
                        </div>
                        <div class="search-dropdown dropdown-pane" id="search-dropdown"
                            data-dropdown="mkonmu-dropdown" data-auto-focus="true" aria-hidden="true"
                            data-yeti-box="search-dropdown" data-resize="search-dropdown">
                            <input type="text" placeholder="Enter keyword .... ">
                            <button class="primary button"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--Social Icons /-->
                </div>
            </nav>

        </div>
        <!-- navigation CSS Ends /-->

        @yield('content')






        <div class="footer">

            <div class="call-to-action dark-bg grey-bg">

                <div class="grid-container grid-x grid-padding-x">

                    <div class="large-12 medium-12 small-12 cell">
                        <div class="call-to-action-text">
                            <img src="{{ asset('assets/images/help/icons/ribbon.png') }}" alt="Ribbon" />
                            <h2>Its For your Great Life!</h2>
                            <p>Crown quis lectus et mauris commodo blandit. Morbi rutrum libero eget nibh facilisis
                                sollicitudin.</p>
                            <a class="button button-second secondary">fix an appointment</a>
                        </div><!-- Form/-->
                    </div>

                </div><!-- Grid Container /-->

            </div><!-- Call To Action /-->

            <div class="footer-top grey-bg">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-box footer-logo-side">
                                <a href="#">
                                    <h3>
                                        Dr. Keval Shukla
                                        {{-- <img src="{{ asset('assets/images/logo-footer.png') }}"
                        alt="" /> --}}
                                    </h3>
                                </a>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id officiis obcaecati iste
                                    architecto accusamus fuga reiciendis nostrum, quibusdam, corporis quis aspernatur
                                    esse
                                </p>
                                <div class="contact-us">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i><a
                                                href="#"><span>Address:</span>
                                                Wockhardt Hospitals, 1877, Mumbai Central, Mumbai -
                                                400011</a></li>
                                        <li><i class="fas fa-mobile-alt"></i><a href="#"><span>Phone:</span>
                                                0800-123-345</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="#"><span>Email:</span> <span
                                                    class="__cf_email__"
                                                    data-cfemail="0774727777687573476362756a6673686b68606e7473746e73622964686a">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-icons">
                                    <ul class="menu">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- Footer Box /-->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-box border-btm">
                                <h6>About Our Clinic</h6>
                                <ul class="links">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Staff & Doctors</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                                <ul class="links">
                                    <li><a href="#">Brain Surgery </a></li>
                                    <li><a href="#">Spinal Surgery</a></li>
                                    <li><a href="#">Neurovascular Surgery</a></li>
                                    <li><a href="#">Chronic Pain Management</a></li>
                                </ul>
                            </div><!-- Footer Box /-->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-box border-btm">
                                <h6>Recent News</h6>
                                <div class="footer-news-post">
                                    <div class="footer-news">
                                        <img src="{{ asset('assets/images/help/footer-icon-1.jpg') }}"
                                            alt="News" />
                                        <h2><a href="#">How can we help you get the amazing skin results from
                                                us?</a>
                                        </h2>
                                        <p>01 August 2018</p>
                                    </div>
                                    <div class="footer-news">
                                        <img src="{{ asset('assets/images/help/footer-icon-2.jpg') }}"
                                            alt="News" />
                                        <h2><a href="#">How can you keep your skin glowing and infection less in
                                                sprint</a></h2>
                                        <p>01 August 2018</p>
                                    </div>
                                </div>
                            </div><!-- Footer Box /-->
                        </div>
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
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="#">Blog</a></li>
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

    @yield('extrajs')
    <!-- Including Jquery so All js Can run -->
    {{-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/js/jquery.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Including Foundation JS so Foundation function can work. -->
    <script src="{{ asset('assets/js/foundation.min.js') }} "></script>

    <!-- Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}

    <!-- TwentyTwenty After Before -->
    <script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.twentytwenty.js') }}"></script>

    <!-- Webful JS -->
    <script src="{{ asset('assets/js/template.js') }}"></script>

    {{-- <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="46bab44878df5714b4619bc3-|49" defer></script> --}}
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"
        integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {});
    </script>
</body>

<!-- Mirrored from templates.webfulcreations.com/dermatology/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2025 08:13:37 GMT -->

</html>
