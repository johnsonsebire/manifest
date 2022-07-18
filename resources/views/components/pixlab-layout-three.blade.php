<!DOCTYPE html>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
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
            <script src="//unpkg.com/alpinejs" defer></script>

            <livewire:styles />
            <!--====== Default css ======-->
            <link rel="stylesheet" href="{{asset('pixlab/css/default.css')}}">
            <!--====== Style css ======-->
            <link rel="stylesheet" href="{{asset('pixlab/css/style.css')}}">
            <!--====== Responsive css ======-->
            <link rel="stylesheet" href="{{asset('pixlab/css/responsive.css')}}">

            
            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
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

            <!--====== Adroll Script ======-->
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

        <body data-spy="scroll" data-target=".main-menu">
            <div class="home-v3-wrapper">
                <!--====== Start Preloader ======-->
                <x-pixlab-preloader />
                <!--====== End Preloader ======-->
                <!--====== offcanvas-panel ======-->
                <x-pixlab-off-canvas-panel />
                <!--====== End offcanvas-panel ======-->
                <x-pixlab-header-three />
                <!--====== End Header Section ======-->
                
                {{$slot}}
               
               <x-pixlab-footer-widget />

        </body>
    </html>