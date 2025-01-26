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

                        
                        @if(auth('company')->user())
                            <div class="header-nav-right">
                                <div class="header-account">
                                    <div class="dropdown">
                                        <div data-bs-toggle="dropdown" aria-expanded="false">
                                            @if(empty(auth('company')->user()->avatar))
                                                <img src="{{ asset('assets/img/candidate.png') }}" alt="">
                                            @else
                                                <img src="{{ auth('company')->user()->avatar }}" alt="">
                                            @endif
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="{{ route('company.dashboard.index') }}"><i class="far fa-gauge-high"></i> My Account</a></li>
                                            <li><a class="dropdown-item" href="{{ route('company.logout') }}"><i class="far fa-sign-out"></i> Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @elseif(auth('candidate')->user())
                            <div class="header-nav-right">
                                <div class="header-account">
                                    <div class="dropdown">
                                        <div data-bs-toggle="dropdown" aria-expanded="false">
                                            @if(empty(auth('candidate')->user()->avatar))
                                                <img src="{{ asset('assets/img/candidate.png') }}" alt="">
                                            @else
                                                <img src="{{ auth('candidate')->user()->avatar }}" alt="">
                                            @endif
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="{{ route('candidate.dashboard.index') }}"><i class="far fa-gauge-high"></i> My Account</a></li>
                                            <li><a class="dropdown-item" href="{{ route('candidate.logout') }}"><i class="far fa-sign-out"></i> Log Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="header-nav-right">
                                <div class="header-btn">
                                    <a href="{{ route('web.signin') }}" class="theme-btn theme-btn2"><span class="far fa-sign-in"></span> Sign
                                        In</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </header>