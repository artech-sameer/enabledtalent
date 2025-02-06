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
    <title><?php echo e(get_app_setting('app_name')); ?> | <?php echo e(Str::title(str_replace('-', ' ', request()->segment(1)))); ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset(get_app_setting('favicon')??'admin-assets/images/favicon.png')); ?>">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/all-fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/feather.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style-coming.css')); ?>">

</head>

<body style="position: relative;">

    <!-- preloader -->
    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

<img class="coming-soon-img" src="<?php echo e(asset('assets/img/coming-soon/02.jpg')); ?>">
    
    <!-- coming soon -->
    <div class="coming-soon pt-120 pb-90" style="position:relative; z-index: 9999;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-9 col-lg-7">
                    <div class="coming-soon-content text-white text-center">
                        
                        <h1 class="text-white">Website is under construction</h1>
                        
                        <div id="countdown" class="countdown-wrap my-4"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg4">
                    <?php echo e(html()->form('POST', route('web.coming-soon.password'))->class('form')->attribute('enctype', 'multipart/form-data')->id('storeForm')->open()); ?>

                    
                    
                    <div class="newsletter-form position-relative form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <?php echo e(html()->password('password')->class('input-newsletter form-control')->placeholder('Password')->attribute('autocomplete', 'new-password')); ?>

                        <?php echo e(html()->button('Submit')->type('submit')); ?>

                    </div>
                    <small class="text-danger"><?php echo e($errors->first('password')); ?></small>

                    
                    <?php echo e(html()->form()->close()); ?>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- coming soon end -->
    


    <!-- js -->
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/modernizr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.appear.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/counter-up.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/masonry.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/coming-soon.blade.php ENDPATH**/ ?>