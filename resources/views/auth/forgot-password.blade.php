<x-frontendlayout>
    <x-slot name="title">
        Password Recovery &mdash; Manifest Multimedia 
        </x-slot>
    	<!-- Page Start -->
	<section class="m-t-80 h-full">
<!-- Left Start -->
<div class="login-left parallax overlay-blue opacity-90" data-image-src="{{asset('frontend/images/photos/login/ease.jpg')}}">
    <div class="container-fluid position-absolute z-i-2 bottom-100">
        <div class="row">
            <div class="offset-lg-2 offset-md-2 col-lg-8 col-md-8">
                <div class="slider-1-col owl-carousel success-dots dots-top-30 text-center">
                    <!-- item start -->
                    <div class="item">
                        <p class="text-white m-b-20">I love my website and I will totally recommend Manifest Multimedia. They are so professional, time efficient, helpful and precise. Thank you once again</p>
                        
                        <strong class="d-block text-white text-uppercase">Pamela Ofori</strong>
                        <span class="d-block text-white">UK</span>
                        <a href="https://www.trustpilot.com/review/manifestghana.com" style="color:white; text-decoration:none"><strong>Trust Pilot</strong></a>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="item">
                        <p class="text-white m-b-20">Always providing us with top quality services. </p>
                        <strong class="d-block text-white text-uppercase">Asa Yentelbah</strong>
                        <span class="d-block text-white">Ghana</span>
                        <a href="https://www.trustpilot.com/review/manifestghana.com" style="color:white; text-decoration:none"><strong>Trust Pilot</strong></a>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="item">
                        <p class="text-white m-b-20">Having worked with Manifest Ghana, I will recommend them to any client. They are professional, time-efficient and productivity is off a high standard. I am really impressed with what they did on Jeer care please visit and see for yourself.</p>
                        <strong class="d-block text-white text-uppercase">Esther Yeboah</strong>
                        <span class="d-block text-white">UK</span>
                        <a href="https://www.trustpilot.com/review/manifestghana.com" style="color:white; text-decoration:none"><strong>Trust Pilot</strong></a>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    <div class="item">
                        <p class="text-white m-b-20">Excellent Service ... Prompt Delivery</p>
                        <strong class="d-block text-white text-uppercase">Prophetess Ruth Martey</strong>
                        <span class="d-block text-white">America</span>
                        <a href="https://www.trustpilot.com/review/manifestghana.com" style="color:white; text-decoration:none"><strong>Trust Pilot</strong></a>
                    </div>
                    <!-- item end -->

                    <!-- item start -->
                    {{-- <div class="item">
                        <p class="text-white m-b-20">Suspendisse elementum ex eu erat pharetra imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        <strong class="d-block text-white text-uppercase">Penny Tool</strong>
                        <span class="d-block text-white">IOS DEVELOPER</span>
                    </div> --}}
                    <!-- item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Left End -->
<!-- Right Start -->
<div class="login-right d-flex align-items-center">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 offset-md-2 col-lg-8 col-md-8">
                <h1 class="text-primary">Forgot your password?</h1>
                <p class="m-b-40">Enter your email address below and we'll get you back on track.</p>
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <x-validationerrors />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
            
                                    <div class="form-item m-b-30">
                                        <label class="lbl" for="email">{{ __('Email') }}</label>
                                        <input class="input" type="email" id="email" placeholder="Email"  name="email" :value="old('email')" required autofocus/>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                @if(Route::has('login'))
                                    <div class="col-8">
                                        <span><a href="{{route('login')}}">Back to sign in</a></span>
                                    </div>
                                @endif
                                <div class="col-4">
                                    <button class="button button-primary transition-3d-hover pull-right">Reset Password</button>
                                </div>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<!-- Right End -->
</section>
<!-- Page End -->

</x-frontendlayout>
