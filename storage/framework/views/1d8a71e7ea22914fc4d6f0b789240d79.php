<?php
    $companies = App\Models\Company::where(['featured' => 1, 'status_id' => 14])
    ->whereHas('details', function ($query) {
        $query->where('status_id', 14);
    })
    ->with(['details'])
    ->paginate(12);
?>

<?php if($companies->count() > 0): ?>
<!-- employer-area -->
        <div class="employer-area py-80 bg">
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
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="employer-item">
                                <div class="employer-img">
                                    <img src="<?php echo e(asset($company->details->logo)); ?>" alt="<?php echo e($company->details->company_name); ?>">
                                </div>
                                <div class="employer-content">
                                    <h5><a href="#"><?php echo e($company->details->company_name); ?></a></h5>
                                    <p><i class="far fa-location-dot"></i> <?php echo e($company->details->city->name); ?>, <?php echo e($company->details->state->name); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!-- employer-area end -->
    <?php endif; ?><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/snippets/featured-companies.blade.php ENDPATH**/ ?>