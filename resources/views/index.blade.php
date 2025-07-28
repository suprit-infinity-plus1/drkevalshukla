@extends('layouts.master')
@section('title', 'Dr. Keval Shukla')
@section('content')



    <div class="banner-container module">
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

    {{-- <div class="information-boxes grey-bg module">
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

        </div>
    </div> --}}
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
                            <h2>Dr. Keval Shukla</h2>
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
                            <div class="about-info-text">
                                <h4>EXPERTISE</h4>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Minimally Invasive Spine Surgery</h4>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Full Endoscopic Spine Surgery</h4>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Endoscopic Skull Base Surgeries</h4>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Neuro Oncology</h4>
                            </div>
                        </div>
                        <div class="about-info-box">
                            <i class="fas fa-check"></i>
                            <div class="about-info-text">
                                <h4>Neuro traumatology</h4>
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
                                <img src="{{ asset('assets/images/help/services/Minimally-Invasive-Spine-Surgeries-(1).png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="{{ route('minimally-invasive-spine-surgeries') }}" class="button primary">Know
                                        More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="{{ route('minimally-invasive-spine-surgeries') }}"
                                        class="ellipsis-multiline-1">MINIMALLY INVASIVE
                                        SPINE SURGERIES</a></h6>
                                <p class="ellipsis-multiline-3">Minimally Invasive Spine Surgery (MISS) is a modern,
                                    patient friendly approach to
                                    treating spinal conditions with smaller incisions, less tissue damage, and faster
                                    recovery. </p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/drkevalshukla-services-img2.jpeg') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="{{ route('neuro-oncology') }}" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="{{ route('neuro-oncology') }}" class="ellipsis-multiline-1">NEURO ONCOLOGY</a>
                                </h6>
                                <p class="ellipsis-multiline-3">Neuro oncology focuses on the diagnosis and surgical
                                    treatment of brain and spinal cord
                                    tumors. These tumors can be benign (non cancerous) or malignant (cancerous) and may
                                    originate in the central nervous system or spread from other parts of the body.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/neuro-trauma-1.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="{{ route('neuro-trauma') }}" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="{{ route('neuro-trauma') }}" class="ellipsis-multiline-1">NEURO TRAUMA</a>
                                </h6>
                                <p class="ellipsis-multiline-3">Neuro trauma involves serious injuries to the brain and
                                    spinal cord, often caused by road
                                    accidents, falls, sports injuries, or violence. These injuries can lead to
                                    life-threatening complications and long term disability if not treated promptly.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/Vascular-neurosurgery-(1).png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="{{ route('vascular-neurosurgery') }}" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="{{ route('vascular-neurosurgery') }}" class="ellipsis-multiline-1">VASCULAR
                                        NEUROSURGERY</a></h6>
                                <p class="ellipsis-multiline-3">Vascular neurosurgery deals with abnormalities in the blood
                                    vessels of the brain and
                                    spinal cord, including aneurysms, arteriovenous malformations (AVMs), and stroke related
                                    hemorrhages.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/Epilepsy-surgery.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="{{ route('epilepsy-surgery') }}" class="button primary">Know More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="{{ route('epilepsy-surgery') }}" class="ellipsis-multiline-1">EPILLEPSY
                                        SURGERY</a></h6>
                                <p class="ellipsis-multiline-3">Epilepsy surgery is an effective option for patients with
                                    seizures that cannot be
                                    controlled with medication (drug resistant epilepsy). By identifying and removing the
                                    seizure focus in the brain, surgery can lead to a dramatic improvement or complete
                                    freedom from seizures.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="service-box hover-wrap">
                            <div class="hover-img">
                                <img src="{{ asset('assets/images/help/services/Endoscopic-Skull-Base-Surgery.png') }}"
                                    alt="Service Images" />
                                <div class="service-detail hover-info">
                                    <a href="{{ route('endoscopic-skull-base-surgery') }}" class="button primary">Know
                                        More</a>
                                </div>
                            </div>
                            <div class="service-text hover-bottom">
                                <h6><a href="{{ route('endoscopic-skull-base-surgery') }}"
                                        class="ellipsis-multiline-1">ENDOSCOPIC SKULL
                                        BASE SURGERY</a></h6>
                                <p class="ellipsis-multiline-3">Endoscopic Skull Base Surgery is a cutting edge, minimally
                                    invasive technique that uses
                                    an endoscope (thin tube with a camera) to access deep brain areas through the nasal
                                    passages or small incisions.</p>
                            </div>
                        </div><!-- Service Box /-->
                    </div>
                </div>
            </div>

            {{-- <div class="grid-container grid-x grid-padding-x grid-padding-y">

                <div class="large-4 medium-6 small-12 cell">
                    <div class="service-box hover-wrap">
                        <div class="hover-img">
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}" alt="Service Images" />
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
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}" alt="Service Images" />
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
                            <img src="{{ asset('assets/images/help/services/service-img-6.png') }}" alt="Service Images" />
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

    {{-- <div class="our-staff module">

        <div class="section-title container">
            <h2>Best Neurosurgeons</h2>
            <p>Meet Our Best Neurosurgeons</p>
        </div>

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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
                </div>
            </div>

        </div>

    </div> --}}
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
                        <h2 class="count" data-count="250">0</h2>
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
                        <h2 class="count" data-count="500">0</h2>
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
                        <h2 class="count" data-count="100">0</h2>
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
                        <h2 class="count" data-count="200">0</h2>
                        <p>Minimally Invasive Neurosurgery</p>
                    </div>
                </div><!-- Counter /-->
            </div><!-- columns /-->

        </div>
        <!-- Grid Container /-->

    </div>
    <!-- Achievement Counter /-->

    <div class="why-chose-us module">

        <div class="section-title container">
            <h2>Awesome Facts</h2>
            <p>why we are best</p>
        </div><!-- Section Title /-->

        <div class="grid-container grid-x grid-padding-x">

            <div class="large-8 medium-12 small-12 cell">
                <ul class="accordion" data-accordion data-deep-link="true" data-update-history="true"
                    data-deep-link-smudge="500" id="deeplinked-accordion">
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">Advanced Surgical Expertise</a>
                        <div class="accordion-content" data-tab-content id="deeplink1">
                            Dr. Keval Shukla brings over 8 years of experience in handling complex brain and spine
                            conditions. His international fellowship in Full Endoscopic Spine Surgery from South Korea
                            highlights his proficiency in cutting-edge, minimally invasive techniques.
                        </div>
                    </li>
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">Minimally Invasive, Maximum Recovery</a>
                        <div class="accordion-content" data-tab-content id="deeplink1">
                            We specialize in minimally invasive and endoscopic procedures, ensuring reduced pain, minimal
                            scarring, shorter hospital stays, and quicker recovery without compromising surgical precision.
                        </div>
                    </li>
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">Comprehensive Neurosurgical Care</a>
                        <div class="accordion-content" data-tab-content id="deeplink2">
                            From spine disorders and brain tumors to skull base surgeries and neurotrauma, we offer complete
                            neurosurgical care under one roof, tailored to each patient’s unique condition.
                        </div>
                    </li>
                    <li class="accordion-item border-0" data-accordion-item>
                        <a href="#" class="accordion-title">Personalized Patient Approach</a>
                        <div class="accordion-content" data-tab-content id="deeplink3">
                            Every patient is unique and so is their treatment. We believe in personalized care plans, clear
                            communication, and supporting patients through every step of their journey to recovery.
                        </div>
                    </li>
                    <li class="accordion-item border-0 is-active" data-accordion-item>
                        <a href="#" class="accordion-title">International Standards, Local Accessibility</a>
                        <div class="accordion-content" data-tab-content id="deeplink4">
                            With training from global centers of excellence and years of experience in Mumbai’s top
                            hospitals, Dr. Shukla combines international standards of care with local accessibility, making
                            world-class treatment available close to home.
                        </div>
                    </li>
                </ul><!-- Cccordion /-->
            </div>

            <div class="large-4 medium-12 small-12 cell">
                <img src="{{ asset('assets/images/help/dekevalshukla-img2.png') }}" alt="">
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
                                <select name="gender" id="gender">
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

                        <!-- Appointment Date & Time -->
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="appointment_date"
                                    placeholder="Select Date" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" name="appointment_time"
                                    placeholder="Select Time" required>
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

    <div class="blog-section pb-5">

        <div class="container">
            <div class="section-title    mb-5">
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
                            <h6 class="card-title">
                                <a href="{{ route('single-post-page') }}" class="text-decoration-none text-dark">Lorem
                                    ipsum dolor sit amet.</a>
                            </h6>
                            <!-- <div class="mb-2 text-muted small">
                                                                                                                                                                                                    <i class="far fa-user me-1"></i><span>By:</span> <a href="#"
                                                                                                                                                                                                        class="text-muted">Ateeq</a> |
                                                                                                                                                                                                    <i class="far fa-comment ms-2 me-1"></i><a href="#" class="text-muted">3 Comments</a>
                                                                                                                                                                                                </div> -->
                            <p class="card-text">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered some
                                <a href="{{ route('single-post-page') }}">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('assets/images/help/blog/blog-img-2.jpg') }}" class="card-img-top"
                            alt="Product Img">
                        <div class="card-body">
                            <h6 class="card-title">
                                <a href="{{ route('single-post-page') }}" class="text-decoration-none text-dark">Lorem
                                    ipsum dolor sit amet.</a>
                            </h6>
                            <!-- <div class="mb-2 text-muted small">
                                                                                                                                                                                                    <i class="far fa-user me-1"></i><span>By:</span> <a href="#"
                                                                                                                                                                                                        class="text-muted">Ateeq</a> |
                                                                                                                                                                                                    <i class="far fa-comment ms-2 me-1"></i><a href="#" class="text-muted">3 Comments</a>
                                                                                                                                                                                                </div> -->
                            <p class="card-text">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered some
                                <a href="{{ route('single-post-page') }}">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('assets/images/help/blog/blog-img-3.jpg') }}" class="card-img-top"
                            alt="Product Img">
                        <div class="card-body">
                            <h6 class="card-title">
                                <a href="{{ route('single-post-page') }}" class="text-decoration-none text-dark">Lorem
                                    ipsum dolor sit amet.</a>
                            </h6>
                            <!-- <div class="mb-2 text-muted small">
                                                                                                                                                                                                    <i class="far fa-user me-1"></i><span>By:</span> <a href="#"
                                                                                                                                                                                                        class="text-muted">Ateeq</a> |
                                                                                                                                                                                                    <i class="far fa-comment ms-2 me-1"></i><a href="#" class="text-muted">3 Comments</a>
                                                                                                                                                                                                </div> -->
                            <p class="card-text">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered some
                                <a href="{{ route('single-post-page') }}">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.6.2/countUp.umd.js"></script>
    <script>
        $(document).ready(function() {});
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.count').forEach(function(el) {
                const target = parseInt(el.getAttribute('data-count'));
                const counter = new countUp.CountUp(el, target, {
                    duration: 2,
                    suffix: '+'
                });

                if (!counter.error) {
                    counter.start();
                } else {
                    console.error(counter.error);
                }
            });
        });
    </script>


@endsection
