<header class="header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(route('web.home')); ?>">
                        <img src="<?php echo e(asset(get_app_setting('logo'))); ?>" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                           <li class="nav-item"><a class="nav-link" href="<?php echo e(route('web.home')); ?>">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Job Seekeers</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Employers</a></li>
                        </ul>

                        
                        <?php if(auth('company')->user()): ?>
                            <div class="header-nav-right">
                                <div class="header-account">
                                    <div class="dropdown">
                                        <div data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php if(empty(auth('company')->user()->avatar)): ?>
                                                <img src="<?php echo e(asset('assets/img/candidate.png')); ?>" alt="">
                                            <?php else: ?>
                                                <img src="<?php echo e(auth('company')->user()->avatar); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="<?php echo e(route('company.dashboard.index')); ?>"><i class="far fa-gauge-high"></i> My Account</a></li>
                                            <li><a class="dropdown-item" href="<?php echo e(route('company.logout')); ?>"><i class="far fa-sign-out"></i> Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(auth('candidate')->user()): ?>
                            <div class="header-nav-right">
                                <div class="header-account">
                                    <div class="dropdown">
                                        <div data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php if(empty(auth('candidate')->user()->avatar)): ?>
                                                <img src="<?php echo e(asset('assets/img/candidate.png')); ?>" alt="">
                                            <?php else: ?>
                                                <img src="<?php echo e(auth('candidate')->user()->avatar); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="<?php echo e(route('candidate.dashboard.index')); ?>"><i class="far fa-gauge-high"></i> My Account</a></li>
                                            <li><a class="dropdown-item" href="<?php echo e(route('candidate.logout')); ?>"><i class="far fa-sign-out"></i> Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="header-nav-right">
                                <div class="header-btn">
                                    <a href="<?php echo e(route('web.signin')); ?>" class="theme-btn theme-btn2"><span class="far fa-sign-in"></span> Sign
                                        In</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/layouts/header.blade.php ENDPATH**/ ?>