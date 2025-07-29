@extends('layouts.master')
@section('title', 'Blog Details')
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
        <!-- Title Section Ends /-->

        <!-- <div class="blog-single-post blog-page post-page module">

                                                                                            <div class="grid-container grid-x grid-padding-x">

                                                                                                <div class="large-9 medium-9 small-12 cell">
                                                                                                    <div class="blog">
                                                                                                        <div class="blog-img">
                                                                                                            <img src="assets/images/help/blog/blog-img1.jpg" alt="Product Img" />
                                                                                                        </div>
                                                                                                        <div class="blog-text">
                                                                                                            <h6><a href="#">How you can protect your skin?</a></h6>
                                                                                                            <div class="meta-tags">
                                                                                                                <i class="far fa-user"> <span>By:</span><a href="#">Ateeq</a></i>
                                                                                                                <i class="far fa-comment"> <a href="#">3 Comments</a></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="news-text">
                                                                                                        <p>We have special techniques to finish a html template this plumber html template is simply the
                                                                                                            best html template for services based websites and this can be used by Plumbers electricians and
                                                                                                            any other type of business who provide the services. While creating this template we kept in
                                                                                                            mind that what are the requirements of a plumber.</p>
                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                                                                                            vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna felis,
                                                                                                            tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum nisi
                                                                                                            ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at sodales
                                                                                                            dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                                                                                            vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna felis,
                                                                                                            tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum nisi
                                                                                                            ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at sodales
                                                                                                            dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>

                                                                                                        <table>
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th>Header</th>
                                                                                                                    <th>Table Header</th>
                                                                                                                    <th>Header</th>
                                                                                                                    <th>Header</th>
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
                                                                                                                    <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.
                                                                                                                    </td>
                                                                                                                    <td>Content Goes Here</td>
                                                                                                                    <td>Content Goes Here</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>Content Goes Here</td>
                                                                                                                    <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.
                                                                                                                    </td>
                                                                                                                    <td>Content Goes Here</td>
                                                                                                                    <td>Content Goes Here</td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at velit in neque efficitur
                                                                                                            vehicula. Pellentesque id mauris vestibulum, ultrices eros ac, hendrerit ligula. Ut magna felis,
                                                                                                            tincidunt eget finibus a, finibus at purus. Nulla viverra interdum est, quis interdum nisi
                                                                                                            ornare eu. Cras fringilla, libero in pulvinar gravida, velit dolor tincidunt justo, at sodales
                                                                                                            dui ligula vitae arcu. Morbi ac est dignissim, fringilla purus at, dictum erat.</p>
                                                                                                        <blockquote>
                                                                                                            Those people who think they know everything are a great annoyance to those of us who do.
                                                                                                            <cite>Isaac Asimov</cite>
                                                                                                        </blockquote>
                                                                                                    </div>

                                                                                                    <div class="sharing-posts">
                                                                                                        <div class="float-left">
                                                                                                            <div class="post-tags">
                                                                                                                <ul class="tags">
                                                                                                                    <li><strong>Tags:</strong></li>
                                                                                                                    <li><a href="#">Something</a></li>
                                                                                                                    <li><a href="#">New Tag</a></li>
                                                                                                                    <li><a href="#">Great Tag</a></li>
                                                                                                                    <li><a href="#">Blue</a></li>
                                                                                                                    <li><a href="#">Green</a></li>
                                                                                                                    <li><a href="#">White</a></li>
                                                                                                                    <li><a href="#">Red</a></li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="float-right">
                                                                                                            <div class="post-share">
                                                                                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                                                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="clearfix"></div>
                                                                                                    </div>

                                                                                                    <div class="author-box">
                                                                                                        <div class="float-left author-image">
                                                                                                            <img alt="" src="assets/images/help/author.png" />
                                                                                                        </div>
                                                                                                        <div class="float-right">
                                                                                                            <p><strong>About John Doe</strong><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                                                                Morbi at velit in neque efficitur vehicula. Pellentesque id mauris vestibulum, ultrices eros
                                                                                                                ac, hendrerit ligula. Ut magna felis, tincidunt eget finibus a, finibus at purus. Nulla
                                                                                                                viverra interdum est, quis interdum nisi ornare eu Cras fringilla.</p>
                                                                                                        </div>
                                                                                                        <div class="clearfix"></div>
                                                                                                    </div>

                                                                                                    <div class="commentbox">
                                                                                                        <h3>Leave a reply</h3>
                                                                                                        <form>
                                                                                                            <div class="grid-container grid-x grid-padding-x">
                                                                                                                <div class="medium-6 cell">
                                                                                                                    <input type="text" placeholder="Name">
                                                                                                                </div>
                                                                                                                <div class="medium-6 cell">
                                                                                                                    <input type="text" placeholder="Email">
                                                                                                                </div>
                                                                                                                <div class="medium-12 cell">
                                                                                                                    <input type="text" placeholder="Website">
                                                                                                                </div>
                                                                                                                <div class="medium-12 cell">
                                                                                                                    <textarea placeholder="Your comment" rows="5"></textarea>
                                                                                                                    <button class="button primary" type="submit">SUbmit comment</button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="services-sidebar sidebar large-3 medium-3 small-12 cell">
                                                                                                    <div class="widget search">
                                                                                                        <div class="widget-content">
                                                                                                            <input type="text" placeholder="Search product..." />
                                                                                                            <button class="button primary"><i class="fa fa-search"></i></button>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="widget">
                                                                                                        <h2>Blog Categories</h2>

                                                                                                        <div class="widget-content">
                                                                                                            <ul class="menu vertical">
                                                                                                                <li><a href="#">Chosing best Dermatologist in Town</a></li>
                                                                                                                <li><a href="#">Awesome Dermatologist Tips & About Piel Dermatologist</a></li>
                                                                                                                <li><a href="#">Free Consultation & We Understand your skin</a></li>
                                                                                                                <li><a href="#">Rapid Emergency Treatments</a></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="widget">
                                                                                                        <h2>Shop Categories</h2>

                                                                                                        <div class="widget-content">
                                                                                                            <ul class="menu vertical">
                                                                                                                <li><a href="#">Dermatologist Stuff</a></li>
                                                                                                                <li><a href="#">Pots & Blog</a></li>
                                                                                                                <li><a href="#">Machines & Scisors</a></li>
                                                                                                                <li><a href="#">Free Consultation & We Understand your skin</a></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="widget">
                                                                                                        <h2>Popular Tags</h2>

                                                                                                        <div class="widget-content">
                                                                                                            <ul class="tags">
                                                                                                                <li><a href="#">Something</a></li>
                                                                                                                <li><a href="#">New Tag</a></li>
                                                                                                                <li><a href="#">Great Tag</a></li>
                                                                                                                <li><a href="#">Blue</a></li>
                                                                                                                <li><a href="#">Green</a></li>
                                                                                                                <li><a href="#">White</a></li>
                                                                                                                <li><a href="#">Red</a></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div class="clearfix"></div>
                                                                                                    </div>

                                                                                                    <div class="widget">
                                                                                                        <h2>Popular Posts</h2>

                                                                                                        <div class="widget-content">
                                                                                                            <div class="popular-post">
                                                                                                                <a href="#"><strong>My new post title come out</strong></a>
                                                                                                                <p><img alt="" src="assets/images/help/blog/blog-img-1.jpg" class="float-left" />Lorem ipsum
                                                                                                                    dolor sit amet, consectetur adipiscing elit. Morbi
                                                                                                                    at velit in neque efficitur vehicula.<br> <a href="#">Read more...</a></p>
                                                                                                            </div>

                                                                                                            <div class="popular-post">
                                                                                                                <a href="#"><strong>My new post title come out</strong></a>
                                                                                                                <p><img alt="" src="assets/images/help/blog/blog-img-2.jpg" class="float-left" />Lorem ipsum
                                                                                                                    dolor sit amet, consectetur adipiscing elit. Morbi
                                                                                                                    at velit in neque efficitur vehicula.<br> <a href="#">Read more...</a></p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>

                                                                                        </div> -->

        <section class="blog-post section-padding">
            <div class="container">
                <div class="row">
                    <!-- Blog Content -->
                    <div class="col-lg-9">
                        <div class="blog-detail-content">
                            <img src="assets/images/help/blog/blog-open-brain.jpg" alt="Blog Image"
                                class="img-fluid rounded mb-4 w-100">

                            <h2 class="mb-3">Awake Surgery for Brain Tumors</h2>
                            <p>Posted by admin | 25 September 2022</p>

                            <p>
                                Awake brain surgery allows surgeons to operate while the patient is conscious, helping
                                preserve critical functions like speech and movement. It’s especially useful for tumors
                                located near vital brain areas and offers greater surgical accuracy with reduced
                                complications.
                            </p>
                            <p>
                                This procedure, known as awake craniotomy, involves sedating the patient at the beginning
                                and end of the operation, but keeping them awake during the critical part. While awake, the
                                patient may be asked to perform simple tasks such as counting, speaking, or moving a limb.
                                This real-time feedback helps the surgical team avoid damaging areas that control essential
                                functions.
                            </p>
                            <p>
                                Awake surgery is most commonly used for tumors in the eloquent cortex—the parts of the brain
                                responsible for language, motor control, and memory. It is also helpful in epilepsy surgery
                                and for deep-seated lesions close to critical pathways.
                            </p>
                            <p>
                                Modern technologies like functional MRI, neuronavigation, and brain mapping have made this
                                surgery even more precise. With the help of a multidisciplinary team—including
                                neurosurgeons, neuropsychologists, and anesthesiologists—patients are carefully monitored
                                throughout the procedure.
                            </p>
                            <p>
                                Though the idea of staying awake during brain surgery might sound intimidating, patients are
                                thoroughly prepared, and most report minimal discomfort. Awake brain surgery offers hope for
                                safer outcomes, especially in complex tumor cases where precision is crucial.
                            </p>



                        </div>
                    </div>

                    <!-- Related Blogs -->
                    <div class="col-lg-3">
                        <div class="related-blogs">
                            <h5 class="mb-4">Related Blogs</h5>

                            <div class="d-flex mb-4">
                                <img src="assets/images/help/blog/blog-brain-tumor.jpg" alt="Blog 1"
                                    class="img-fluid rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <a href="{{ route('blog-brain-tumors') }}" class="mb-1">What Are Brain Tumors?</a>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Brain tumors are abnormal
                                        growths</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <img src="assets/images/help/blog/blog-spine-surgery.jpg" alt="Blog 2"
                                    class="img-fluid rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <a href="{{ route('blog-spine-surgery') }}" class="mb-1">Treating Spine Tumors
                                        Safely</a>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Spinal cord tumors can affect
                                    </p>
                                </div>
                            </div>
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
