<?php $__env->startPush('links'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>


  <!-- login area -->
        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-8 col-lg-7 col-xl-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            
                            <p>Login with your employer account</p>
                        </div>

                        <?php echo e(html()->form('POST', route('company.login.post'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open()); ?>


<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <?php echo e(html()->label('Email', 'email')); ?>

    <?php echo e(html()->email('email')->class('form-control')->placeholder('Email')->attribute('autocomplete', 'email')); ?>

    <small class="text-danger"><?php echo e($errors->first('email')); ?></small>
</div>

<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
    <?php echo e(html()->label('Password', 'password')); ?>

    <?php echo e(html()->password('password')->class('form-control')->placeholder('Password')->attribute('autocomplete', 'new-password')); ?>

    <small class="text-danger"><?php echo e($errors->first('password')); ?></small>
</div>

<div class="d-flex justify-content-between mb-4">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember_me" id="remember">
        <label class="form-check-label" for="remember">
            Remember Me
        </label>
    </div>
    <a href="forgot-password.html" class="forgot-pass">Forgot Password?</a>
</div>

<?php echo e(html()->button('Login')->type('button')->class('theme-btn')->attribute('onclick = store(this)')); ?>




<?php echo e(html()->form()->close()); ?>




                   
                        <div class="login-footer">
                            <div class="login-divider"><span>Or</span></div>
                            <div class="social-login">
                                
                                <a href="<?php echo e(route('company.auth.google')); ?>" class="btn-gl"><i class="fab fa-google"></i> Login With Google</a>
                            </div>
                            <p>Don't have an account? <a href="<?php echo e(route('company.registration.form')); ?>">Sign Up.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login area end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('common.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/company/auth/login.blade.php ENDPATH**/ ?>