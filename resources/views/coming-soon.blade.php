<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>{{get_app_setting('app_name')}} | {{Str::title(str_replace('-', ' ', request()->segment(1)))}}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset(get_app_setting('favicon')??'admin-assets/images/favicon.png')}}">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/feather.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->


    
    <!-- coming soon -->
    <div class="coming-soon pt-120 pb-90" style="background: url('assets/img/coming-soon/02.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-9 col-lg-7">
                    <div class="coming-soon-content text-white text-center">
                        {{-- <img src="{{ asset(get_app_setting('logo')) }}"> --}}
                        <h1>Website is under construction</h1>
                        {{-- <p class="lead">Our website is under construction. We'll be here soon with our new awesome site,
                            subscribe to be notified.</p> --}}
                        <div id="countdown" class="countdown-wrap my-4"><div class="row" ><div class="col countdown-single"><h2 class="mb-0">26</h2><h5 class="mb-0">Days</h5></div><div class="col countdown-single"><h2 class="mb-0">02</h2><h5 class="mb-0">Hours</h5></div><div class="col countdown-single"><h2 class="mb-0">13</h2><h5 class="mb-0">Minutes</h5></div><div class="col countdown-single"><h2 class="mb-0">35</h2><h5 class="mb-0">Seconds</h5></div></div></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg4">
                    {{ html()->form('POST', route('web.coming-soon.password'))->class('form')->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}
                    
                    
                    <div class="newsletter-form position-relative form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {{ html()->password('password')->class('input-newsletter form-control')->placeholder('Password')->attribute('autocomplete', 'new-password') }}
                        {{ html()->button('Submit')->type('submit') }}
                    </div>
                    <small class="text-danger">{{ $errors->first('password') }}</small>

                    
                    {{ html()->form()->close() }}
                    
                </div>
            </div>
        </div>
    </div>
    <!-- coming soon end -->
    


    <!-- js -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/counter-up.js')}}"></script>
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>