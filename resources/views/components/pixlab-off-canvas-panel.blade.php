    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
<!--====== offcanvas-panel ======-->
<div class="offcanvas-panel">
    <div class="panel-overlay"></div>
    <div class="offcanvas-panel-inner">
        <div class="panel-logo">
            <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo/logo.png')}}" alt="Logo"></a>
        </div>
        <div class="about-us">
            <h5 class="panel-widget-title">{{__('Why Us?')}}</h5>
            <p>
                {{__('Anybody can set up an app or a website.')}} {{__('We build strategic, engaging experiences that reinforce credibility, communicate key information and turn prospects into profits.')}}
            </p>
        </div>
        <div class="contact-us">
            <h5 class="panel-widget-title">{{__("Contact Us")}}</h5>
            <ul>
                {{-- <li>
                    <i class="fal fa-map-marker-alt"></i>
                    Swanlake Kaneshie, Greater Accra, Ghana, West Africa.
                </li> --}}
                <li>
                    <i class="fal fa-envelope-open"></i>
                    <a href="mailto:info@manifestghana.com">{{__('info@manifestghana.com')}}</a>
                    <a href="mailto:business@manifestghana.com">{{__('business@manifestghana.com')}}</a>
                </li>
                <li>
                    <i class="fal fa-phone"></i>
                    <a href="tel:(+233)-549-539417">(+233) 303-958782</a>
                    <a href="tel:(+233)-504-259908">(+233) 504-259908</a>
                </li>
            </ul>
        </div>
        <a href="{{url('#')}}" class="panel-close"><i class="fal fa-times"></i></a>
    </div>
</div><!--====== offcanvas-panel ======-->