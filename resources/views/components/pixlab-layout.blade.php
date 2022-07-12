<!DOCTYPE html>
    <!-- Well begun is half done. - Aristotle -->
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>{{$title}}</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/png">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('pixlab/css/default.css')}}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('pixlab/css/style.css')}}">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{asset('pixlab/css/responsive.css')}}">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->
        {{-- Of Canvas Panel --}}
        
        <x-pixlab-off-canvas-panel />

        <x-pixlab-header />
        
        {{$slot}}

{{-- 
    
    <!--====== Start Hero Section ======-->
    <section class="hero-banner-v1 position-relative">
        <div class="bg-one"></div>
        <div class="bg-two"></div>
        <div class="hero-img hero-img-one scene"><span data-depth=".5"><img src="{{asset('pixlab/images/hero/hero-one-img-1.jpg')}}" class="wow fadeInLeft" alt="hero image"></span></div>
        <div class="hero-img hero-img-two scene"><span data-depth=".2"><img src="{{asset('pixlab/images/hero/hero-one-img-2.png')}}" class="wow fadeInLeft" alt="hero image"></span></div>
        <div class="hero-img hero-img-three scene"><span data-depth=".3"><img src="{{asset('pixlab/images/shape/circle-logo-1.png')}}" class="wow fadeInLeft" alt="hero image"></span></div>
        <div class="shape shape-one scene"><span data-depth="1"><img src="{{asset('pixlab/images/shape/shape-1.png')}}" alt="shape"></span></div>
        <div class="shape shape-three scene"><span data-depth="3"><img src="{{asset('pixlab/images/shape/shape-3.png')}}" alt="shape"></span></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".5s">Trusted Full Stack Technology Company</h1>
                        <p class="wow fadeInDown" data-wow-delay="1s"></p>
                        <a href="contact.html" class="main-btn arrow-btn wow fadeInUp" data-wow-delay=".5s">Let’s Talk Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->

    <!--====== Start About Section ======-->
    <section class="about-area about-area-v1 position-relative pt-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-holder-box mb-50">
                        <div class="img-holder wow fadeInLeft">
                            <img src="{{asset('pixlab/images/about/about-1.jpg')}}" alt="Image">
                        </div>
                        <div class="shape shape-one"><span class="animate-float-y"><img src="{{asset('pixlab/images/shape/circle-logo-2.png')}}" class="circle-logo" alt="circle logo"></span></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-wrapper mb-50 wow fadeInRight">
                        <div class="section-title mb-15">
                            <span class="sub-title st-one">About Us</span>
                            <h2>We’re Creative 
                                Agency Since 1993</h2>
                        </div>
                        <h4>Professional Design Agency to provide solutions</h4>
                        <p>On the other hand denounce with righteous and dislike men 
                            who beguile and demoralizes by the charms of pleasure thes moment, so blinded by desire that they cannot</p>
                        <ul class="list-style-one mb-35">
                            <li>Digital Creative Agency</li>
                            <li>Professional Problem Solutions</li>
                            <li>Web Design & Development</li>
                        </ul>
                        <a href="about.html" class="main-btn bordered-btn btn-blue arrow-btn">Learn More Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section ======-->
    <!--====== Start Service Section ======-->
    <section class="service-area pt-90 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Services</span>
                        <h2>Creative Design Solutions</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-style-one mb-40 wow fadeInDown" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-strategy"></i>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="service-details.html">Strategy</a></h3>
                            <ul class="list-style-two">
                                <li>Product Management</li>
                                <li>MVP Definition</li>
                                <li>Product Strategy</li>
                            </ul>
                            <a href="service-details.html" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-style-one mb-40 wow fadeInDown" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-design"></i>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="service-details.html">Product Design</a></h3>
                            <ul class="list-style-two">
                                <li>Product Management</li>
                                <li>MVP Definition</li>
                                <li>Product Strategy</li>
                            </ul>
                            <a href="service-details.html" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-item service-style-one mb-40 wow fadeInDown" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="flaticon-source-code"></i>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="service-details.html">Development</a></h3>
                            <ul class="list-style-two">
                                <li>Product Management</li>
                                <li>MVP Definition</li>
                                <li>Product Strategy</li>
                            </ul>
                            <a href="service-details.html" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Service Section ======-->
    <!--====== Start Portfolio Section ======-->
    <section class="portfolio-area portfolio-area-v1 light-gray-bg pt-130 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-45 wow fadeInUp">
                        <span class="sub-title st-one">Latest Work</span>
                        <h2>Professional Experience</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-filter-button mb-50 wow fadeInLeft">
                        <ul class="filter-btn mb-20">
                            <li data-filter="*" class="active">Show All</li>
                            <li data-filter=".cat-1">Design</li>
                            <li data-filter=".cat-2">Branding</li>
                            <li data-filter=".cat-3">Development</li>
                            <li data-filter=".cat-4">SEO</li>
                            <li data-filter=".cat-5">UX/UI Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row portfolio-grid">
                <div class="col-lg-4 col-md-6 col-sm-12 cat-1 portfolio-column cat-3">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".1s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/portfolio/img-1.jpg')}}" alt="Img">
                            <a href="{{asset('pixlab/images/portfolio/img-1.jpg')}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Dashboard Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-2 cat-4">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/portfolio/img-2.jpg')}}" alt="Img">
                            <a href="{{asset('pixlab/images/portfolio/img-2.jpg')}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Landing Pages</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-3 cat-4">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/portfolio/img-3.jpg')}}" alt="Img">
                            <a href="{{asset('pixlab/images/portfolio/img-3.jpg')}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Illustration Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-3">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".4s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/portfolio/img-4.jpg')}}" alt="Img">
                            <a href="{{asset('pixlab/images/portfolio/img-4.jpg')}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Dashboard Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-5 cat-1">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".5s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/portfolio/img-5.jpg')}}" alt="Img">
                            <a href="{{asset('pixlab/images/portfolio/img-5.jpg')}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Apps Development</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-2">
                    <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".6s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/portfolio/img-6.jpg')}}" alt="Img">
                            <a href="{{asset('pixlab/images/portfolio/img-6.jpg')}}" class="portfolio-hover img-popup">
                                <div class="hover-content">
                                    <i class="far fa-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="project-details.html">Website Design</a></h3>
                            <a href="projects.html" class="cat-link">Creative Design</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Portfolio Section ======-->
    <!--====== Start CTA Section ======-->
    <section class="cta-area cta-area-v1 pt-130">
        <div class="container-1450">
            <div class="cta-wrapper dark-blue-bg">
                <div class="cta-img wow fadeInDown "><img src="{{asset('pixlab/images/cta/img-1.jpg')}}" alt=""></div>
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="text-wrapper wow fadeInUp">
                            <div class="section-title section-title-white mb-55">
                                <span class="sub-title st-one">Let’s Work</span>
                                <h2>Experience & innovative <span class="fill-text">solutions</span>for <span class="fill-text">creative</span> design & development <span class="fill-text">agency</span></h2>
                            </div>
                            <a href="contact.html" class="main-btn bordered-btn btn-white arrow-btn">Let's Work Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End CTA Section ======-->
    <!--====== Start Counter Section ======-->
    <section class="counter-area counter-area-v1 pt-240 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Agency Statistics</span>
                        <h2>Why People’s Like Us</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="flaticon-start-up"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>256</span>+</h2>
                            <p>Project Complate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-creativity"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>783</span>+</h2>
                            <p>Project Complate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>97</span>+</h2>
                            <p>Awards Winning</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-technical-support"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span>35</span>+</h2>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Counter Section ======-->
    <!--====== Start Testimonial Section ======-->
    <section class="testimonial-area testimonial-area-v1 dark-blue-bg pattern-bg pt-130 pb-80">
        <div class="shape-img wow fadeInRight animate-float-y"><span><img src="{{asset('pixlab/images/testimonial/img-3.jpg')}}" alt=""></span></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title section-title-white mb-50 wow fadeInLeft">
                        <span class="sub-title st-one">Testimonials</span>
                        <h2>What Our Client’s About Us</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="img-holder mb-50 wow fadeInLeft">
                        <img src="{{asset('pixlab/images/testimonial/img-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-slider-one mb-50 wow fadeInRight">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <i class="flaticon-quotation"></i>
                                <h3>Sit amet consectetur adipiscing
                                    elit sed do eiusmod temporincde
                                    idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey 
                                    sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                <div class="author-title">
                                    <h4>Dustin A. McPherson</h4>
                                    <p class="position">Senior  Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <i class="flaticon-quotation"></i>
                                <h3>Sit amet consectetur adipiscing
                                    elit sed do eiusmod temporincde
                                    idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey 
                                    sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                <div class="author-title">
                                    <h4>Dustin A. McPherson</h4>
                                    <p class="position">Senior  Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <i class="flaticon-quotation"></i>
                                <h3>Sit amet consectetur adipiscing
                                    elit sed do eiusmod temporincde
                                    idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey 
                                    sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                <div class="author-title">
                                    <h4>Dustin A. McPherson</h4>
                                    <p class="position">Senior  Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <i class="flaticon-quotation"></i>
                                <h3>Sit amet consectetur adipiscing
                                    elit sed do eiusmod temporincde
                                    idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey 
                                    sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                <div class="author-title">
                                    <h4>Dustin A. McPherson</h4>
                                    <p class="position">Senior  Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Section ======-->
    <!--====== Start Team Section ======-->
    <section class="team-area team-area-v1 pt-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Meet Our Team</span>
                        <h2>Experience Team Members</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/team/img-1.jpg')}}" alt="Team Image">
                            <div class="team-hover">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text text-center">
                            <h4 class="title"><a href="team-details.html">Douglas J. Bleau</a></h4>
                            <p class="position">UX/UI Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item mb-40 wow fadeInUp" data-wow-delay=".3s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/team/img-2.jpg')}}" alt="Team Image">
                            <div class="team-hover">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text text-center">
                            <h4 class="title"><a href="team-details.html">Thomas M. Wilso</a></h4>
                            <p class="position">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item mb-40 wow fadeInUp" data-wow-delay=".4s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/team/img-3.jpg')}}" alt="Team Image">
                            <div class="team-hover">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text text-center">
                            <h4 class="title"><a href="team-details.html">Robert J. Ryan</a></h4>
                            <p class="position">SEO Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item mb-40 wow fadeInUp" data-wow-delay=".5s">
                        <div class="img-holder">
                            <img src="{{asset('pixlab/images/team/img-4.jpg')}}" alt="Team Image">
                            <div class="team-hover">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text text-center">
                            <h4 class="title"><a href="team-details.html">Kenneth K. Joiner</a></h4>
                            <p class="position">UX/UI Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Team Section ======-->
    <!--====== Start Contact Section ======-->
    <section class="contact-area contact-area-v1 pt-70 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="text-wrapper mb-50 wow fadeInLeft">
                        <h2>Have Any on <span class="fill-text">Project</span>
                            Mind! <span class="fill-text">Contact</span> Us</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan
                            tium, totam rem aperiam, eaque ipsa quae abillo <span>inventore veritatis</span> et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="information-style-one mb-40">
                                    <div class="icon">
                                        <span><i class="far fa-envelope-open"></i>Email Us</span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="mailto:support@gmail.com">support@gmail.com</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="information-style-one mb-40">
                                    <div class="icon">
                                        <span><i class="far fa-phone"></i>Phone Us</span>
                                    </div>
                                    <div class="info">
                                        <h4><a href="tel:+0123456789">+012 (345) 67 89</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn arrow-btn">Send Us Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img-holder mb-50 wow fadeInRight">
                        <div class="shape shape-icon-one scene"><span data-depth="1"><img src="{{asset('pixlab/images/shape/shape-4.png')}}" alt=""></span></div>
                        <div class="shape shape-icon-two"><span></span></div>
                        <img src="{{asset('pixlab/images/contact/contact-1.jpg')}}" alt="Contact Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Section ======-->
    <!--====== Start Blog Section ======-->
    <section class="blog-area blog-area-v1 light-gray-bg pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title st-one">Blog</span>
                        <h2>Latest News & Blogs</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".25s">
                        <div class="entry-content">
                            <a href="#" class="cat-btn">Design</a>
                            <h3 class="title"><a href="blog-details.html">Everything You Want To Know About</a></h3>
                            <p>Sit amet consectete adipising elit 
                                wedo eiusmod temeidiunt laboret dolore magna ways</p>
                            <a href="blog-details.html" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".30s">
                        <div class="entry-content">
                            <a href="#" class="cat-btn">Design</a>
                            <h3 class="title"><a href="blog-details.html">Designing Better Links For Websites And Emails</a></h3>
                            <p>Sit amet consectete adipising elit 
                                wedo eiusmod temeidiunt laboret dolore magna ways</p>
                            <a href="blog-details.html" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".35s">
                        <div class="entry-content">
                            <a href="#" class="cat-btn">Design</a>
                            <h3 class="title"><a href="blog-details.html">Everything You Want To Know About</a></h3>
                            <p>Sit amet consectete adipising elit 
                                wedo eiusmod temeidiunt laboret dolore magna ways</p>
                            <a href="blog-details.html" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-box text-center wow fadeInUp">
                        <a href="blogs.html" class="main-btn arrow-btn">View More News</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Blog Section ======-->
    
    
    --}}


        </footer><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{asset('pixlab/vendor/jquery-3.6.0.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{asset('pixlab/vendor/popper/popper.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{asset('pixlab/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--====== Slick js ======-->
        <script src="{{asset('pixlab/vendor/slick/slick.min.js')}}"></script>
        <!--====== Magnific js ======-->
        <script src="{{asset('pixlab/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Isotope js ======-->
        <script src="{{asset('pixlab/vendor/isotope.min.js')}}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{asset('pixlab/vendor/imagesloaded.min.js')}}"></script>
        <!--====== Counterup js ======-->
        <script src="{{asset('pixlab/vendor/jquery.counterup.min.js')}}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{asset('pixlab/vendor/jquery.waypoints.js')}}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{asset('pixlab/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!--====== WOW js ======-->
        <script src="{{asset('pixlab/vendor/wow.min.js')}}"></script>
        <!--====== Parallax js ======-->
        <script src="{{asset('pixlab/vendor/parallax.min.js')}}"></script>
        <!--====== Main js ======-->
        
        <script src="{{asset('pixlab/js/theme.js')}}"></script>
    </body>
</html>