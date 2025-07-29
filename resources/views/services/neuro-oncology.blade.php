@extends('layouts.master')
@section('title', 'NEURO ONCOLOGY')
@section('content')


    <div class="main-container">

        <div class="title-section dark-bg module">

            <div class="grid-container grid-x grid-padding-x">

                <div class="small-12 cell">
                    <h1>NEURO ONCOLOGY</h1>
                </div><!-- Top Row /-->

                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">NEURO ONCOLOGY</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->

        </div>
        <!-- Title Section Ends /-->

        <div class="service-single-post module">

            <div class="grid-container grid-x grid-padding-x">

                <div class="medium-9 small-12 cell">
                    <div class="service-post">
                        <div class="thumbnail w-100">
                            <img src="{{ asset('assets/images/help/services/service-neuro-oncology.jpg') }}" class="w-100"
                                alt="Service Images">
                        </div><!-- News Img /-->

                        <div class="section-title container p-0 mb-2">
                            <p>NEURO ONCOLOGY</p>
                        </div>
                        <div class="service-text">
                            <p>Neuro oncology focuses on the diagnosis and surgical treatment of brain and spinal cord
                                tumors. These tumors can be benign (non cancerous) or malignant (cancerous) and may
                                originate in the central nervous system or spread from other parts of the body.
                            </p>
                            <p>Dr. Keval Shukla specializes in microsurgical and minimally invasive tumor resections, with a
                                strong emphasis on preserving neurological function and improving long term outcomes. His
                                approach is multidisciplinary, involving close coordination with oncologists, radiologists,
                                and rehabilitation experts.
                            </p>
                        </div><!-- News Text /-->
                        <div class="border border-bottom-2 border-black my-3"></div>
                        <div class="section-title container p-0 mb-2">
                            <p>Conditions Treated</p>
                        </div>
                        <div>
                            <div class="conditions-treated-contaner">
                                <div class="row text-center">
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Gliomas (including glioblastoma multiforme)

                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Meningiomas
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Pituitary adenomas
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Acoustic neuromas (vestibular schwannomas)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Metastatic brain tumors
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Spinal cord tumors
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Craniopharyngiomas
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="border p-3 rounded-3 h-100">
                                            <p class="mb-0 text-center fw-semibold">
                                                Ependymomas and astrocytomas
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-2 border-black my-3"></div>

                        <div class="section-title container p-0 mb-2">
                            <p>Techniques Used</p>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="p-4 bg-white rounded shadow-sm border-start border-4"
                                style="border-color: #ff4500;">
                                <div class="row">
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>
                                            <span class="fw-semibold">
                                                Microsurgical Tumor Resection
                                            </span>
                                            with high powered operating microscopes
                                        </span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>
                                            <span class="fw-semibold">
                                                Neuronavigation Guided Surgery
                                            </span>
                                            for precision targeting
                                        </span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>
                                            <span class="fw-semibold">
                                                Endoscopic Tumor Removal
                                            </span>
                                            for deep or complex lesions

                                        </span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>
                                            <span class="fw-semibold">
                                                Awake Craniotomy
                                            </span>
                                            for tumors near speech and motor areas
                                        </span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>
                                            <span class="fw-semibold ">
                                                Intraoperative Neuromonitoring
                                            </span>
                                            to preserve brain/spinal function
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border border-bottom-2 border-black my-3"></div>
                        <div class="section-title container p-0 mb-2">
                            <p>Benefits</p>
                        </div>
                        <div class="col-12">
                            <div class="p-4 bg-white rounded shadow-sm border-start border-4"
                                style="border-color: #ff4500;">
                                <div class="row">
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>Maximum tumor removal with minimal risk to healthy tissue
                                        </span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>Shorter recovery time with minimally invasive techniques</span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>Improved seizure control in tumor related epilepsy
                                        </span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>Early return to function and better quality of life</span>
                                    </div>
                                    <div class="col-12 mb-2 d-flex justify-content-start align-items-start">
                                        <span class="me-2" style="color: #ff4500; font-size: 1.1rem;">✔</span>
                                        <span>Integration with postoperative radiotherapy or chemotherapy when needed</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="clearfix"></div>
                    </div><!-- News Post /-->
                </div><!-- Content Side Ends /-->

                <div class="services-sidebar sidebar medium-3 small-12 cell">

                    <div class="widget">
                        <h2>Related Services</h2>

                        <div class="widget-content">
                            <ul class="menu vertical">
                                <li><a href="{{ route('minimally-invasive-spine-surgeries') }}">Minimally Invasive Spine
                                        Surgeries</a></li>
                                {{-- <li><a href="{{ route('neuro-oncology') }}">Neuro Oncology</a></li> --}}
                                <li><a href="{{ route('neuro-trauma') }}">Neuro Trauma</a></li>
                                <li><a href="{{ route('vascular-neurosurgery') }}">Vascular Neurosurgery</a></li>
                                <li><a href="{{ route('epilepsy-surgery') }}">Epilepsy Surgery</a></li>
                                <li><a href="{{ route('endoscopic-skull-base-surgery') }}">Endoscopic Skull Base
                                        Surgery</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="widget">
                        <h2>Contact Us</h2>

                        <div class="widget-content">
                            <form>
                                <input type="text" placeholder="Your Name..." />
                                {{-- <input type="text" placeholder="Your Email ...." /> --}}
                                <input type="text" placeholder="Your Phone..." />
                                {{-- <input type="text" placeholder="Email Subject ...." />
                                <label>Select Your Image
                                    <input type="file" />
                                </label> --}}
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
