<div class="user-profile-sidebar">
                            <div class="user-profile-sidebar-top">
                                <div class="user-profile-img">
                                    <?php if(empty(auth('company')->user()->avatar)): ?>
                                        <img src="<?php echo e(asset('assets/img/candidate.png')); ?>" alt="">
                                    <?php else: ?>
                                        <img src="<?php echo e(auth('company')->user()->avatar); ?>" alt="">
                                    <?php endif; ?>
                                    <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                                    <input type="file" class="profile-img-file">
                                </div>
                                <h4><?php echo e(auth('company')->user()->details->company_name); ?></h4>
                                <?php if(auth('company')->user()->details->industry): ?>
                                    <p><?php echo e(auth('company')->user()->details->industry->name); ?></p>
                                <?php endif; ?>
                            </div>
                            <ul class="user-profile-sidebar-list">
                                <li>
                                  <a class="active" href="employer-dashboard.html"><i class="far fa-gauge-high"></i> Dashboard</a>
                                </li>

                                <li>
                                  <a href="<?php echo e(route('company.details.detail')); ?>"><i class="far fa-user-tie"></i> Company Profile</a>
                                </li>

                                
                                <li><a href="<?php echo e(route('company.logout')); ?>"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/company/layouts/aside.blade.php ENDPATH**/ ?>