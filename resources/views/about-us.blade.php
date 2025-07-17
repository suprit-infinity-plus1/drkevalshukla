@extends('layouts.master')
@section('title', 'Dr. Keval Shukla || about us')
@section('content')

    <div class="title-section dark-bg module">

        <div class="grid-container grid-x grid-padding-x">

            <div class="small-12 cell">
                <h1>About Us</h1>
            </div><!-- Top Row /-->

            <div class="small-12 cell">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li class="disabled">Gene Splicing</li>
                    <li><span class="show-for-sr">Current: </span> Cloning</li>
                </ul><!-- Breadcrumbs /-->
            </div><!-- Bottom Row /-->

        </div><!-- Row /-->

    </div>
    <!-- Title Section Ends /-->

    <div class="about-section module">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/help/DrKevalShukla.png') }}" alt="About-img" />
                        <p>‘‘We trust that helping other’s can bring more happiness to our own life. We are available.’’
                        </p>
                    </div>
                </div>

                <div class="col-12 col-lg-6 ps-lg-5">
                    <div class="introduction-side">
                        <div class="about-text">
                            <h2>Welcome to Dr. Keval Shukla</h2>
                            <h3>About <span> Neurosurgeon</span></h3>
                            <p>
                                Dr. Keval Shukla is an experienced Brain and Spine surgeon with over 8 years of experience
                                in
                                this field.
                                After completing his training, Dr. Keval has worked at a major corporate hospital in Mumbai
                                .
                                He performs all types of Brain and spine surgeries including Minimally invasive / minimal
                                access surgeries of both brain and spine as well as Full endoscopic Spine surgery for which
                                he
                                has an international fellowship from South Korea.

                            </p>
                            <p>
                                Besides this he also performs general Neurosurgical procedures including Neuro trauma cases,
                                Neuro oncology, Epilepsy surgeries, Skull base Neurosurgery.
                            </p>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>We Understand your concern</h4>
                                <p>Once upon a time there was a thirsty crow he flew here and there in search of water
                                    but he could not find water</p>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>8 Years Experienced</h4>
                                <p>Once upon a time there was a thirsty crow he flew here and there in search of water
                                    but he could not find water</p>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Free Consultation</h4>
                                <p>Once upon a time there was a thirsty crow he flew here and there in search of water
                                    but he could not find water</p>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Rapid Emergency Treatments</h4>
                                <p>Once upon a time there was a thirsty crow he flew here and there in search of water
                                    but he could not find water</p>
                            </div>
                        </div>
                        <a class="button primary" href="{{ route('about') }}">About Us</a>
                        <a class="button secondary" href="#">Why Chose Us</a>
                    </div>
                </div>
            </div>

        </div><!-- Grid Container /-->
    </div>
    <!-- About Section /-->

    <div class="information-boxes grey-bg module">
        <div class="container">

            <div class="row d-flex align-items-stretch">
                <div class="information-box col-12 col-lg-4 p-0">
                    <div class="information-icon">
                        <img src="{{ asset('assets/images/help/information-boxes/icon-1.png') }}" alt="Icon" />
                    </div>
                    <div class="information-text">
                        <h4><a class="#">Lorem, ipsum dolor.</a></h4>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travellig
                            salesman and above it there hung a picture that he had recently cut out in the situation
                            of lines. Quick brown fox jumps over the lazy.</p>
                        <a href="#">Learn More ...</a>
                    </div>
                </div>
                <div class="information-box second-information-box col-12 col-lg-4 p-0">
                    <div class="information-icon">
                        <img src="{{ asset('assets/images/help/information-boxes/icon-2.png') }}" alt="Icon" />
                    </div>
                    <div class="information-text">
                        <h4><a class="#">Lorem, ipsum dolor.</a></h4>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travellig
                            salesman and above it there hung a picture that he had recently cut out in the situation
                            of lines. Quick brown fox jumps over the lazy.</p>
                        <a href="#">Learn More ...</a>
                    </div>
                </div>
                <div class="information-box col-12 col-lg-4 p-0">
                    <div class="information-icon">
                        <img src="{{ asset('assets/images/help/information-boxes/icon-3.png') }}" alt="Icon" />
                    </div>
                    <div class="information-text">
                        <h4><a class="#">Lorem, ipsum dolor.</a></h4>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travellig
                            salesman and above it there hung a picture that he had recently cut out in the situation
                            of lines. Quick brown fox jumps over the lazy.</p>
                        <a href="#">Learn More ...</a>
                    </div>
                </div>
            </div>

        </div><!-- Grid Container /-->
    </div>
    <!-- information-boxes /-->

    {{-- <div class="our-partners module">

        <div class="grid-container grid-x grid-padding-x">

            <div class="partners">

                <div class="partners-logo">
                    <a href="#"><img src="assets/images/help/partners/logo-1.jpg" alt="" /></a>
                </div>

                <div class="partners-logo">
                    <a href="#"><img src="assets/images/help/partners/logo-2.jpg" alt="" /></a>
                </div>

                <div class="partners-logo">
                    <a href="#"><img src="assets/images/help/partners/logo-3.jpg" alt="" /></a>
                </div>

                <div class="partners-logo">
                    <a href="#"><img src="assets/images/help/partners/logo-4.jpg" alt="" /></a>
                </div>

                <div class="partners-logo">
                    <a href="#"><img src="assets/images/help/partners/logo-5.jpg" alt="" /></a>
                </div>

            </div>

        </div><!-- Grid Container /-->

    </div> --}}
    <!-- Our Partners /-->
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {

        });
    </script>

@endsection
