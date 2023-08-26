@extends('front.layouts.other_layout')
@section('content')
<!-- Start home -->
<section class="bg-half page-next-level">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Job Category</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li>
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Categories</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- SERVICE START -->
<section class="section">
    <div class="container">

        <div class="row">
             {{-- {{ dd($teacher) }} --}}
             @foreach ($jobCategories as $jobCategory)
            <div class="col-lg-4 col-md-6 mb-4 pb-2">

                <div class="services-box">
                    <div class="service-icon mb-3">
                        <i class="mdi mdi-account-multiple h1"></i>
                    </div>
                    <div class="services-desc">
                        <h5 class="mb-2"><a href="#" class="text-dark"></a>{{ $jobCategory-> job_category_name }}</h5>
                        <p class="text-muted text-center mb-0">{{ $jobCategory-> description }}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>


        <div class="row">
            <div class="col-12 text-center">
                <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE END -->

<!-- Job Categories INFORMATION START -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title title-line pb-5">Jobs Information</h4>
                    <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly
                        match you with the right freelancers.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 mt-4 pt-2">
                        <a href="#">
                            <div class="service-info-img position-relative d-block overflow-hidden">
                                <img src="{{ asset('images/front_img/service/img-1.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 mt-4 pt-2">
                        <a href="#">
                            <div class="service-info-img position-relative d-block overflow-hidden">
                                <img src="{{ asset('images/front_img/service/img-2.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4 pt-2">
                        <a href="#">
                            <div class="service-info-img position-relative d-block overflow-hidden">
                                <img src="{{ asset('images/front_img/service/img-3.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 mt-4 pt-2">
                        <a href="#">
                            <div class="service-info-img position-relative d-block overflow-hidden">
                                <img src="{{ asset('images/front_img/service/img-4.jpg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 pt-2">
                <p class="text-muted mb-2">Felis quis tortor malesuada pretium pellentesque auctor neque nec urna at
                    sapien ipsum porta, auctor quis euismod aenean viverra rhoncus pede Pellentesque habitant morbi
                    tristique.</p>
                <div class="job-details-desc-item">
                    <div class="float-left mr-2">
                        <i class="mdi mdi-chevron-right text-muted"></i>
                    </div>
                    <p class="text-muted mb-1">Aenean tellus metus bibendum sed posuere nunc.</p>
                </div>

                <div class="job-details-desc-item">
                    <div class="float-left mr-2">
                        <i class="mdi mdi-chevron-right text-muted"></i>
                    </div>
                    <p class="text-muted mb-1">Integer ante arcu consectetuer eget posuere ut mauris.</p>
                </div>

                <div class="job-details-desc-item">
                    <div class="float-left mr-2">
                        <i class="mdi mdi-chevron-right text-muted"></i>
                    </div>
                    <p class="text-muted mb-1">Donec mollis nec justo pellentesque facilisis.</p>
                </div>

                <div class="job-details-desc-item">
                    <div class="float-left mr-2">
                        <i class="mdi mdi-chevron-right text-muted"></i>
                    </div>
                    <p class="text-muted mb-1">Curabitur aliquam Praesent egestas neque eu enim.</p>
                </div>

                <div class="job-details-desc-item">
                    <div class="float-left mr-2">
                        <i class="mdi mdi-chevron-right text-muted"></i>
                    </div>
                    <p class="text-muted mb-0"> Praesent massa at ligula laoreet iaculis.</p>
                </div>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary-outline">Read More <i
                            class="mdi mdi-chevron-double-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE INFORMATION END -->

<!-- subscribe start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="float-left position-relative notification-icon mr-2">
                    <i class="mdi mdi-bell-outline text-primary"></i>
                    <span class="badge badge-pill badge-danger">1</span>
                </div>
                <h5 class="mt-2 mb-0">Subscribe To Job Notification</h5>
            </div>
            <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                <form>
                    <div class="form-group mb-0">
                        <div class="input-group mb-0">
                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :"
                                   required="" aria-describedby="newssubscribebtn">
                            <div class="input-group-append">
                                <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- subscribe end -->
@end
section
