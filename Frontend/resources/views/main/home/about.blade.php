@extends('layouts.main')
@section('content')
@section('title', 'About')

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">About Us</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="active" aria-current="page">About</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...::::Start About Us Top Section:::... -->
    <div class="about-us-top-area section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-top-img">
                        <img class="img-fluid" src="{{asset('assets/images/about/about.jpg')}}" alt="">
                    </div>
                    <div class="about-us-top-content text-center">
                        <h4>Welcome To Esther!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima consequuntur nulla voluptate sunt accusamus error dolores laboriosam facere, et saepe, velit incidunt doloremque ab eius. Explicabo magnam iure et.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End About Us Top Section:::... -->

    <!-- ...::::Start About Us Center Section:::... -->
    <div class="about-us-center-area section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-center-content text-center">
                        <h4>Why Chose Us?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Start About Promo Single Item -->
                    <div class="about-promo-single-item">
                        <img src="{{asset('assets/images/icon/about-icon-1.jpg')}}" alt="">
                        <h6>Creative Design</h6>
                        <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet enim</p>
                    </div> <!-- End About Promo Single Item -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Start About Promo Single Item -->
                    <div class="about-promo-single-item">
                        <img src="{{asset('assets/images/icon/about-icon-2.jpg')}}" alt="">
                        <h6>100% Money Back Guarantee</h6>
                        <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet enim</p>
                    </div> <!-- End About Promo Single Item -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Start About Promo Single Item -->
                    <div class="about-promo-single-item">
                        <img src="{{asset('assets/images/icon/about-icon-3.jpg')}}" alt="">
                        <h6>Online Support 24/7</h6>
                        <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet enim</p>
                    </div> <!-- End About Promo Single Item -->
                </div>
            </div>
        </div>
    </div> <!-- ...::::End  About Us Center Section -->

    <!-- ...::::Start About Us Center Section:::... -->
    <div class="about-us-bottom-area section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Start About Promo Single Item -->
                    <div class="about-feature-single-item">
                        <img class="img-fluid" src="{{asset('assets/images/about/about-feature-1.jpg')}}" alt="">
                        <h6>What Do We Do?</h6>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    </div> <!-- End About Promo Single Item -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Start About Promo Single Item -->
                    <div class="about-feature-single-item">
                        <img class="img-fluid" src="{{asset('assets/images/about/about-feature-2.jpg')}}" alt="">
                        <h6>Our Mission</h6>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    </div> <!-- End About Promo Single Item -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Start About Promo Single Item -->
                    <div class="about-feature-single-item">
                        <img class="img-fluid" src="{{asset('assets/images/about/about-feature-3.jpg')}}" alt="">
                        <h6>History Of Us</h6>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    </div> <!-- End About Promo Single Item -->
                </div>
            </div>
        </div>
    </div> <!-- ...::::End  About Us Center Section:::... -->

    <!-- ...::::Start Testimonial Section -->
    <div class="testimonial-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <h4 class="testimonial-title">What Our Custumers Say ?</h4>
            </div>
            <div class="row">
                <div class="testimonial-slider fix-slider-dots testimonial-slider-dots">
                    <!-- Start Testiminial Single Item -->
                    <div class="testimonial-slider-single">
                        <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                        <div class="testimonial-img">
                            <img src="{{asset("assets/images/testimonial/testimonial-1.png")}}" alt="">
                        </div>
                        <span class="name">Kathy Young</span>
                        <span class="job-title">CEO of SunPark</span>
                        <div class="testimonial-review">
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-empty"><i class="fa fa-star"></i></span>
                        </div>
                    </div> <!-- End Testiminial Single Item -->
                    <!-- Start Testiminial Single Item -->
                    <div class="testimonial-slider-single">
                        <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                        <div class="testimonial-img">
                            <img src="{{asset("assets/images/testimonial/testimonial-2.jpg")}}" alt="">
                        </div>
                        <span class="name">Kathy Young</span>
                        <span class="job-title">CEO of SunPark</span>
                        <div class="testimonial-review">
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-empty"><i class="fa fa-star"></i></span>
                        </div>
                    </div> <!-- End Testiminial Single Item -->
                    <!-- Start Testiminial Single Item -->
                    <div class="testimonial-slider-single">
                        <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/testimonial/testimonial-3.jpg')}}" alt="">
                        </div>
                        <span class="name">Kathy Young</span>
                        <span class="job-title">CEO of SunPark</span>
                        <div class="testimonial-review">
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-fill"><i class="fa fa-star"></i></span>
                            <span class="review-empty"><i class="fa fa-star"></i></span>
                        </div>
                    </div> <!-- End Testiminial Single Item -->
                </div>
            </div>
        </div>
    </div> <!-- End Testimonial Section:::... -->
@endsection
