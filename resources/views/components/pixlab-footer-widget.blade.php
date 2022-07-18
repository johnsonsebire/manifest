    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
<footer class="footer-area">
        <div class="container">
            <div class="footer-top pt-75 pb-40">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="footer-logo mb-40 wow fadeInLeft">
                            <img src="{{asset('frontend/images/logo/logo.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-wrapper mb-40 wow fadeInRight">
                            <h3>{{__('Precise Solutions For')}} 
                                <span class="blue-dark">{{__('Winning Organizations')}}</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        <div class="footer-widget pt-70 pb-40">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".15s">
                        <h4 class="widget-title">{{__('Services')}}</h4>
                        <ul class="widget-nav">
                            <li><a href="{{url('')}}">{{__('Website Development')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Mobile App Development')}}</a></li>
                            <li><a href="{{url('')}}">{{__('UX/UI Design')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Search Engine Optimization')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Digital Marketing')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Branding & Advertising')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".20s">
                        <h4 class="widget-title">{{__('More')}}</h4>
                        <ul class="widget-nav">
                            <li><a href="{{url('')}}">{{__('SAP Consulting')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Cloud Computing')}}</a></li>
                            <li><a href="{{url('')}}">{{__('IT Training')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Testing & QA')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Blockchain Development')}}</a></li>
                            <li><a href="{{url('')}}">{{__('Big Data & Analysis')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="widget social-widget mb-40 wow fadeInUp" data-wow-delay=".25s">
                        <h4 class="widget-title">{{__('Follow')}}</h4>
                        <ul class="social-nav">
                            {{-- <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li> --}}
                            <li><a href="https://instagram.com/teammanifestgh"><i class="fab fa-instagram"></i>{{__('Instagram')}}</a></li>
                            <li><a href="https://twitter.com/teammanifestgh"><i class="fab fa-twitter"></i>{{__('Twitter')}}</a></li>
                            {{-- <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li> --}}
                            <li><a href="https://facebook.com/teammanifestgh"><i class="fab fa-facebook-f"></i>{{__('Facebook')}}</a></li>
                            <li><a href="https://medium.com/@johnsonsebire"><i class="fab fa-medium-m"></i>{{__('Medium')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="widget newsletter-widget mb-40 wow fadeInUp" data-wow-delay=".30s">
                        <div class="newsletter-content">
                            <h3>{{__("Don't miss an update!")}}</h3>
                            <p> {{__('Subscribe to our monthly newsletter! We do not spam you.')}}</p>
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="{{__('Email Address')}}" name="email" required>
                                    <button class="main-btn">{{__('Sign Up')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; {{date('Y')}}. {{__('All rights reserved.')}}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-nav float-lg-right">
                        <ul>
                            <li><a href="{{url('')}}">{{__('Legal')}} </a></li>
                            <li><a href="{{url('')}}">{{__('FAQs')}}</a></li>
                            <li><a href="https://support.manifestghana.com">{{__('Support')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->
  <!--====== back-to-top ======-->
  <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>

  <livewire:scripts />

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