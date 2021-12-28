<div class="main-nav">
    <!-- Logo Start -->
    <a href="{{route('home')}}" class="logo pull-left d-flex align-items-center">
        <img src="{{asset('frontend/images/logo/logo.png')}}" alt="Manifest Logo">
    </a>
    <!-- Logo End -->

    <!-- Navigation Start -->
    <nav class="menu pull-right">
        <ul class="menu-container list-unstyled d-flex align-items-center">
            @if(Route::has('retail'))
            <!-- Mega Menu Start -->
            <li class="menu-item open-mega-menu">
                <a class="nav-link submenu-icon" href="javascript:;">Solutions</a>
                <div class="mega-menu box overflow-hidden rounded-bottom">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="mega-menu-img imgfix overlay-orange opacity-90">
                                <img src="{{asset('frontend/images/photos/navbar/innovate.jpg')}}" alt="Leading Innovation">
                                <div class="content text-center">
                                    <h3 class="text-white">Innovate. Create. Communicate.</h3>
                                    <p class="text-white m-b-30">We deliver. Period!</p>
                                    @if (Route::has('culture'))
                                    <a href="/culture" class="button button-manifest-primary transition-3d-hover">Learn More About Us!</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-25">
                            <div class="row no-gutters">
                                @if(Route::has('retail'))
                                <div class="col-lg-4">
                                    <span class="sub-title text-uppercase">Industry</span>
                                    <ul class="list-unstyled">
                                        @if (Route::has('retail'))
                                            <li><a href="{{route('retail')}}">Retail</a></li>
                                        @endif
                                        @if (Route::has('healthcare'))
                                            <li><a href="{{route('healthcare')}}">Healthcare</a></li>
                                        @endif
                                        @if (Route::has('blockchain'))
                                            <li><a href="{{route('blockchain')}}">Blockchain</a></li>
                                        @endif
                                        @if (Route::has('education'))
                                            <li><a href="{{route('education')}}">Education</a></li>
                                        @endif
                                        @if (Route::has('charity'))
                                            <li><a href="{{route('charity')}}">Charity</a></li>
                                        @endif
                                        @if (Route::has('government'))
                                            <li><a href="{{route('government')}}">Government</a></li>
                                        @endif
                                        @if (Route::has('technology'))
                                            <li><a href="{{route('technology')}}">Technology</a></li>
                                        @endif
                                        @if (Route::has('hr'))
                                            <li><a href="{{route('hr')}}">Human Resources</a></li>
                                        @endif
                                    </ul>
                                </div>
                                @endif
                                @if (Route::has('domains'))
                                    <div class="col-lg-4">
                                        <span class="sub-title text-uppercase">Web Services</span>
                                        <ul class="list-unstyled m-b-20">
                                            @if(Route::has('domains'))
                                                <li><a href="{{route('domains')}}">Domain Sales</a></li>
                                            @endif
                                            @if(Route::has('shared-hosting'))
                                                <li><a href="{{route('shared-hosting')}}">Shared Hosting</a></li>
                                            @endif 
                                            @if(Route::has('wordpress-hosting'))
                                                <li><a href="{{route('wordpress-hosting')}}">WordPress Hosting</a></li>
                                            @endif
                                            @if(Route::has('vps'))
                                                <li><a href="{{route('vps')}}">VPS</a></li>
                                            @endif
                                            @if(Route::has('dedicated-servers'))
                                                <li><a href="{{route('dedicated-servers')}}">Dedicated Servers</a></li>
                                            @endif
                                            @if(Route::has('managed-hosting'))
                                                <li><a href="{{route('managed-hosting')}}">Managed Hosting</a></li>
                                            @endif
                                            @if(Route::has('ssl-certificates'))
                                            <li><a href="{{route('ssl-certificates')}}">SSL Certificates</a></li>
                                            @endif
                                            @if(Route::has('site-security'))
                                            <li><a href="{{route('site-security')}}">Site Security</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                                @if(Route::has('smart-accounting'))
                                    <div class="col-lg-4">
                                        <span class="sub-title text-uppercase">Software</span>
                                        <ul class="list-unstyled m-b-20">
                                            @if(Route::has('smart-accounting'))
                                                <li><a href="{{route('smart-accounting')}}">SmartAccounting</a></li>
                                            @endif
                                            @if(Route::has('smart-pos'))
                                                <li><a href="{{route('smart-pos')}}">SmartPOS</a></li>
                                            @endif
                                            @if(Route::has('smart-lms'))
                                                <li><a href="{{route('smart-lms')}}">SmartLMS</a></li>
                                            @endif
                                        </ul>
                                        <span class="sub-title text-uppercase">Other</span>
                                        <ul class="list-unstyled m-b-20">
                                            @if(Route::has('zoho-business'))
                                                <li><a href="{{route('zoho-business')}}">Zoho Business</a></li>
                                            @endif
                                            @if(Route::has('office-365'))
                                                <li><a href="{{route('office-365')}}">Office 365</a></li>
                                            @endif
                                            @if(Route::has('avast-security'))
                                                <li><a href="{{route('avast-security')}}">Avast Security</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endif
            <!-- Mega Menu End -->
            <li class="menu-item"> <a href="https://support.manifestghana.com" class="nav-link">Support</a> </li>

            {{-- <!-- Sub Menu Start -->
            <li class="menu-item open-sub-menu">
                <a class="nav-link submenu-icon" href="javascript:;">Pages</a>
                <ul class="sub-menu list-unstyled box rounded-bottom">
                    <li class="sub-menu-item open-level-menu">
                        <a class="sub-menu-link level-menu-icon" href="javascript:;">Company</a>
                        <ul class="level-menu list-unstyled box overflow-hidden rounded-bottom">
                            <li class="level-menu-item">
                                <a href="../pages/about-1.html" class="level-menu-link">About 1</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/about-2.html" class="level-menu-link">About 2</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/services.html" class="level-menu-link">Services</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/services-single.html" class="level-menu-link">Services Single</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/customer.html" class="level-menu-link">Customer</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/customer-story.html" class="level-menu-link">Customer Story</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/careers.html" class="level-menu-link">Careers</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/careers-single.html" class="level-menu-link">Careers Single</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu-item open-level-menu">
                        <a class="sub-menu-link level-menu-icon" href="javascript:;">Portfolio</a>
                        <ul class="level-menu list-unstyled box overflow-hidden rounded-bottom">
                            <li class="level-menu-item">
                                <a href="../pages/portfolio-classic.html" class="level-menu-link">Portfolio Classic</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/portfolio-parallax.html" class="level-menu-link">Portfolio Parallax</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/portfolio-single.html" class="level-menu-link">Portfolio Single</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu-item open-level-menu">
                        <a class="sub-menu-link level-menu-icon" href="javascript:;">Login & Signup</a>
                        <ul class="level-menu list-unstyled box overflow-hidden rounded-bottom">
                            <li class="level-menu-item">
                                <a href="../pages/login.html" class="level-menu-link">Login</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/signup.html" class="level-menu-link">Signup</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/recover-account.html" class="level-menu-link">Recover Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu-item open-level-menu">
                        <a class="sub-menu-link level-menu-icon" href="javascript:;">Contact</a>
                        <ul class="level-menu list-unstyled box overflow-hidden rounded-bottom">
                            <li class="level-menu-item">
                                <a href="../pages/contact-business.html" class="level-menu-link">Contact Business</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/contact-personel.html" class="level-menu-link">Contact Personel</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/contact-creative.html" class="level-menu-link">Contact Creative</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu-item open-level-menu">
                        <a class="sub-menu-link level-menu-icon" href="javascript:;">Utilities</a>
                        <ul class="level-menu list-unstyled box overflow-hidden rounded-bottom">
                            <li class="level-menu-item">
                                <a href="../pages/pricing-1.html" class="level-menu-link">Pricing 1</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/pricing-2.html" class="level-menu-link">Pricing 2</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/pricing-3.html" class="level-menu-link">Pricing 3</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/faq.html" class="level-menu-link">F.A.Q.</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/terms-conditions.html" class="level-menu-link">Terms & Conditions</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/privacy-policy.html" class="level-menu-link">Privacy & Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu-item open-level-menu">
                        <a class="sub-menu-link level-menu-icon" href="javascript:;">Specialty</a>
                        <ul class="level-menu list-unstyled box overflow-hidden rounded-bottom">
                            <li class="level-menu-item">
                                <a href="../pages/coming-soon.html" class="level-menu-link">Coming Soon 1</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/coming-soon-2.html" class="level-menu-link">Coming Soon 2</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/system-status.html" class="level-menu-link">System Status</a>
                            </li>
                            <li class="level-menu-item">
                                <a href="../pages/error-404.html" class="level-menu-link">Error 404</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
            <!-- Sub Menu End -->

            <!-- Sub Menu Start -->
            {{-- <li class="menu-item open-sub-menu">
                <a class="nav-link submenu-icon" href="javascript:;">Blog</a>
                <ul class="sub-menu list-unstyled box rounded-bottom">
                    <li class="sub-menu-item">
                        <a href="../blog/card-style.html" class="sub-menu-link">Card Style</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="../blog/list-style.html" class="sub-menu-link">List Style</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="../blog/profile.html" class="sub-menu-link">Blog Profile</a>
                    </li>
                    <li class="sub-menu-item">
                        <a href="../blog/single-article.html" class="sub-menu-link">Single Article</a>
                    </li>
                </ul>
            </li> --}}
            <!-- Sub Menu End -->

            <!-- Mini Menu Start -->
            {{-- <li class="menu-item open-mini-menu">
                <a class="nav-link submenu-icon" href="javascript:;">Start</a>
                <div class="mini-menu box overflow-hidden rounded-bottom">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="mini-menu-img imgfix overlay-blue opacity-80">
                                <img src="../assets/images/photos/navbar/2.jpg" alt="">
                                <div class="content text-center p-25">
                                    <h3 class="text-white m-b-20">Want to see an overview?</h3>
                                    <a href="javascript:;" class="button button-success transition-3d-hover">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-l-r-10">
                            <a href="../home-property/index.html" class="icon-item border-bottom d-flex justify-content-start align-items-center" target="_blank">
                                <div class="icon">
                                    <img src="../assets/images/photos/icons/1.png" alt="">
                                </div>
                                <div class="text">
                                    <h6>House</h6>
                                    <span>Real estate demo</span>
                                </div>
                            </a>
                            <a href="../help-desk/index.html" class="icon-item border-bottom d-flex justify-content-start align-items-center" target="_blank">
                                <div class="icon">
                                    <img src="../assets/images/photos/icons/2.png" alt="">
                                </div>
                                <div class="text">
                                    <h6>Help Desk</h6>
                                    <span>Help desk demo</span>
                                </div>
                            </a>
                            <a href="#" class="icon-item border-bottom d-flex justify-content-start align-items-center o-30">
                                <div class="icon">
                                    <img src="../assets/images/photos/icons/3.png" alt="">
                                </div>
                                <div class="text">
                                    <h6>New Demos</h6>
                                    <span>Coming soon...</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li> --}}
            <!-- Mini Menu End -->

            <!-- Mini Menu Start -->
            {{-- <li class="menu-item open-mini-menu">
                <a class="nav-link submenu-icon" href="javascript:;">Academy</a>
                <div class="mini-menu w-300 h-auto box overflow-hidden rounded-bottom">
                    <div class="row no-gutters">
                        <div class="col-lg-12 p-l-r-10">
                            <a href="../../../documentation/index.html" target="_blank" class="icon-item border-bottom d-flex justify-content-start align-items-center">
                                <div class="icon">
                                    <img src="../assets/images/photos/icons/4.png" alt="">
                                </div>
                                <div class="text">
                                    <h6>Documentation</h6>
                                    <span>Development guides</span>
                                </div>
                            </a>
                            <a href="../../../documentation/changelog.html" target="_blank" class="icon-item d-flex justify-content-start align-items-center">
                                <div class="icon">
                                    <img src="../assets/images/photos/icons/5.png" alt="">
                                </div>
                                <div class="text">
                                    <h6>Changelog</h6>
                                    <span>Version changes</span>
                                </div>
                                <!-- Version number settings assets/js/global.js -->
                                <div class="version"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </li> --}}
            <!-- Mini Menu End -->
            @if(Route::has('create-a-site'))
                <li class="menu-item d-none d-lg-block">
                    {{-- <a class="nav-button transition-3d-hover" href="#" target="_blank">Build a Website</a> --}}
                    <x-anchor class="nav-button"> Create a Site </x-anchor>
                </li>
            @endif
            @if (Route::has('login'))
                <li class="menu-item d-none d-lg-block">
                    {{-- <a class="button-primary-soft transition-3d-hover" href="#" target="_blank">Build an App</a> --}}
                    <x-anchor href='/login' class="nav-button-soft"> Login </x-anchor>
                </li>
            @endif
            
        </ul>
    </nav>
    <!-- Navigation End -->

    <a class="menu-trigger">
        <span>Menu</span>
    </a>
</div>