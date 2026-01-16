@extends('layouts.master')
@section('title', 'Dr. Keval Shukla || Book an Appointment')
@section('content')

    <div class="main-container">

        <div class="title-section dark-bg">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>Appointment Page</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="">Appointment</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>
        <!-- Title Section Ends /-->

        <div class="appointment-page form-section dark-bg grey-bg">

            <div class="grid-container grid-x grid-padding-x">

                <div class="large-8 medium-offset-2 large-offset-2 medium-8 small-12 cell">
                    <div class="form">
                        <h2>Book an Appointment</h2>
                        <p>Want to book an appointment with us? Fill up the form below to get appointment.</p>
                        <div class="form-section appointment-form">
                        <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <!-- Honeypot Anti-Bot Field -->
                        <input type="text" name="website" style="display:none !important;" tabindex="-1"
                            autocomplete="off">
                                <input type="text" name="name" value="" placeholder="Full Name">
                                {{-- <input type="email" value="" placeholder="Email Address"> --}}
                                <input type="text" name="phone"  placeholder="Phone Number">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <select name="gender" id="gender" class="">
                                            <option value="" selected disabled>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="age" placeholder="Age">
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

                                <textarea id="Reason" name="message" class="form-control" rows="3" placeholder="Problem in Brief"
                                    required></textarea>
                                <input type="hidden" name="form_type" value="appointment_form">
                                {{-- <a class="button secondary button-second">Send Message</a> --}}
                                <button type="submit" class="button secondary button-second">Send Message</button>
                            </form>
                        </div><!-- contact Form ends here. -->
                    </div><!-- Form/-->
                    <div class="clearfix"></div>
                </div><!-- cell /-->

            </div><!-- Grid Container /-->

        </div>
        <!-- Form Section /-->

        

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