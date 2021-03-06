<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<meta name="description" content="Manifest - Trusted Full Stack IT Company." />
	<meta name="keywords" content="web design, startup, saas, agency, development, html, mobile apps, business mail" />
	<meta name="author" content="Johnson Sebire" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />
<!-- Bootstrap & Plugins CSS -->
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="{{asset("frontend/css/theme.css")}}" rel="stylesheet" type="text/css">
<!--Start of Tawk.to Script-->


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->
@livewireStyles
<script type="text/javascript">
    adroll_adv_id = "AQ2R5DIFSJCN7OAU4GZZQQ";
    adroll_pix_id = "EHEQWSQJGFE5PNFIC5VGM6";
    adroll_version = "2.0";

    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll = w.adroll || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }

        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async = 1;
        e.src = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
</script>
</head>


<body 
@if(Route::is('build-website')) class="body-grey"@endif>

<style>
    @media only screen and (max-width 736px){
        a .featuredvid, body > section:nth-child(3) > div > div > div > a{
            height:300px !important;
        }

        
    }
</style>
   
    @if(Route::is(['home']))
	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div id="loader" class="spinner">
			<div id="shadow"></div>
			<div id="box"></div>
		</div>
	</div>
    @endif
	<!-- ***** Preloader End ***** -->
    @if(!Route::is(['landing', 'webinar', 'build-website', 'build-app']))<!-- Header Start -->
<header class="main-nav-container box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <x-frontendnavigation />
            </div>
        </div>
    </div>
</header>

@endif
<!-- Header End -->

{{$slot}}



    

@if(!Route::is(['login', 'register', 'password.request', 'webinar', 'landing', 'build-app', 'build-website']))
    <!-- Footer Start -->
<footer class="footer p-t-60">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img src="../assets/images/logo/dark.svg" class="m-b-20" alt="">
                <div class="text">Manifest Multimedia is Your best choice for all IT Solutions - Trusted Startup Ecosystem for websites, apps, branding & communication solutions</div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <h6 class="m-b-10">Helpful Links</h6>
                <ul class="footer-nav list-unstyled">
                    <x-liarrow> <x-slot name="route">{{$url = url('culture');}}</x-slot> About Us </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Partner Directory </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Academy </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Developer Hub </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Support </x-liarrow>
                    
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                <h6 class="m-b-10">Services</h6>
                <ul class="footer-nav list-unstyled">
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Corporate Training </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Consulting </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Branding </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Marketing </x-liarrow>
                    <x-liarrow> <x-slot name="route">{{$url = url('home');}}</x-slot> Development </x-liarrow>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <h6 class="m-b-10">Contact Us</h6>
                <div class="address">
                    <p>Manifest Multimedia<br>Swanlake Kaneshie, Accra</p>
                    <p>Phone: (233) 549-539-417</p>
                    <p>E-Mail: <a href="#">business@manifestghana.com</a></p>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright text-center">?? {{ now()->year }} Manifest Group. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

@endif

<!-- jQuery -->
<script src="{{asset('frontend/js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('frontend/js/popper.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('frontend/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('frontend/js/imgfix.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/parallax.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/particles.min.js')}}"></script>

<!-- Header Bubble Settings -->
<script src="{{asset('frontend/js/particle-blue.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('frontend/js/global.js')}}"></script>

<script type="text/javascript" defer>

    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/554b259ef82948372f4615b6/1e9lrte10';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <script>
         setTimeout(function(){
     document.getElementById('vid').play();
 },1000);
		document.getElementById('vid').play();
	</script>
    <!--End of Tawk.to Script-->
@livewireScripts
@include('sweetalert::alert')
</body>
</html>
