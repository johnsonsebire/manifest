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

   <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

      <!-- Header -->
      <header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
         <!-- Logo -->
         <div class="logo">
            <a href="{{ route('dashboard') }}" class="default-logo"><img src="{{asset('images/favicon.png')}}" alt="Logo" width="80px" height="80px"> <span style="font-family:SFMono-Regular,Menlo,Monaco,Consolas,'Liberation Mono','Courier New',monospace; font-size:30px; font-family:bold;color:black">  </span> </a> 
            <a href="{{ route('dashboard') }}" class="mobile-logo"><img src="{{asset('images/favicon.png')}}" alt="Logo" width="100px" height="100px"></a>
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
                                    <img src="{{asset(Auth::user()->profile_photo_url)}}" alt="avatar">
                                 </div>
                                 <!-- End User Avatar -->

                                 <!-- User Info -->
                                 <div class="user-info">
                                    <h4 class="user-name">{{Auth::user()->name}}</h4>
                                    <p class="user-email">{{Auth::user()->email}}</p>
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
         {{-- Dashmin ?? 2020 created by <a href="https://www.themelooks.com/"> ThemeLooks</a> --}}
         ?? {{ now()->year }} Manifest Group. All Rights Reserved.
      </footer>
      <!-- End Footer -->
   </div>
   <!-- End wrapper -->

   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
   <script src="{{asset('backend/js/jquery.min.js')}}"></script>
   <script src="{{asset('backend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
   <script src="{{asset('backend/js/script.js')}}" defer></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

  

   @if(Route::has('order'))
   <script src="{{asset('backend/plugins/jquery-smartwizard/jquery.smartWizard.min.js')}}"></script>
   <script src="{{asset('backened/plugins/jquery-smartwizard/custom-smartWizard.js')}}"></script>
   <script src="{{asset('backend/plugins/jquery.steps/jquery.steps.min.js')}}"></script>
   <script src="{{asset('backend/plugins/jquery.steps/custom-jquery-step.js')}}"></script>
   @endif
   <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   @livewireScripts

   @if(Route::has('dashboard')) 

     

   {{-- Load Dashboard Chart Data --}}
   <script type="text/javascript" defer> 
      $(function () {
      'use strict';   

      let invoicesCount=document.getElementById('invoices-count').textContent;

            var area_options = {
               chart: {
                     type:"area",
                     height: 112,
                     sparkline: {
                        enabled: true
                     }
               },
               stroke: {
                     curve: "smooth",
                     width: 2
               },
               fill: {
                     opacity: .05
               },
               series:[ {
                     name: 'Invoices',
                     data: [0,invoicesCount]
               }
               ],
               yaxis: {
                     min: 0
               },
               colors:["#E580FD"],
               grid: {
                     row: {
                        colors: ['transparent', 'transparent'], opacity: .2
                     },
                     padding: {
                        top: 5,
                     },
                     borderColor: 'transparent'
               },
               tooltip: {
                     x: {
                        format: 'dd/MM/yy HH:mm'
                     },
               }
               }
               var area_Chart = new ApexCharts( document.querySelector("#invoices-chart"), area_options );
               area_Chart.render();
//Chart 2 Data
               let servicesCount=document.getElementById('services-count').textContent;

var area_options = {
   chart: {
         type:"area",
         height: 112,
         sparkline: {
            enabled: true
         }
   },
   stroke: {
         curve: "smooth",
         width: 2
   },
   fill: {
         opacity: .05
   },
   series:[ {
         name: 'Services',
         data: [0,servicesCount]
   }
   ],
   yaxis: {
         min: 0
   },
   colors:["#E580FD"],
   grid: {
         row: {
            colors: ['transparent', 'transparent'], opacity: .2
         },
         padding: {
            top: 5,
         },
         borderColor: 'transparent'
   },
   tooltip: {
         x: {
            format: 'dd/MM/yy HH:mm'
         },
   }
   }
   var area_Chart = new ApexCharts( document.querySelector("#services-chart"), area_options );
   area_Chart.render();

   //Tickets Chart
   let pendingTickets=document.getElementById('pending-tickets').textContent;
   let resolvedTickets=document.getElementById('resolved-tickets').textContent;
   var area4_options = {
        chart: {
            type:"area",
            height: 112,
            sparkline: {
                enabled: true
            }
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        fill: {
            opacity: .05
        },
        series: [{
            name: 'Resolved',
            data: [0, resolvedTickets]
          }, {
            name: 'Pending',
            data: [0, pendingTickets]
        }],
        yaxis: {
            min: 0
        },
        colors:["#09D1DE", "#E580FD"],
        grid: {
            row: {
                colors: ['transparent', 'transparent'], opacity: .2
            },
            padding: {
                top: 5,
            },
            borderColor: 'transparent'
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        }
    }
    var area4_Chart = new ApexCharts( document.querySelector("#tickets-chart"), area4_options);
    area4_Chart.render();

            });

      </script>

     <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
     <script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}" defer></script>

   @endif
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

      @include('sweetalert::alert')

   </body>

</html>
