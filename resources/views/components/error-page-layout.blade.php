<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
<head>
   <!-- Page Title -->
   <title>{{$title}}</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Manifest - Trusted Full Stack IT Company.">
   <meta name="keywords" content="web design, startup, saas, agency, development, html, mobile apps, business mail">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="author" content="Johnson Sebire" />

   <!-- Favicon -->
   <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

   <!-- Web Fonts -->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
   
   <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
   <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('backend/fonts/icofont/icofont.min.css')}}">
   <link rel="stylesheet" href="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.css')}}">
   <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->
   
   <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
   <link rel="stylesheet" href="{{asset('backend/plugins/apex/apexcharts.css')}}">
   <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

   <!-- ======= MAIN STYLES ======= -->
   {{-- @if(Auth::user()->settings()->mode=='dark')
      <link rel="stylesheet" href="{{asset('backend/css/dark.css')}}">
   @else
      <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
   @endif    --}}

   <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">

   <!-- ======= END MAIN STYLES ======= -->
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
    
    <body>
        {{$slot}}
    
        <!-- Footer -->
        <footer class="footer style--two">
           Manifest Group © {{date('Y')}} All Rights Reserved</a>
        </footer>
        <!-- End Footer -->
    
        <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
        <script src="{{asset('backend/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('backend/js/script.js')}}"></script>
        <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    
        <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
        <script src="{{asset('backend/plugins/time-circles/TimeCircles.js')}}"></script>
        <script src="{{asset('backend/plugins/time-circles/custom-TimeCircles.js')}}"></script>
        <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    
    </body>
    
    </html>