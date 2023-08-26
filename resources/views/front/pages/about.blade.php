@extends('front.layouts.other_layout')
@section('content')

<section class="main">

<!-- Start home -->
<section class="bg-half page-next-level" style="background: url('../images/front_img/bg-page-header.jpg') center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">About Us</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li>
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">About</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->


<!-- ABOUT US START -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-4">
                <img src="{{ asset('images/front_img/about.jpg')}}" class="img-fluid rounded shadow" alt="">
            </div>

            <div class="col-lg-7 col-md-8">
                <div class="about-desc ml-lg-4">
                    <h4 class="text-dark">About us</h4>

                    <p class="text-muted">Aenean eros et nisl sagittis as vestibulum at Nullam nulla eros ultricies site
                        amet nonummy id imperdiet feugiat pede as Sed lectuse Donec mollis hendrerit Phasellus at nec
                        sem in at pellentesque facilisis at Praesent congue erat at massa Sed sit cursus turpis vitae
                        tortor that a Donec posuere as vulputate arcu Phasellus accumsan velit.</p>

                    <p class="text-muted">Maecenas tempus tellus eget as that condimentum rhoncus sem quam semper libero
                        amete adipiscing sem neque sed ipsum Nam quam nunce blandit at luctus pulvinar hendrerit id
                        lorem Maecenas nec et ante tincidunt tempus.</p>

                    <p class="text-muted">Sed consequat leo eget bibendum sodales augue at velit cursus nunc.</p>

                    <a href="javascript:void(0)" class="btn btn-primary">Apply now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT US END -->



<!-- COMPANY TESTIMONIAL START -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h4 class="text-dark font-weight-">Company Testimonial</h4>
                <div class="blog-post-border mt-3 mb-3"></div>
                <h5 class="text-muted mb-1">Maidathemes</h5>
                <p class="mb-4 f-16"><a href="#" class="text-muted"><i class="mdi mdi-earth mr-2"></i>Helpyea.com</a>
                </p>
                <p class="text-muted f-14">Maecenas tempus tellus et condimentum that as rhoncus sem quam semper
                    adipiscing sem neque sed ipsum Nam quam nunc blandit at luctus at id lorem maecenas nec odio et ante
                    tincidunt tempus Donec vitae venenatis faucibus quis ante.</p>
                <div class="job-details-desc-item">
                    <div class="float-left mr-3">
                        <i class="mdi mdi-minus text-muted f-16"></i>
                    </div>
                    <p class="text-muted f-14 mb-1">Aenean leo ligula porttitor eu consequat eleifend enim.</p>
                </div>
                <div class="job-details-desc-item">
                    <div class="float-left mr-3">
                        <i class="mdi mdi-minus text-muted f-16"></i>
                    </div>
                    <p class="text-muted f-14 mb-1">Quisque rutrum Aenean imperdiet nisi vel augue.</p>
                </div>
                <div class="job-details-desc-item mb-4">
                    <div class="float-left mr-3">
                        <i class="mdi mdi-minus text-muted f-16"></i>
                    </div>
                    <p class="text-muted f-14 mb-1">Maecenas tempus tellus sem semper libero.</p>
                </div>


                <ul class="list-inline pt-4 border-top mb-4">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-primary-outline">Learn More</a>
                    </li>
                    <li class="list-inline-item float-right mt-2">
                        <ul class="list-inline bolg-post-icon mb-0">
                            <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-whatsapp"></i></a>
                            </li>
                            <li class="list-inline-item f-20"><a href="#" class=""><i class="mdi mdi-instagram"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-7">
                <div class="blog-post-testi">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-4">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link about-us active" id="v-pills-home-tab" data-toggle="pill"
                                   href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <div class="blog-post-testi-img">
                                        <img src="{{ asset('images/front_img/blog/img-7.jpg') }}" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                        <div class="blog-post-overlay">
                                            <div class="blog-post-testi-icon text-center">
                                                <i class="mdi mdi-check  text-white h4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="nav-link about-us" id="v-pills-profile-tab" data-toggle="pill"
                                   href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                   aria-selected="false">
                                    <div class="blog-post-testi-img">
                                        <img src="{{ asset('images/front_img/blog/img-8.jpg') }}" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                        <div class="blog-post-overlay">
                                            <div class="blog-post-testi-icon text-center">
                                                <i class="mdi mdi-check text-white h4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="nav-link about-us" id="v-pills-messages-tab" data-toggle="pill"
                                   href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                   aria-selected="false">
                                    <div class="blog-post-testi-img">
                                        <img src="{{ asset('images/front_img/blog/img-9.jpg') }}" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                        <div class="blog-post-overlay">
                                            <div class="blog-post-testi-icon text-center">
                                                <i class="mdi mdi-check text-white h4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="nav-link about-us" id="v-pills-settings-tab" data-toggle="pill"
                                   href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                   aria-selected="false">
                                    <div class="blog-post-testi-img">
                                        <img src="{{ asset('images/front_img/blog/img-10.jp') }}g" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                        <div class="blog-post-overlay">
                                            <div class="blog-post-testi-icon text-center">
                                                <i class="mdi mdi-check text-white h4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-9 col-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                     aria-labelledby="v-pills-home-tab">
                                    <div>
                                        <img src="{{ asset('images/front_img/blog/img-7.jpg') }}" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                     aria-labelledby="v-pills-profile-tab">
                                    <div>
                                        <img src="{{ asset('images/front_img/blog/img-8.jpg') }}" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                     aria-labelledby="v-pills-messages-tab">
                                    <div>
                                        <img src="{{ asset('images/blog/img-9.jpg') }} alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                     aria-labelledby="v-pills-settings-tab">
                                    <div>
                                        <img src="{{ asset('images/blog/img-10.jpg') }}" alt=""
                                             class="img-fluid mx-auto d-block rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COMPANY TESTIMONIAL START -->





<!-- subscribe start -->
<section class="section bg-light">
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
                            <input name="email" id="email" type="email" class="form-control"
                                   placeholder="Enter Your email here" required="" aria-describedby="newssubscribebtn">
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


</section>

@endsection







