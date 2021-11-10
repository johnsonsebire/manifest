<x-frontendlayout>
    <x-slot name="title">
        Register &mdash; Manifest Multimedia 
    </x-slot>
<!-- Modal Start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h6>Terms and Conditions</h6>
            </div>
            <div class="modal-body p-30">
                <div class="text-content">
                    <p>By creating your account you agree to...</p>
                    <p>In ultrices id nibh et bibendum. Aenean condimentum tincidunt nulla vel tincidunt. Nunc gravida nibh ut feugiat vulputate. Duis non ipsum et lectus scelerisque tempus in at est.</p>
                    <p>Curabitur tempus ipsum at nisl interdum, vitae pellen tesque lectus posuere. Quisque vel risus consectetur, placerat sapien vel, aliquet massa.</p>
                </div>
                <div class="row">
                    <div class="offset-lg-1 col-lg-5">
                        <button class="button button-primary-soft transition-3d-hover d-block" data-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-lg-5">
                        <button class="button button-primary transition-3d-hover d-block" data-dismiss="modal">Accept</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
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
                <h1 class="text-primary">Register</h1>
                <p class="m-b-10">Fill out the form to get started.</p>
                <x-validationerrors class="mb-4" />
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-item m-b-20">
                            <label class="lbl" for="name">{{ __('Name') }}</label>
                            <input class="input" type="text" placeholder="Name" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-item m-b-20">
                            <label class="lbl" for="email">{{ __('Email') }}</label>
                            <input class="input" type="email" placeholder="Email" id="email" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-item m-b-20">
                            <label class="lbl" for="password">{{ __('Password') }}</label>
                            <input class="input" type="password" placeholder="Password" id="password" type="password" name="password" required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-item m-b-10">
                            <label class="lbl" for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <input class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="Password" required autocomplete="new-password"/>
                        </div>
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="col-lg-12 m-b-20">
                            <div class="form-item">
                                <div class="checkbox">
                                    <input class="checkbox-input" type="checkbox" id="form4">
                                    <label class="checkbox-lbl" for="form4">I agree to the <a href="#" data-toggle="modal" data-target="#myModal">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row d-flex align-items-center">
                @if(Route::has('login'))
                    <div class="col-8">
                        <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
                    </div>
                @endif
                    <div class="col-4">
                        <button class="button button-primary transition-3d-hover pull-right">{{ __('Register') }}</button>
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
