<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="referrer" content="no-referrer" />
    <title>
        <?php echo e(get_app_setting('app_name')); ?> | 
        <?php if(auth()->guard('company')->check()): ?>
            <?php echo e(auth('company')->user()->details->company_name); ?>

        <?php else: ?>
            <?php if(request()->segment(3)): ?>
                <?php echo e(Str::title(str_replace('-', ' ', request()->segment(3)))); ?>

            <?php elseif(request()->segment(2)): ?>
                <?php echo e(Str::title(str_replace('-', ' ', request()->segment(2)))); ?>

            <?php elseif(request()->segment(1)): ?>
                <?php echo e(Str::title(str_replace('-', ' ', request()->segment(1)))); ?>

            <?php else: ?>
                Home
            <?php endif; ?>
        <?php endif; ?>
    </title>



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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>?version=<?php echo e(time()); ?>">

    <?php echo $__env->yieldPushContent('links'); ?>
</head>

<body class="home-3">

    <!-- preloader -->
    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
  


    <?php echo $__env->make('common.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="main">
      <?php $__env->startSection('main'); ?>
                <?php echo $__env->yieldSection(); ?> 
        </main>
    <?php echo $__env->make('common.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-angle-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
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
    <script src="<?php echo e(asset('assets/js/main.js')); ?>?version=<?php echo e(time()); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/crudAjax.js')); ?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <?php if(Session::has('message')): ?>
      <script type="text/javascript">
        Toastify({
          text: "<?php echo e(Session::get('message')); ?>",
          duration: 3000,
          close: true,
          gravity: "top", // `top` or `bottom`
          position: "right", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          className: "<?php echo e(Session::get('class')); ?>",
        }).showToast();
      </script>
    <?php endif; ?>
    <?php echo $__env->make('common.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->make('common.layouts.alert-popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/layouts/master.blade.php ENDPATH**/ ?>