<header class="header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('web.home') }}">


                        <img src="{{ asset(get_app_setting('logo')) }}" alt="logo">


                    </a>
                    <div class="mobile-menu-right">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                           <li class="nav-item"><a class="nav-link" href="{{ route('web.home') }}">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Job Seekeers</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Employers</a></li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-btn">
                                <a href="#" class="theme-btn theme-btn2"><span class="far fa-sign-in"></span> Sign
                                    In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>