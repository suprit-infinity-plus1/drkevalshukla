@extends('layouts.master')
@section('title', 'Dr. Keval Shukla || contact us')
@section('content')

    <div class="title-section dark-bg module">

        <div class="grid-container grid-x grid-padding-x">

            <div class="small-12 cell">
                <h1>Contat Us</h1>
            </div><!-- Top Row /-->

            <div class="small-12 cell">
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li> <a href="#">Contact Us</a></li>
                </ul><!-- Breadcrumbs /-->
            </div><!-- Bottom Row /-->

        </div><!-- Row /-->

    </div>
    <!-- Title Section Ends /-->

    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-4">
                <!-- Mobile Flex Row: Image Left, Text Right -->
                <div class="row">

                    <!-- Image -->
                    <div class="col-12  col-sm-6 col-md-10 mx-auto mb-4">
                        <img src="{{ asset('assets/images/help/DrKevalShukla.png') }}" alt="Doctor"
                            class="contact-page-doctor-img">
                    </div>

                    <!-- Text -->
                    <div class=" col-12 col-sm-6 col-md-12 text-start mb-4 ">
                        <h5 class="fw-bold mb-2">Meet Our Dermatologist</h5>
                        
                        <a href="https://maps.app.goo.gl/aMZT4g9UFW64BvNLA"
                                class="d-flex align-items-center text-decoration-none mb-2">
                                <i class="fa-solid fa-location-dot me-2"></i>
                                <span>Wockhardt Hospital , Agripada , Mumbai Central</span>
                            </a>

                        <div class="contact-now mb-3">
                            <h5 class="fw-bold">Contact Now</h5>

                            <a href="tel:+919699915789"
                                class="d-flex align-items-center text-decoration-none mb-2">
                                <i class="fa-solid fa-phone me-2"></i>
                                <span>+91 9699915789</span>
                            </a>

                            <a href="tel:+918208017035"
                                class="d-flex align-items-center text-decoration-none mb-2">
                                <i class="fa-solid fa-phone me-2"></i>
                                <span>+91 8208017035</span>
                            </a>

                            <a href="mailto:keval242@gmail.com"
                                class="d-flex align-items-center text-decoration-none">
                                <i class="fa-solid fa-envelope me-2"></i>
                                <span>keval242@gmail.com</span>
                            </a>
                        </div>


                        <h5 class="fw-bold">Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Right Content -->
            <div class="col-md-8">
                <div class="mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.0089602679673!2d72.82131257497477!3d18.97521168220869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce689ca59091%3A0x2cc84b316383c1c1!2sWockhardt%20Hospitals%2C%20Mumbai%20Central!5e0!3m2!1sen!2sin!4v1752835193548!5m2!1sen!2sin"
                        height="270" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <h4 class="fw-bold mb-4">Fill the form below to contact us</h4>
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
                                <input type="date" class="form-control" name="appointment_date" placeholder="Select Date"
                                    required>
                            </div>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" name="appointment_time" placeholder="Select Time"
                                    required>
                            </div>
                        </div>

                        <textarea id="Reason" class="form-control" rows="3" placeholder="Problem in Brief"
                            required></textarea>
                        <a class="button secondary button-second">Send Message</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <hr>
    <hr>
    <hr>

    {{--<div class="content-section module single-products-page products-page">
        <div class="grid-container grid-x grid-padding-x">

            <div class="medium-3 small-12 cell contact-sidebar">
                <img src="assets/images/help/our-staff/staff-img-3.jpg" alt="">
                <h4 class="padding-top-zero">Meet Our Dermatologist</h4>
                <p>111 Street and house #1 Vilane, Washington 99221 USA</p>
                <h4>Customer Service</h4>
                <p>Tel: 123-123-1234 (Toll Free Phone)<br> Tel: 123-123-1234 (Local)<br> Fax: 123-123-1234</p>
                <h4>Follow Us</h4>
                <div class="socialicons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div> <!-- Left Side Ends /-->

            <div class="medium-9 small-12 cell">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.0089602679673!2d72.82131257497477!3d18.97521168220869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce689ca59091%3A0x2cc84b316383c1c1!2sWockhardt%20Hospitals%2C%20Mumbai%20Central!5e0!3m2!1sen!2sin!4v1752835193548!5m2!1sen!2sin"
                        height="270" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- map ends here -->
                <div class="contact-form">
                    <h3>Fill the form below to contact us</h3>
                    <form action="">
                        <input type="text" value="" placeholder="Full Name">
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
                                <input type="date" class="form-control" name="appointment_date" placeholder="Select Date"
                                    required>
                            </div>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" name="appointment_time" placeholder="Select Time"
                                    required>
                            </div>
                        </div>

                        <textarea id="Reason" class="form-control" rows="3" placeholder="Problem in Brief"
                            required></textarea>
                        <a class="button secondary button-second">Send Message</a>
                    </form>
                </div><!-- contact Form ends here. -->
            </div> <!-- Right Side Ends /-->

        </div>
    </div>
    --}}


@endsection