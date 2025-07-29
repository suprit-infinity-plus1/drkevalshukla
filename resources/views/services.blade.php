@extends('layouts.master')
@section('title', 'Our Services')
@section('content')
    <div class="main-container">
        <div class="title-section dark-bg">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>Our Services</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Services</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>


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
                            <img src="{{ asset('assets/images/help/services/service-neuro-oncology.jpg') }}"
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
                            <img src="{{ asset('assets/images/help/services/neuro-trauma-1.png') }}" alt="Service Images" />
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
                            <img src="{{ asset('assets/images/help/services/service-vascular-neurosurgery.jpg') }}"
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

    </div>
    <!-- Main Container /-->

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
    </div><!-- Preloader /-->

    <!-- Including Jquery so All js Can run -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- Including Foundation JS so Foundation function can work. -->
    <script src="assets/js/foundation.min.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- Carousel JS -->
    <script src="assets/js/owl.carousel.min.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- TwentyTwenty After Before -->
    <script src="assets/js/jquery.event.move.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>
    <script src="assets/js/jquery.twentytwenty.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <!-- Webful JS -->
    <script src="assets/js/template.js" type="a15dc910695ef2a5609702cf-text/javascript"></script>

    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="a15dc910695ef2a5609702cf-|49" defer></script>
    </body>

@endsection
