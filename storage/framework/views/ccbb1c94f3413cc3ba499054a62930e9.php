<?php
    $categories = App\Models\JobCategory::orderBy('name', 'asc')->where(['status_id' => 14, 'featured' => 1])->paginate(20);
?>

 <!-- category-area -->
        <div class="category-area py-80">
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

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a href="#" class="category-item">
                                <div class="category-icon">
                                    <i class="flaticon-promotion"></i>
                                </div>
                                <div class="category-content">
                                    <h6><?php echo e($category->name); ?></h6>
                                    
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    
                </div>
            </div>
        </div>
        <!-- category-area end --><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/snippets/featured-category.blade.php ENDPATH**/ ?>