<x-pixlab-layout-three> 
<x-slot name="title"> {{$title}} </x-slot>

<!--====== Start Page-banner section ======-->
<section class="page-banner bg_cover position-relative z-1">
    <div class="shape shape-one scene"><span data-depth="1"><img src="{{asset('pixlab/images/shape/shape-1.png')}}" alt=""></span></div>
    <div class="shape shape-two scene"><span data-depth="2"><img src="{{asset('pixlab/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="shape shape-three scene"><span data-depth="3"><img src="{{asset('pixlab/images/shape/shape-3.png')}}" alt=""></span></div>
    <div class="shape shape-four scene"><span data-depth="4"><img src="{{asset('pixlab/images/shape/shape-2.png')}}" alt=""></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>{{$page_title}}</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">{{$page_title}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img">
                    <img src="{{asset($banner)}}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-banner section ======-->

<!--====== Start Features section ======-->
<section class="features-area pt-210">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInLeft">
                    <div class="section-title mb-30">
                        <span class="sub-title st-one">Service</span>
                        <h2>{{$page_title}}</h2>
                        <p class="blue-dark">{{$service_tagline}}</p>
                    </div>
                    <p>{{$service_description}}</p>
                    <a href="{{url('')}}" class="main-btn">Get Started</a>
                </div>
            </div>
            @if($highlights=="yes")
            <div class="col-lg-6">
                @if(count($highlight_data) > 0)
                <div class="features-list mb-50 wow fadeInRight">
                    <div class="features-item mb-30">
                        
                        @foreach ($highlight_data  as $item)
                        <div class="text">
                            <h4>{{$item['title']}}</h4>
                            
                            <p>{{$item['description']}}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    {{-- <div class="features-item mb-30">
                        <div class="text">
                            <h4>Design Strategy</h4>
                            <p>Sit amet consectetur adipiscing elit eiusmod 
                            tempor incididunt ut labore dolore</p>
                        </div>
                    </div>
                    <div class="features-item mb-30">
                        <div class="text">
                            <h4>Web Development</h4>
                            <p>Sit amet consectetur adipiscing elit eiusmod 
                            tempor incididunt ut labore dolore</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            @endif
        </div>
    </div>
</section><!--====== End Features section ======-->
@if($process=="yes")
    <!--====== Start Process Section ======-->
    <section class="process-area process-area-v1 pt-90 pb-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Process</span>
                        <h2>How Does We Works</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 process-column">
                    <div class="process-item text-center mb-40 wow fadeInUp" data-wow-delay=".15s">
                        <div class="icon">
                            <img src="{{asset('pixlab/images/icon/icon-7.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Project Layouts</h4>
                            <p>Sed ut pericias unde omnis 
                                natus error sit voluptate ccusan
                                tium dolore mque laudan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 process-column">
                    <div class="process-item text-center mb-40 wow fadeInUp" data-wow-delay=".20s">
                        <div class="icon">
                            <img src="{{asset('pixlab/images/icon/icon-8.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Project Analysis</h4>
                            <p>Sed ut pericias unde omnis 
                                natus error sit voluptate ccusan
                                tium dolore mque laudan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 process-column">
                    <div class="process-item text-center mb-40 wow fadeInUp" data-wow-delay=".25s">
                        <div class="icon">
                            <img src="{{asset('pixlab/images/icon/icon-9.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h4>Final Results</h4>
                            <p>Sed ut pericias unde omnis 
                                natus error sit voluptate ccusan
                                tium dolore mque laudan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Process Section ======-->
@endif 
<!--====== Start Process Section ======-->
@if($steps=="yes")
    <section class="process-area process-area-v2 dark-blue-bg pt-130 pb-130 position-relative z-1">
        <div class="shape shape-one scene"><span data-depth=".5"><img src="{{asset('pixlab/images/shape/shape-10.png')}}" alt=""></span></div>
        <div class="shape shape-two scene"><span data-depth="1"><img src="{{asset('pixlab/images/shape/shape-11.png')}}" alt=""></span></div>
        <div class="shape shape-three"><span></span></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title section-title-white text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Working Module</span>
                        <h2>Creative Web Design Process</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="process-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="process-item mb-65 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon">
                                        <img src="{{asset('pixlab/images/icon/icon-10.png')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="step">Step 01</span>
                                        <h4>Make Smart Plan</h4>
                                        <p>Sed ut pericias unde omnis 
                                            natus error sit volutate cusan
                                            dolore mque laudan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="process-item mb-65 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <img src="{{asset('pixlab/images/icon/icon-11.png')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="step">Step 02</span>
                                        <h4>Prototype</h4>
                                        <p>Sed ut pericias unde omnis 
                                            natus error sit volutate cusan
                                            dolore mque laudan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="process-item mb-65 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon">
                                        <img src="{{asset('pixlab/images/icon/icon-12.png')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="step">Step 03</span>
                                        <h4>Development</h4>
                                        <p>Sed ut pericias unde omnis 
                                            natus error sit volutate cusan
                                            dolore mque laudan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="process-item mb-65 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="{{asset('pixlab/images/icon/icon-13.png')}}" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="step">Step 04</span>
                                        <h4>Get Results</h4>
                                        <p>Sed ut pericias unde omnis 
                                            natus error sit volutate cusan
                                            dolore mque laudan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Process Section ======-->
@endif 
<!--====== Start Portfolio Section ======-->
@if($portfolio=="yes")
    <section class="portfolio-area pt-130 pb-135">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-55 wow fadeInUp">
                        <span class="sub-title st-one">Latest Work</span>
                        <h2>Professional Experience</h2>
                        <p>Professional Design Agency to provide solutions</p>
                    </div>
                </div>
            </div>
            <div class="portfolio-slider-one">
                <div class="portfolio-item portfolio-style-one wow fadeInUp">
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
                        <a href="{{url('')}}" class="cat-link">Creative Design</a>
                    </div>
                </div>
                <div class="portfolio-item portfolio-style-one wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('pixlab/images/portfolio/img-2.jpg')}}" alt="Img">
                        <a href="{{asset('pixlab/images/portfolio/img-2.jpg')}}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{url('')}}">Landing Pages</a></h3>
                        <a href="{{url('')}}" class="cat-link">Creative Design</a>
                    </div>
                </div>
                <div class="portfolio-item portfolio-style-one wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('pixlab/images/portfolio/img-3.jpg')}}" alt="Img">
                        <a href="{{asset('pixlab/images/portfolio/img-3.jpg')}}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{url('')}}">Illustration Design</a></h3>
                        <a href="{{url('')}}" class="cat-link">Creative Design</a>
                    </div>
                </div>
                <div class="portfolio-item portfolio-style-one wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('pixlab/images/portfolio/img-4.jpg')}}" alt="Img">
                        <a href="{{asset('/images/portfolio/img-4.jpg')}}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{url('')}}">Dashboard Design</a></h3>
                        <a href="{{url('')}}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Portfolio Section ======-->
@endif

</x-pixlab-layout-three>