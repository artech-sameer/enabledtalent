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
                                    Find The Job Easiest Way That Fits Your Life And Enjoy
                                </h1>
                                <p>
                                    There are many variations of passages orem psum available but the majority have
                                    suffered alteration you are going to use a passage in some form by injected humour or randomised.
                                </p>
                                <div class="search-form">
                                    <div class="search-form-wrapper">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-4 px-0">
                                                    <div class="form-group">
                                                        <div class="form-group-icon">
                                                            <input type="text" class="form-control"
                                                                placeholder="Type Keyword...">
                                                            <i class="fe-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <div class="form-group">
                                                        <div class="form-group-icon">
                                                            <select class="select">
                                                                <option value="">Location</option>
                                                                <option value="1">Brazil</option>
                                                                <option value="2">Canada</option>
                                                                <option value="3">Germany</option>
                                                                <option value="4">Italy</option>
                                                                <option value="5">Japan</option>
                                                                <option value="6">USA</option>
                                                                <option value="7">UK</option>
                                                            </select>
                                                            <i class="fe-map-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 px-0">
                                                    <div class="form-group">
                                                        <div class="form-group-icon">
                                                            <select class="select">
                                                                <option value="">Category</option>
                                                                <option value="1">Web Designer</option>
                                                                <option value="2">Developer</option>
                                                                <option value="3">Software</option>
                                                                <option value="4">Finance</option>
                                                                <option value="5">Management</option>
                                                                <option value="6">Advertising</option>
                                                                <option value="7">Accountant</option>
                                                            </select>
                                                            <i class="fe-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 px-1">
                                                    <div class="form-group">
                                                        <button type="submit" class="theme-btn w-100"><span
                                                                class="fe-search"></span>Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="popular-search">
                                        <span>Popular Search: </span>
                                        <a href="#">Web</a>
                                        <a href="#">App</a>
                                        <a href="#">Software</a>
                                        <a href="#">Designer</a>
                                        <a href="#">Development</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->
    
@endsection