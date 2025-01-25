@extends('common.layouts.master')
@push('links')
@endpush


@section('main')
       

        <!-- hero area -->
        <div class="hero-section">
            <div class="hero-single">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-7 mx-auto">
                            <div class="hero-content text-center">
                                <h6 class="hero-sub-title">We Have 250,000+ Live Jobs</h6>
                                <h1 class="hero-title">
                                    The #1 <span class="hero-span">Job Board for</span> Hiring or Find your next job
                                </h1>
                                <p>
                                    There are many variations of passages orem psum available but the majority have
                                    suffered alteration you are going to use a passage in some form by injected humour or randomised.
                                </p>
                                <div class="search-form">
                                    <div class="search-form-wrapper">
                                            <div class="row">
                                                <div class="col-md-4 px-0">
                                                    <div class="form-group">
                                                        <h4>Task Completed</h4>
                                                        <span>3 Million+</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-0">
                                                    <div class="form-group">
                                                        <h4>Assistants Assessed</h4>
                                                        <span>100+</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 px-0">
                                                    <div class="form-group">
                                                        <h4>Assistants Assessed</h4>
                                                        <span>100+</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->



        <!-- partner area -->
        <div class="partner-area bg pt-40 pb-30">
            <div class="container">
                <div class="partner-wrapper">
                    <div class="partner-slider owl-carousel owl-theme">
                        <div class="partner-item">
                            <img src="assets/img/partner/01.png" alt="thumb">
                        </div>
                        <div class="partner-item">
                            <img src="assets/img/partner/02.png" alt="thumb">
                        </div>
                        <div class="partner-item">
                            <img src="assets/img/partner/03.png" alt="thumb">
                        </div>
                        <div class="partner-item">
                            <img src="assets/img/partner/04.png" alt="thumb">
                        </div>
                        <div class="partner-item">
                            <img src="assets/img/partner/05.png" alt="thumb">
                        </div>
                        <div class="partner-item">
                            <img src="assets/img/partner/06.png" alt="thumb">
                        </div>
                        <div class="partner-item">
                            <img src="assets/img/partner/03.png" alt="thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- partner area end -->



        <!-- candidate area -->
        <div class="candidate-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">How we operate</span>
                            <h2 class="site-title">We believe in delivering results that matter.</h2>
                        </div>
                    </div>
                </div>
                <section class="video">
                    
                      <!-- Video Section -->
                      <div class="video-section mx-auto" style="max-width: 820px;">
                          <video class="location-item" controls style="width: 100%; max-width: 820px;">
                              <source src="{{asset('Assets/video/video-1.mp4')}}" type="video/mp4">
                              <!-- Add more source tags for different formats, if needed -->
                              Your browser does not support the video tag.
                          </video>
                      </div>
                    
                      <div class="row">
                        <div class="col-md-12 text-center">
                        <!-- Button -->
                        <a href="#" class="theme-btn">Get Started</a>
                        </div>
                    </div>
              </section>
            </div>
        </div>
        <!-- candidate area -->



         <!-- job area -->
        <div class="job-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Take the first step</span>
                            <p>We are excited to spend a few minutes getting to know your needs and addressing any questions about how collaborating with a Magic Executive Assistant works. If it is a match, we will assign you a highly skilled, vetted assistant within 72 hours.<p>
                        </div>
                    </div>
                </div>
                <div class="row" style="display: flex; flex-wrap: wrap;">
                    <div class="col-lg-6 col-md-6" style="flex: 1 1 100%; max-width: 50%; box-sizing: border-box;">
                        <div class="job-item" style="text-align: center; margin: auto; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('Assets/img/job/job-2.jpg')}}" alt="" style="width: 100%; max-width: 400px; height: auto; display: block; margin: auto; border-radius: 10px;">
                            <div class="job-bottom" style="margin-top: 15px; display: flex; justify-content: center;">
                                <a href="#" class="theme-btn" style="display: inline-block; padding: 10px 20px;">Want to Hire</a>
                            </div>
                        </div>
                    </div>
                    <!-- Second Column -->
                    <div class="col-lg-6 col-md-6" style="flex: 1 1 100%; max-width: 50%; box-sizing: border-box;">
                        <div class="job-item" style="text-align: center; margin: auto; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('Assets/img/job/job-2.jpg')}}" alt="" style="width: 100%; max-width: 400px; height: auto; display: block; margin: auto; border-radius: 10px;">
                            <div class="job-bottom text-center" style="margin-top: 15px; display: flex; justify-content: center;">
                                <a href="#" class="theme-btn" style="display: inline-block; padding: 10px 20px;">Get Hired</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- job area end -->




        <!-- process-area -->
        <div class="process-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Process</span>
                            <h2 class="site-title">How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="process-item">
                            <span class="process-count">01</span>
                            <div class="process-icon">
                                <i class="fal fa-sign-in"></i>
                            </div>
                            <div class="process-content">
                                <h5>Sign Up Account</h5>
                                <p>It is a long established fact that the reader will be distracted readable. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="process-item">
                            <span class="process-count">02</span>
                            <div class="process-icon">
                                <i class="fal fa-file-user"></i>
                            </div>
                            <div class="process-content">
                                <h5>Upload Your Resume</h5>
                                <p>It is a long established fact that the reader will be distracted readable. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="process-item">
                            <span class="process-count">03</span>
                            <div class="process-icon">
                                <i class="fal fa-search"></i>
                            </div>
                            <div class="process-content">
                                <h5>Search Your Job</h5>
                                <p>It is a long established fact that the reader will be distracted readable. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="process-item">
                            <span class="process-count">04</span>
                            <div class="process-icon">
                                <i class="fal fa-briefcase"></i>
                            </div>
                            <div class="process-content">
                                <h5>Apply For Job</h5>
                                <p>It is a long established fact that the reader will be distracted readable. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- process-area end -->



        <!-- employer-area -->
        <div class="employer-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Employers</span>
                            <h2 class="site-title">Top Company</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/01.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Circle Pixel</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 20 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/02.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Turbo Finance</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 30 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/03.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Larana Inc</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 25 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/04.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Rubic Corner</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 45 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/05.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Mariana Cahaya</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 80 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/06.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Ladang Tech</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 120 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/07.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Wardiere Inc</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 250 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="employer-item">
                            <div class="employer-img">
                                <img src="assets/img/job/08.jpg" alt="">
                            </div>
                            <div class="employer-content">
                                <h5><a href="#">Fire Digital</a></h5>
                                <span class="employer-job"><i class="far fa-briefcase"></i> 350 - Open Jobs</span>
                                <p><i class="far fa-location-dot"></i> Milford Road, New York</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- employer-area end -->



        <!-- location-area -->
        <div class="location-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Location</span>
                            <h2 class="site-title">Jobs By Location</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="location-item">
                            <div class="location-img">
                                <img src="assets/img/location/01.jpg" alt="">
                            </div>
                            <div class="location-content">
                                <h5><a href="#">Berlin, Germany</a></h5>
                                <div class="location-content-info">
                                    <span class="location-vacancy"><i class="far fa-briefcase"></i> 50 Vacancy</span>
                                    <span class="location-company"><i class="far fa-building"></i> 120 Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="location-item">
                            <div class="location-img">
                                <img src="assets/img/location/02.jpg" alt="">
                            </div>
                            <div class="location-content">
                                <h5><a href="#">San Francisco, CA</a></h5>
                                <div class="location-content-info">
                                    <span class="location-vacancy"><i class="far fa-briefcase"></i> 80 Vacancy</span>
                                    <span class="location-company"><i class="far fa-building"></i> 320 Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="location-item">
                            <div class="location-img">
                                <img src="assets/img/location/04.jpg" alt="">
                            </div>
                            <div class="location-content">
                                <h5><a href="#">Los Angeles, CA</a></h5>
                                <div class="location-content-info">
                                    <span class="location-vacancy"><i class="far fa-briefcase"></i> 60 Vacancy</span>
                                    <span class="location-company"><i class="far fa-building"></i> 250 Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="location-item">
                            <div class="location-img">
                                <img src="assets/img/location/04.jpg" alt="">
                            </div>
                            <div class="location-content">
                                <h5><a href="#">New York, USA</a></h5>
                                <div class="location-content-info">
                                    <span class="location-vacancy"><i class="far fa-briefcase"></i> 30 Vacancy</span>
                                    <span class="location-company"><i class="far fa-building"></i> 360 Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="location-item">
                            <div class="location-img">
                                <img src="assets/img/location/05.jpg" alt="">
                            </div>
                            <div class="location-content">
                                <h5><a href="#">Paris, France</a></h5>
                                <div class="location-content-info">
                                    <span class="location-vacancy"><i class="far fa-briefcase"></i> 190 Vacancy</span>
                                    <span class="location-company"><i class="far fa-building"></i> 520 Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="location-item">
                            <div class="location-img">
                                <img src="assets/img/location/06.jpg" alt="">
                            </div>
                            <div class="location-content">
                                <h5><a href="#">London, UK</a></h5>
                                <div class="location-content-info">
                                    <span class="location-vacancy"><i class="far fa-briefcase"></i> 110 Vacancy</span>
                                    <span class="location-company"><i class="far fa-building"></i> 350 Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- location-area end -->



        <!-- category-area -->
        <div class="category-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Category</span>
                            <h2 class="site-title">Browse By Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-promotion"></i>
                            </div>
                            <div class="category-content">
                                <h6>Marketing & Sale</h6>
                                <p>280 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Finance</h6>
                                <p>150 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-headhunting"></i>
                            </div>
                            <div class="category-content">
                                <h6>Human Resource</h6>
                                <p>350 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-support-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Customer Service</h6>
                                <p>420 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-startup"></i>
                            </div>
                            <div class="category-content">
                                <h6>Management</h6>
                                <p>170 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-monitor-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Software</h6>
                                <p>520 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-production"></i>
                            </div>
                            <div class="category-content">
                                <h6>Retail & Products</h6>
                                <p>210 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-stats"></i>
                            </div>
                            <div class="category-content">
                                <h6>Security Analyst</h6>
                                <p>160 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-graph"></i>
                            </div>
                            <div class="category-content">
                                <h6>Market Research</h6>
                                <p>230 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-vector-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Design</h6>
                                <p>280 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-creativity-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Development</h6>
                                <p>270 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-first-aid-kit-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Health And Care</h6>
                                <p>190 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- category-area end -->



        <!-- testimonial-area -->
        <div class="testimonial-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Testimonials</span>
                            <h2 class="site-title">What Our Client Say's</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected popularity belief believable.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/01.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Reid E Butt</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="flaticon-quote-1"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected popularity belief believable.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/02.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Gordo Novak</h5>
                                <p>Graphics Designer</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="flaticon-quote-1"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected popularity belief believable.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/03.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Parker Jimenez</h5>
                                <p>Project Manager</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="flaticon-quote-1"></i></span>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="testimonial-quote">
                            <p>
                                There are many variations of passages available but the majority have suffered alteration in some form by injected popularity belief believable.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/04.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h5>Sylvia H Green</h5>
                                <p>Digital Marketer</p>
                            </div>
                        </div>
                        <span class="testimonial-quote-icon"><i class="flaticon-quote-1"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-area end -->



        <!-- cta-area -->
        <div class="cta-area pb-120">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="cta-content">
                                <h1>Get Your Dream Job With Us</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet leo tris commodo
                                    leo sed, scelerisque turpis. Ut in finibus tellus. </p>
                                <a href="#" class="theme-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area end -->



        <!-- blog-area -->
        <div class="blog-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Blog</span>
                            <h2 class="site-title">Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/01.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <h5 class="blog-title">
                                    <a href="#">There are many variations of the passages available suffered</a>
                                </h5>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> August 30, 2024</a></li>
                                    </ul>
                                </div>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </p>
                                <a href="#" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/02.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <h5 class="blog-title">
                                    <a href="#">There are many variations of the passages available suffered</a>
                                </h5>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> August 30, 2024</a></li>
                                    </ul>
                                </div>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </p>
                                <a href="#" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/03.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <h5 class="blog-title">
                                    <a href="#">There are many variations of the passages available suffered</a>
                                </h5>
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> August 30, 2024</a></li>
                                    </ul>
                                </div>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </p>
                                <a href="#" class="theme-btn">Read More mmm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->



    
@endsection