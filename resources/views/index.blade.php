@extends('layouts.master')
@section('title', 'Dr. Keval Shukla')
@section('content')



    <div class="banner-container">
        <div class="main-banner owl-carousel owl-theme" id="main-banner">

            <div class="slide transparent-background slide-one">
                <img src="{{ asset('assets/images/help/slide1.jpg') }}" alt="banner" />
                <div class="slide-text">
                    <h2>Meet Experts</h2>
                    <h3>Best Neurosurgeon</h3>
                    <p>Facilisi. Porta integer neque hac, iaculis dui felis Consectetuer. <br> Venenatis
                        sollicitudin potenti pretium sem lobortis erat.</p>
                    <a class="button primary" href="#">Read More &gt;</a>
                </div>
            </div><!-- Slide /-->
            <div class="slide transparent-background slide-two">
                <img src="{{ asset('assets/images/help/slide2.jpg') }}" alt="banner" />
                <div class="slide-text">
                    <h2>Meet Experts</h2>
                    <h3>Best Neurosurgeon</h3>
                    <p>Facilisi. Porta integer neque hac, iaculis dui felis Consectetuer. <br> Venenatis
                        sollicitudin potenti pretium sem lobortis erat.</p>
                    <a class="button primary" href="#">Read More &gt;</a>
                </div>
            </div><!-- Slide /-->

            <div class="slide transparent-background slide-three">
                <img src="{{ asset('assets/images/help/slide3.jpeg') }}" alt="banner" />
                <div class="slide-text">
                    <h2>Meet Experts</h2>
                    <h3>Best Neurosurgeon</h3>
                    <p>Facilisi. Porta integer neque hac, iaculis dui felis Consectetuer. <br> Venenatis
                        sollicitudin potenti pretium sem lobortis erat.</p>
                    <a class="button primary" href="#">Read More &gt;</a>
                </div>
            </div>
            <!-- Slide /-->

        </div><!-- Main Banner /-->
    </div>
    <!-- Banner Container /-->

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
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam omnis ratione repellat sit eos corrupti odio provident consequuntur.</p>
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

    <div class="services module grey-bg">
        <div class="section-title container">
            <h2>Best Services</h2>
            <p>Explore Our Best Neurosurgeon Services</p>
        </div><!-- Section Title /-->
        <div class="padding-between services-wrap">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="#" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="#">Lorem, ipsum dolor.</a></h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="#" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="#">Lorem, ipsum.</a></h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="#" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="#">Lorem, ipsum dolor.</a></h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="#" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="#">Lorem, ipsum dolor.</a></h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="#" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="#">Lorem, ipsum.</a></h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="#" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="#">Lorem, ipsum dolor.</a></h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                </div>
            </div><!-- Grid Container /-->

            {{-- <div class="grid-container grid-x grid-padding-x grid-padding-y">

                <div class="large-4 medium-6 small-12 cell">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="#">Lorem ipsum dolor sit.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div>
                </div>

                <div class="large-4 medium-6 small-12 cell">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="#">Lorem, ipsum dolor.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div>
                </div>

                <div class="large-4 medium-6 small-12 cell">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}"
                                alt="Service Images" />
                            <div class="service-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="service-text hover-bottom">
                            <h6><a href="#">Lorem, ipsum dolor.</a></h6>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some.</p>
                        </div>
                    </div>
                </div>

            </div> --}}
            <!-- Grid Container /-->

        </div><!-- Padding Between /-->
    </div>
    <!-- Services /-->

    <div class="our-staff module">

        <div class="section-title container">
            <h2>Best Neurosurgeons</h2>
            <p>Meet Our Best Neurosurgeons</p>
        </div><!-- Section Title /-->

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                    <div class="staff-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/our-staff/staff-img-1.jpg') }}" alt="Staff Images" />
                            <div class="staff-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="staff-text hover-bottom">
                            <h6><a href="#">Dr. Robert Doe</a></h6>
                            <p>Sr. Neurosurgeon</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                    <div class="staff-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/our-staff/staff-img-2.jpg') }}" alt="Staff Images" />
                            <div class="staff-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="staff-text hover-bottom">
                            <h6><a href="#">Dr. Tina Meena</a></h6>
                            <p>Jr. Neurosurgeon</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                    <div class="staff-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/our-staff/staff-img-3.jpg') }}" alt="Staff Images" />
                            <div class="staff-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="staff-text hover-bottom">
                            <h6><a href="#">Dr. Seena Tina</a></h6>
                            <p>Sr. Neurosurgeon</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 p-3">
                    <div class="staff-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/our-staff/staff-img-4.jpg') }}" alt="Staff Images" />
                            <div class="staff-detail hover-info">
                                <a href="#" class="button primary">Know More</a>
                            </div>
                        </div>
                        <div class="staff-text hover-bottom">
                            <h6><a href="#">Dr. Mario Doe</a></h6>
                            <p>Sr. Neurosurgeon</p>
                        </div>
                    </div><!-- Service Box /-->
                </div>
            </div>

        </div><!-- Grid Container /-->

    </div>
    <!-- Our Staff /-->

    <div class="achievement-counter dark-bg grey-bg module">

        <div class="grid-container grid-x grid-padding-x">

            <div class="large-3 medium-6 small-12 cell">
                <div class="counter">
                    <div class="counter-icon">
                        {{-- <img src="{{ asset('assets/images/help/icons/chemestry.png') }}" alt="Counter Icon" /> --}}
                        <img src="{{ asset('assets/images/help/icons/cup.png') }}" alt="Counter Icon" />
                    </div>
                    <div class="counter-text">
                        <h2>250+</h2>
                        <p>Brain Surgery</p>
                    </div>
                </div><!-- Counter /-->
            </div>

            <div class="large-3 medium-6 small-12 cell">
                <div class="counter">
                    <div class="counter-icon">
                        {{-- <img src="{{ asset('assets/images/help/icons/rocket.png') }}" alt="Counter Icon" /> --}}
                        <img src="{{ asset('assets/images/help/icons/cup.png') }}" alt="Counter Icon" />
                    </div>
                    <div class="counter-text">
                        <h2>500+</h2>
                        <p>Spinal Surgery</p>
                    </div>
                </div><!-- Counter /-->
            </div><!-- columns /-->

            <div class="large-3 medium-6 small-12 cell">
                <div class="counter">
                    <div class="counter-icon">
                        {{-- <img src="{{ asset('assets/images/help/icons/friends.png') }}" alt="Counter Icon" /> --}}
                        <img src="{{ asset('assets/images/help/icons/cup.png') }}" alt="Counter Icon" />
                    </div>
                    <div class="counter-text">
                        <h2>100+</h2>
                        <p>Neurovascular Surgery</p>
                    </div>
                </div><!-- Counter /-->
            </div><!-- columns /-->

            <div class="large-3 medium-6 small-12 cell">
                <div class="counter">
                    <div class="counter-icon">
                        <img src="{{ asset('assets/images/help/icons/cup.png') }}" alt="Counter Icon" />
                    </div>
                    <div class="counter-text">
                        <h2>200+</h2>
                        <p>Minimally Invasive Neurosurgery</p>
                    </div>
                </div><!-- Counter /-->
            </div><!-- columns /-->

        </div><!-- Grid Container /-->

    </div>
    <!-- Achievement Counter /-->

    <div class="why-chose-us module">

        <div class="section-title container">
            <h2>Awesome Facts</h2>
            <p>why we are best in industry</p>
        </div><!-- Section Title /-->

        <div class="grid-container grid-x grid-padding-x">

            <div class="large-8 medium-12 small-12 cell">
                <ul class="accordion" data-accordion data-deep-link="true" data-update-history="true"
                    data-deep-link-smudge="500" id="deeplinked-accordion">
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">What makes us the best Neurosurgeon in
                            town?</a>
                        <div class="accordion-content" data-tab-content id="deeplink1">
                            Phasellus quis ex nec ex molestie tincidunt. Vimus cursus metus ac lacus comdsmo
                            venenatis. The Aenean pulvinar ornare justo, eu efficitur leo dinga mushi.
                        </div>
                    </li>
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">What makes us the best Neurosurgeon in
                            town?</a>
                        <div class="accordion-content" data-tab-content id="deeplink1">
                            Phasellus quis ex nec ex molestie tincidunt. Vimus cursus metus ac lacus comdsmo
                            venenatis. The Aenean pulvinar ornare justo, eu efficitur leo dinga mushi.
                        </div>
                    </li>
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">What makes us the best Neurosurgeon in
                            town?</a>
                        <div class="accordion-content" data-tab-content id="deeplink2">
                            Phasellus quis ex nec ex molestie tincidunt. Vimus cursus metus ac lacus comdsmo
                            venenatis. The Aenean pulvinar ornare justo, eu efficitur leo dinga mushi.
                        </div>
                    </li>
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">What makes us the best Neurosurgeon in
                            town?</a>
                        <div class="accordion-content" data-tab-content id="deeplink3">
                            Phasellus quis ex nec ex molestie tincidunt. Vimus cursus metus ac lacus comdsmo
                            venenatis. The Aenean pulvinar ornare justo, eu efficitur leo dinga mushi.
                        </div>
                    </li>
                    <li class="accordion-item border-0 is-active" data-accordion-item>
                        <a href="#" class="accordion-title">What makes us the best Neurosurgeon in
                            town?</a>
                        <div class="accordion-content" data-tab-content id="deeplink4">
                            Phasellus quis ex nec ex molestie tincidunt. Vimus cursus metus ac lacus comdsmo
                            venenatis. The Aenean pulvinar ornare justo, eu efficitur leo dinga mushi.
                        </div>
                    </li>
                </ul><!-- Cccordion /-->
            </div>

            <div class="large-4 medium-12 small-12 cell">
                <img src="{{ asset('assets/images/help/DrKevalShukla-2.png') }}" alt="">
                {{-- <div class="after-before-item">
                    <div class="twentytwenty-container">
                        <img src="{{ asset('assets/images/help/before.jpg') }}" alt="" />
                        <img src="{{ asset('assets/images/help/after.jpg') }}" alt="" />
                    </div>
                </div> --}}
            </div>

        </div><!-- Grid Container /-->

    </div>
    <!-- Why Chose Us /-->

    <div class="testimonials dark-bg grey-bg">

        <div class="section-title-second">
            <h2>Awesome Reviews</h2>
            <p>What our customers say about us</p>
        </div><!-- Section Title /-->

        <div class="grid-container grid-x grid-padding-x">

            <div class="testimonial-slid owl-carousel owl-theme">

                <div class="testimonial-text">
                    {{-- <img src="{{ asset('assets/images/help/testimonial-1.png') }}" alt="" /> --}}
                    <div class="testimonial-profile" style="background-color: rgb(243 77 29);">
                        K
                    </div>
                    <p>
                        A very humble and patient doctor. Dr. Keval calmly listens to the problems and explains the issues
                        with accurate judgment and treatment suggestions. He knows how to put the patient at ease and deal
                        with the case.
                        Would definitely recommend for neuro care.
                    </p>
                    <h6>Kamlesh Shah - <span>Google Ads</span></h6>
                </div><!-- testimonial -->

                <div class="testimonial-text">
                    {{-- <img src="{{ asset('assets/images/help/testimonial-2.png') }}" alt="" /> --}}
                    <div class="testimonial-profile" style="background-color: rgb(120 27 161);">
                        K
                    </div>
                    <p>
                        Dr. Keval Shukla is one of the most skilled doctor. His diagnosis is very accurate & treatment is
                        very effective.
                        He is humble and clam. Trust in your doctor is one of the vital steps of the healing process, which
                        he earns very easily.
                    </p>
                    <h6>Kinnari Thaker - <span>Google Ads</span></h6>
                </div><!-- testimonial -->

                <div class="testimonial-text">
                    {{-- <img src="{{ asset('assets/images/help/testimonial-1.png') }}" alt="" /> --}}
                    <div class="testimonial-profile" style="background-color: rgb(151 194 193);">
                        S
                    </div>
                    <p>
                        Best Neurosurgen in Mumbai.
                        Very humble.
                        Good at his skill.
                        Very professional.
                        Best for patients.
                    </p>
                    <h6>Shankar Kadam - <span>Google Ads</span></h6>
                </div><!-- testimonial -->

                <div class="testimonial-text">
                    {{-- <img src="{{ asset('assets/images/help/testimonial-1.png') }}" alt="" /> --}}
                    <div class="testimonial-profile" style="background-color: rgb(15 157 138);">
                        R
                    </div>
                    <p>
                        One of the most skillfull Neurosurgeon in Mumbai with a very good clinical diagnosis, surgical hand.
                        He is very hard working for patients well being. He gives more time to patients both in OPD as well
                        as on rounds for admitted patients and explains regarding the disease, the surgical procedure
                        needed, it's benefit and complications, outcomes in a very good way.
                    </p>
                    <h6>Rahul Doe - <span>Google Ads</span></h6>
                </div><!-- testimonial -->

            </div><!-- testimonial Slid -->

        </div><!-- Grid Container /-->

    </div>
    <!-- Testimonials /-->

    {{-- <div class="products grey-bg module">

            <div class="section-title">
                <h2>Awesome Skin care</h2>
                <p>amazing skin products for you</p>
            </div>

            <div class="grid-container grid-x grid-padding-x products-box">

                <div class="large-3 medium-6 small-12 cell">
                    <div class="product">
                        <div class="product-icon">
                            <img src="{{ asset('assets/images/help/products/product-1.png') }}" alt="Product Img" />
                        </div>
                        <div class="product-text">
                            <h6><a href="#">Sun Block Herbal Lotion</a></h6>
                            <p>$39.00 - <span>$50.00</span></p>
                        </div>
                    </div>
                </div>

                <div class="large-3 medium-6 small-12 cell">
                    <div class="product">
                        <div class="product-icon">
                            <img src="{{ asset('assets/images/help/products/product-2.png') }}" alt="Product Img" />
                        </div>
                        <div class="product-text">
                            <h6><a href="#">Multi Vitamin Skin Product</a></h6>
                            <p>$39.00 - <span>$50.00</span></p>
                        </div>
                    </div>
                </div>

                <div class="large-3 medium-6 small-12 cell">
                    <div class="product">
                        <div class="product-icon">
                            <img src="{{ asset('assets/images/help/products/product-3.png') }}" alt="Product Img" />
                        </div>
                        <div class="product-text">
                            <h6><a href="#">Whitening special Cream</a></h6>
                            <p>$39.00 - <span>$50.00</span></p>
                        </div>
                    </div>
                </div>

                <div class="large-3 medium-6 small-12 cell">
                    <div class="product">
                        <div class="product-icon">
                            <img src="{{ asset('assets/images/help/products/product-4.png') }}" alt="Product Img" />
                        </div>
                        <div class="product-text">
                            <h6><a href="#">Sun Block Special Lotion</a></h6>
                            <p>$39.00 - <span>$50.00</span></p>
                        </div>
                    </div>
                </div>

            </div>

        </div> --}}
    <!-- Products /-->



    <div class="form-section module dark-bg grey-bg">

        <div class="grid-container grid-x grid-padding-x">

            <div class="large-7 medium-7 small-12 large-offset-5 medium-offset-5 cell">
                <div class="form">
                    <h2>Contact Us</h2>
                    <p>Want to book an appointment with us? Fill up the form below to get appointment.</p>
                    <form action="">
                        <input type="text" value="" placeholder="Full Name">
                        {{-- <input type="email" value="" placeholder="Email Address"> --}}
                        <input type="text" value="" placeholder="Phone Number">
                        <div class="row">
                            <div class="col-sm-6">
                                <select name="" id="">
                                    <option value="" selected disabled>Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" value="" placeholder="Age">
                            </div>
                        </div>
                        <textarea id="Reason" class="form-control" rows="3" placeholder="Problem in Brief" required></textarea>
                        <a class="button secondary button-second">Send Message</a>
                    </form>
                </div><!-- Form/-->
                <div class="clearfix"></div>
            </div>

        </div><!-- Grid Container /-->

    </div>
    <!-- Form Section /-->

    <div class="blog-section module">

        <div class="section-title container">
            <h2>Our Blogs</h2>
            <p>Our latest blog updates for the week.</p>
        </div><!-- Section Title /-->

        <div class="grid-container grid-x grid-padding-x">

            <div class="large-4 medium-6 small-12 cell">
                <div class="blog">
                    <div class="blog-img">
                        <img src="{{ asset('assets/images/help/blog/blog-img-1.jpg') }}" alt="Product Img" />
                    </div>
                    <div class="blog-text">
                        <h6><a href="#">Lorem ipsum dolor sit amet.</a></h6>
                        <div class="meta-tags">
                            <i class="far fa-user"> <span>By:</span><a href="#">Ateeq</a></i>
                            <i class="far fa-comment"> <a href="#">3 Comments</a></i>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered some <a href="#">Read More</a></p>
                    </div>
                </div><!-- Blog /-->
            </div>

            <div class="large-4 medium-6 small-12 cell">
                <div class="blog">
                    <div class="blog-img">
                        <img src="{{ asset('assets/images/help/blog/blog-img-2.jpg') }}" alt="Product Img" />
                    </div>
                    <div class="blog-text">
                        <h6><a href="#">Lorem ipsum dolor sit amet.</a></h6>
                        <div class="meta-tags">
                            <i class="far fa-user"> <span>By:</span><a href="#">Ateeq</a></i>
                            <i class="far fa-comment"> <a href="#">3 Comments</a></i>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered some <a href="#">Read More</a></p>
                    </div>
                </div><!-- Blog /-->
            </div>

            <div class="large-4 medium-6 small-12 cell">
                <div class="blog">
                    <div class="blog-img">
                        <img src="{{ asset('assets/images/help/blog/blog-img-3.jpg') }}" alt="Product Img" />
                    </div>
                    <div class="blog-text">
                        <h6><a href="#">Lorem ipsum dolor sit amet.</a></h6>
                        <div class="meta-tags">
                            <i class="far fa-user"> <span>By:</span><a href="#">Ateeq</a></i>
                            <i class="far fa-comment"> <a href="#">3 Comments</a></i>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered some <a href="#">Read More</a></p>
                    </div>
                </div><!-- Blog /-->
            </div>

        </div><!-- Grid Container /-->

    </div>
    <!-- Blog Section /-->

    {{-- partners section - our-partners --}}





    <!-- Main Container /-->
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {

        });
    </script>

@endsection
