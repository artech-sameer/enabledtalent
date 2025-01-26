@extends('common.layouts.master')
@push('links')
@endpush


@section('main')
<!-- employer-dashboard -->
        <div class="user-profile py-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        @include('company.layouts.aside')


                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="dashboard-widget dashboard-widget-color-1">
                                        <div class="dashboard-widget-info">
                                            <h1>620</h1>
                                            <span>Posted Jobs</span>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <i class="fal fa-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dashboard-widget dashboard-widget-color-2">
                                        <div class="dashboard-widget-info">
                                            <h1>25k</h1>
                                            <span>Profile Views</span>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <i class="fal fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dashboard-widget dashboard-widget-color-3">
                                        <div class="dashboard-widget-info">
                                            <h1>150</h1>
                                            <span>Total Application</span>
                                        </div>
                                        <div class="dashboard-widget-icon">
                                            <i class="fal fa-layer-group"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-8">
                                    <div class="user-profile-card">
                                        <h4 class="user-profile-card-title">Your Profile Views</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="user-profile-card">
                                        <h4 class="user-profile-card-title">Notifications</h4>
                                        <div class="user-notification">
                                            <div class="user-notification-item">
                                                <a href="#">
                                                    <div class="user-notification-icon"> 
                                                        <i class="far fa-briefcase"></i>
                                                    </div>
                                                    <div class="user-notification-info">
                                                        <p>You Have New Application For <b>Web Designer</b>!</p>
                                                        <span>just now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user-notification-item">
                                                <a href="#">
                                                    <div class="user-notification-icon"> 
                                                        <i class="far fa-envelope"></i>
                                                    </div>
                                                    <div class="user-notification-info">
                                                        <p>Tesla Jonsin Has Sent You <b>Private Message</b>!</p>
                                                        <span>15 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user-notification-item">
                                                <a href="#">
                                                    <div class="user-notification-icon">
                                                        <i class="far fa-briefcase"></i>
                                                    </div>
                                                    <div class="user-notification-info">
                                                        <p><b>Henry Wilson</b> Applied For A Job Senior Product Designer</p>
                                                        <span>2 months ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user-notification-item">
                                                <a href="#">
                                                    <div class="user-notification-icon"> 
                                                        <i class="far fa-comment"></i>
                                                    </div>
                                                    <div class="user-notification-info">
                                                        <p>You Have New Review For <b>#53454</b> This List</p>
                                                        <span>15 days ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="user-profile-card">
                                        <h4 class="user-profile-card-title">Recent Applicants</h4>
                                        <div class="user-profile-candidate">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="candidate-item">
                                                        <div class="candidate-bio">
                                                            <div class="candidate-img">
                                                                <img src="assets/img/candidate/01.jpg" alt="thumb">
                                                            </div>
                                                            <div class="candidate-bio-content">
                                                                <h5><a href="#">Laura Packer</a></h5>
                                                                <span>Product Designer</span>
                                                                <div class="candidate-bio-rate">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span>(560)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="candidate-content">
                                                            <p><i class="far fa-location-dot"></i> 5/B Milford Road, New York</p>
                                                            <div class="candidate-skill">
                                                                <a href="#">Figma</a>
                                                                <a href="#">App</a>
                                                                <a href="#">PSD</a>
                                                                <a href="#">Adobe XD</a>
                                                                <a href="#">Digital</a>
                                                            </div>
                                                            <div class="candidate-bottom">
                                                                <div class="candidate-salary">
                                                                    $80 <span>/Hour</span>
                                                                </div>
                                                                <a href="#" class="theme-btn">View Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="candidate-item">
                                                        <div class="candidate-bio">
                                                            <div class="candidate-img">
                                                                <img src="assets/img/candidate/02.jpg" alt="thumb">
                                                            </div>
                                                            <div class="candidate-bio-content">
                                                                <h5><a href="#">Shirley Grigsby</a></h5>
                                                                <span>Product Designer</span>
                                                                <div class="candidate-bio-rate">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span>(560)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="candidate-content">
                                                            <p><i class="far fa-location-dot"></i> 5/B Milford Road, New York</p>
                                                            <div class="candidate-skill">
                                                                <a href="#">Figma</a>
                                                                <a href="#">App</a>
                                                                <a href="#">PSD</a>
                                                                <a href="#">Adobe XD</a>
                                                                <a href="#">Digital</a>
                                                            </div>
                                                            <div class="candidate-bottom">
                                                                <div class="candidate-salary">
                                                                    $80 <span>/Hour</span>
                                                                </div>
                                                                <a href="#" class="theme-btn">View Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="candidate-item">
                                                        <div class="candidate-bio">
                                                            <div class="candidate-img">
                                                                <img src="assets/img/candidate/03.jpg" alt="thumb">
                                                            </div>
                                                            <div class="candidate-bio-content">
                                                                <h5><a href="#">Marie Choate</a></h5>
                                                                <span>Product Designer</span>
                                                                <div class="candidate-bio-rate">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span>(560)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="candidate-content">
                                                            <p><i class="far fa-location-dot"></i> 5/B Milford Road, New York</p>
                                                            <div class="candidate-skill">
                                                                <a href="#">Figma</a>
                                                                <a href="#">App</a>
                                                                <a href="#">PSD</a>
                                                                <a href="#">Adobe XD</a>
                                                                <a href="#">Digital</a>
                                                            </div>
                                                            <div class="candidate-bottom">
                                                                <div class="candidate-salary">
                                                                    $80 <span>/Hour</span>
                                                                </div>
                                                                <a href="#" class="theme-btn">View Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="candidate-item">
                                                        <div class="candidate-bio">
                                                            <div class="candidate-img">
                                                                <img src="assets/img/candidate/04.jpg" alt="thumb">
                                                            </div>
                                                            <div class="candidate-bio-content">
                                                                <h5><a href="#">William Hess</a></h5>
                                                                <span>Product Designer</span>
                                                                <div class="candidate-bio-rate">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <span>(560)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="candidate-content">
                                                            <p><i class="far fa-location-dot"></i> 5/B Milford Road, New York</p>
                                                            <div class="candidate-skill">
                                                                <a href="#">Figma</a>
                                                                <a href="#">App</a>
                                                                <a href="#">PSD</a>
                                                                <a href="#">Adobe XD</a>
                                                                <a href="#">Digital</a>
                                                            </div>
                                                            <div class="candidate-bottom">
                                                                <div class="candidate-salary">
                                                                    $80 <span>/Hour</span>
                                                                </div>
                                                                <a href="#" class="theme-btn">View Profile</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- employer-dashboard end -->   
@endsection