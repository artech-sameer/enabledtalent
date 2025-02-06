@php
    $categories = App\Models\JobCategory::orderBy('name', 'asc')->where(['status_id' => 14, 'featured' => 1])->paginate(20);
@endphp

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

                    @foreach($categories as $category)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <a href="#" class="category-item">
                                <div class="category-icon">
                                    <i class="flaticon-promotion"></i>
                                </div>
                                <div class="category-content">
                                    <h6>{{ $category->name }}</h6>
                                    {{-- <p>280 Jobs Available</p> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach


                    {{-- <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-money-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Finance</h6>
                                <p>150 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-headhunting"></i>
                            </div>
                            <div class="category-content">
                                <h6>Human Resource</h6>
                                <p>350 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-support-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Customer Service</h6>
                                <p>420 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-startup"></i>
                            </div>
                            <div class="category-content">
                                <h6>Management</h6>
                                <p>170 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-monitor-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Software</h6>
                                <p>520 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-production"></i>
                            </div>
                            <div class="category-content">
                                <h6>Retail & Products</h6>
                                <p>210 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-stats"></i>
                            </div>
                            <div class="category-content">
                                <h6>Security Analyst</h6>
                                <p>160 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-graph"></i>
                            </div>
                            <div class="category-content">
                                <h6>Market Research</h6>
                                <p>230 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-vector-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Design</h6>
                                <p>280 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-creativity-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Development</h6>
                                <p>270 Jobs Available</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="category-item">
                            <div class="category-icon">
                                <i class="flaticon-first-aid-kit-1"></i>
                            </div>
                            <div class="category-content">
                                <h6>Health And Care</h6>
                                <p>190 Jobs Available</p>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- category-area end -->