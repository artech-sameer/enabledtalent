@extends('common.layouts.master')
@push('links')
@endpush


@section('main')
       
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
                            <img src="{{asset('assets/img/job/job-2.jpg')}}" alt="" style="width: 100%; max-width: 400px; height: auto; display: block; margin: auto; border-radius: 10px;">
                            <div class="job-bottom" style="margin-top: 15px; display: flex; justify-content: center;">
                                <a href="{{ route('company.login.form') }}" class="theme-btn" style="display: inline-block; padding: 10px 20px;">Want to Hire</a>
                            </div>
                        </div>
                    </div>
                    <!-- Second Column -->
                    <div class="col-lg-6 col-md-6" style="flex: 1 1 100%; max-width: 50%; box-sizing: border-box;">
                        <div class="job-item" style="text-align: center; margin: auto; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <img src="{{asset('assets/img/job/job-2.jpg')}}" alt="" style="width: 100%; max-width: 400px; height: auto; display: block; margin: auto; border-radius: 10px;">
                            <div class="job-bottom text-center" style="margin-top: 15px; display: flex; justify-content: center;">
                                <a href="{{ route('candidate.login.form') }}" class="theme-btn" style="display: inline-block; padding: 10px 20px;">Get Hired</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- job area end -->
@endsection