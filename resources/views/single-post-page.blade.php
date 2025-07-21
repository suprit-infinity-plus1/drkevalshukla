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

        <div class="blog-single-post blog-page post-page module">

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
                    </div><!-- Blog /-->
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
                    </div><!-- News Text /-->

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
                            </div><!-- Tags /-->
                        </div><!-- Left Side /-->

                        <div class="float-right">
                            <div class="post-share">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div><!-- Social Sharing /-->
                        </div><!-- share post ends -->
                        <div class="clearfix"></div>
                    </div><!-- Sharing Row /-->

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
                    </div><!-- Author Box /-->

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
                    </div><!-- Comment Box /-->
                </div><!-- cell /-->

                <div class="services-sidebar sidebar large-3 medium-3 small-12 cell">
                    <div class="widget search">
                        <div class="widget-content">
                            <input type="text" placeholder="Search product..." />
                            <button class="button primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div><!-- widget ends -->

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
                    </div><!-- widget ends -->

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
                    </div><!-- widget ends -->

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
                    </div><!-- widget ends -->

                    <div class="widget">
                        <h2>Popular Posts</h2>

                        <div class="widget-content">
                            <div class="popular-post">
                                <a href="#"><strong>My new post title come out</strong></a>
                                <p><img alt="" src="assets/images/help/blog/blog-img-1.jpg"
                                        class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                    at velit in neque efficitur vehicula.<br> <a href="#">Read more...</a></p>
                            </div>

                            <div class="popular-post">
                                <a href="#"><strong>My new post title come out</strong></a>
                                <p><img alt="" src="assets/images/help/blog/blog-img-2.jpg"
                                        class="float-left" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                    at velit in neque efficitur vehicula.<br> <a href="#">Read more...</a></p>
                            </div>
                        </div>
                    </div><!-- widget ends -->

                </div><!-- Ends Sidebar /-->

            </div><!-- Grid Container /-->

        </div><!-- Blog Section Inner Pags /-->


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
