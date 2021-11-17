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
</head>

<body>

   <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

      <!-- Header -->
      <header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
         <!-- Logo -->
         <div class="logo">
            <a href="{{ route('dashboard') }}" class="default-logo"><img src="{{asset('images/favicon.png')}}" alt="Logo"></a>
            <a href="{{ route('dashboard') }}" class="mobile-logo"><img src="{{asset('images/favicon.png')}}" alt="Logo"></a>
         </div>
         <!-- End Logo -->

         <!-- Main Header -->
         <div class="main-header">
            <div class="container-fluid">
               <div class="row justify-content-between">
                  <div class="col-3 col-lg-1 col-xl-4">
                     <!-- Header Left -->
                     <div class="main-header-left h-100 d-flex align-items-center">
                        <!-- Main Header User -->
                        <div class="main-header-user">
                           <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                              <div class="menu-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>

                              <div class="user-profile d-xl-flex align-items-center d-none">
                                 <!-- User Avatar -->
                                 <div class="user-avatar">
                                    <img src="{{asset('backend/img/avatar/user.png')}}" alt="avatar">
                                 </div>
                                 <!-- End User Avatar -->

                                 <!-- User Info -->
                                 <div class="user-info">
                                    <h4 class="user-name">Abrilay Khatun</h4>
                                    <p class="user-email">abrilakh@gmail.com</p>
                                 </div>
                                 <!-- End User Info -->
                              </div>
                           </a>
                           <div class="dropdown-menu">
                              <a href="#">My Profile</a>
                              {{-- <a href="#">task</a>
                              <a href="#">Settings</a> --}}
                              
                              <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 

                                 <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                 this.closest('form').submit();">                     {{ __('Log Out') }}</a>

                                
                             </form>
                            
                           </div>
                        </div>
                        <!-- End Main Header User -->

                        <!-- Main Header Menu -->
                        <div class="main-header-menu d-block d-lg-none">
                           <div class="header-toogle-menu">
                              <!-- <i class="icofont-navigation-menu"></i> -->
                              <img src="{{asset('backend/img/menu.png')}}" alt="">
                           </div>
                        </div>
                        <!-- End Main Header Menu -->
                     </div>
                     <!-- End Header Left -->
                  </div>
                  <div class="col-9 col-lg-11 col-xl-8">
                     <!-- Header Right -->
                     <div class="main-header-right d-flex justify-content-end">
                        <ul class="nav">
                           <li class="ml-0">
                              <!-- Main Header Language -->
                              {{-- <div class="main-header-language">
                                 <a href="#" data-toggle="dropdown">
                                    <img src="{{asset('backend/img/svg/globe-icon.svg')}}" alt="">
                                 </a>
                                 <div class="dropdown-menu style--three">
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/usa.png')}}" alt=""></span>
                                       USA
                                    </a>
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/china.png')}}" alt=""></span>
                                       China
                                    </a>
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/russia.png')}}" alt=""></span>
                                       Russia
                                    </a>
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/spain.png')}}" alt=""></span>
                                       Spain
                                    </a>
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/brazil.png')}}" alt=""></span>
                                       Brazil
                                    </a>
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/france.png')}}" alt=""></span>
                                       France
                                    </a>
                                    <a href="#">
                                       <span><img src="{{asset('backend/img/algeria.png')}}" alt=""></span>
                                       Algeria
                                    </a>
                                 </div>
                              </div> --}}
                              <!-- End Main Header Language -->
                           </li>
                           <li class="ml-0 d-none d-lg-flex">
                              <!-- Main Header Print -->
                              {{-- <div class="main-header-print">
                                 <a href="#">
                                    <img src="{{asset('backend/img/svg/print-icon.svg')}}" alt="">
                                 </a>
                              </div> --}}
                              <!-- End Main Header Print -->
                           </li>
                           <li class="d-none d-lg-flex">
                              <!-- Main Header Time -->
                              {{-- <div class="main-header-date-time text-right">
                                 <h3 class="time">
                                    <span id="hours">21</span>
                                    <span id="point">:</span>
                                    <span id="min">06</span>
                                 </h3>
                                 <span class="date"><span id="date">Tue, 12 October 2019</span></span>
                              </div> --}}
                              <!-- End Main Header Time -->
                           </li>
                           <li class="d-none d-lg-flex">
                              <!-- Main Header Button -->
                              {{-- <div class="main-header-btn ml-md-1">
                                 <a href="#" class="btn">Pending Tasks</a>
                              </div> --}}
                              <!-- End Main Header Button -->
                           </li>
                           <li class="order-2 order-sm-0">
                              <!-- Main Header Search -->
                              <div class="main-header-search">
                                 <form action="#" class="search-form">
                                    <div class="theme-input-group header-search">
                                       <input type="text" class="theme-input-style" placeholder="What are you looking for?">

                                       <button type="submit"><img src="{{asset('backend/img/svg/search-icon.svg')}}" alt=""
                                             class="svg"></button>
                                    </div>
                                 </form>
                              </div>
                              <!-- End Main Header Search -->
                           </li>
                           <li>
                              <!-- Main Header Messages -->
                              <div class="main-header-message">
                                 {{-- <a href="#" class="header-icon" data-toggle="dropdown">
                                    <img src="{{asset('backend/img/svg/message-icon.svg')}}" alt="" class="svg">
                                 </a> --}}
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <!-- Dropdown Header -->
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                       <h5>3 Unread messages</h5>
                                       <a href="#" class="text-mute d-inline-block">Clear all</a>
                                    </div>
                                    <!-- End Dropdown Header -->

                                    <!-- Dropdown Body -->
                                    <div class="dropdown-body">
                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{asset('backend/img/avatar/m1.png')}}" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Sender Name</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{asset('backend/img/avatar/m2.png')}}" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Tonya Lee</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{asset('backend/img/avatar/m3.png')}}" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Cathy Nichols</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{asset('backend/img/avatar/m4.png')}}" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Hubert Griffith</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->
                                    </div>
                                    <!-- End Dropdown Body -->
                                 </div>
                              </div>
                              <!-- End Main Header Messages -->
                           </li>
                           <li>
                              {{-- <!-- Main Header Notification -->
                              <div class="main-header-notification">
                                 <a href="#" class="header-icon notification-icon" data-toggle="dropdown">
                                    <span class="count" data-bg-img="{{asset('backend/img/count-bg.png')}}">22</span>
                                    <img src="{{asset('backend/img/svg/notification-icon.svg')}}" alt="" class="svg">
                                 </a>
                                 <div class="dropdown-menu style--two dropdown-menu-right">
                                    <!-- Dropdown Header -->
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                       <h5>5 New notifications</h5>
                                       <a href="#" class="text-mute d-inline-block">Clear all</a>
                                    </div>
                                    <!-- End Dropdown Header -->

                                    <!-- Dropdown Body -->
                                    <div class="dropdown-body">
                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus amet.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->
                                    </div>
                                    <!-- End Dropdown Body -->
                                 </div>
                              </div> --}}
                              <!-- End Main Header Notification -->
                           </li>
                        </ul>
                     </div>
                     <!-- End Header Right -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Main Header -->
      </header>
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
         <nav class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Header -->
            <div class="sidebar-header d-none d-lg-block">
               <!-- Sidebar Toggle Pin Button -->
               <div class="sidebar-toogle-pin">
                  <i class="icofont-tack-pin"></i>
               </div>
               <!-- End Sidebar Toggle Pin Button -->
            </div>
            <!-- End Sidebar Header -->

            <x-backend-sidebar />
<!-- Main Content -->
<div class="main-content">
    
    {{$slot}}
</div>
<!-- End Main Content -->
      </div>
      <!-- End Main Wrapper -->

      <!-- Footer -->
      <footer class="footer">
         {{-- Dashmin © 2020 created by <a href="https://www.themelooks.com/"> ThemeLooks</a> --}}
         © {{ now()->year }} Manifest Group. All Rights Reserved.
      </footer>
      <!-- End Footer -->
   </div>
   <!-- End wrapper -->

   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
   <script src="{{asset('backend/js/jquery.min.js')}}"></script>
   <script src="{{asset('backend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   {{-- <script src="{{asset('backend/js/script.js')}}" defer></script> --}}
   <script src="{{asset('backend/js/script.js')}}" defer></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   <script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('backend/plugins/apex/custom-apexcharts.js')}}"></script>
   <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   @livewireScripts

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
      <!--End of Tawk.to Script-->
</body>

</html>
