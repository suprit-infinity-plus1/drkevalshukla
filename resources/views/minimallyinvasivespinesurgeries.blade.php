@extends('layouts.master')
@section('title', 'Service Details')
@section('content')


    <div class="main-container">

        <div class="title-section dark-bg module">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>Service 1</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Service Details</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>
        <!-- Title Section Ends /-->

        <div class="service-single-post module">

            <div class="grid-container grid-x grid-padding-x">

                <div class="medium-9 small-12 cell">
                    <div class="service-post">
                        <div class="thumbnail">
                            <img src="assets/images/help/services/large-service.jpg
                            " alt="Service Images">
                        </div><!-- News Img /-->
                        <div class="service-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna
                                felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum
                                nisi ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at
                                sodales dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna
                                felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum
                                nisi ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at
                                sodales dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna
                                felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum
                                nisi ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at
                                sodales dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Table Header</th>
                                        <th>Table Header</th>
                                        <th>Table Header</th>
                                        <th>Table Header</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Content Goes Here</td>
                                        <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                                        <td>Content Goes Here</td>
                                        <td>Content Goes Here</td>
                                    </tr>
                                    <tr>
                                        <td>Content Goes Here</td>
                                        <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget
                                            metus.</td>
                                        <td>Content Goes Here</td>
                                        <td>Content Goes Here</td>
                                    </tr>
                                    <tr>
                                        <td>Content Goes Here</td>
                                        <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget
                                            metus.</td>
                                        <td>Content Goes Here</td>
                                        <td>Content Goes Here</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna
                                felis, tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum
                                nisi ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at
                                sodales dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                            <blockquote>
                                Those people who think they know everything are a great annoyance to those of us who do.
                                <cite>Isaac Asimov</cite>
                            </blockquote>
                        </div><!-- News Text /-->
                        <div class="clearfix"></div>
                    </div><!-- News Post /-->
                </div><!-- Content Side Ends /-->

                <div class="services-sidebar sidebar medium-3 small-12 cell">

                    <div class="widget">
                        <h2>Related Services</h2>

                        <div class="widget-content">
                            <ul class="menu vertical">
                                <li><a href="#">Cosmetic Dermatology</a></li>
                                <li><a href="#">Clinical Dermatology</a></li>
                                <li><a href="#">Hair Transplant</a></li>
                                <li><a href="#">Emergency Treatments</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- widget ends -->

                    <div class="widget">
                        <h2>Contact Us</h2>

                        <div class="widget-content">
                            <form>
                                <input type="text" placeholder="Your Name..." />
                                <input type="text" placeholder="Your Email ...." />
                                <input type="text" placeholder="Your Phone..." />
                                <input type="text" placeholder="Email Subject ...." />
                                <label>Select Your Image
                                    <input type="file" />
                                </label>
                                <textarea placeholder="Your Message..." rows="2"></textarea>
                                <input type="submit" class="button primary last-item" />
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- widget ends -->

                </div><!-- Ends Sidebar /-->

            </div><!-- row /-->

        </div>
        <!-- Services /-->
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
    </div>
@endsection
