<?php $__env->startPush('links'); ?>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('main'); ?>
<!-- employer-dashboard -->
        <div class="user-profile py-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        <?php echo $__env->make('company.layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- employer-dashboard end -->   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('common.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/company/dashboard.blade.php ENDPATH**/ ?>