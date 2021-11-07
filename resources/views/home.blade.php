<x-frontendheader /> 
<body class="body-gray">


	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div id="loader" class="spinner">
			<div id="shadow"></div>
			<div id="box"></div>
		</div>
	</div>

    
	<!-- Welcome Start -->
	<section class="welcome-flow d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="position-absolute top-20">
						{{-- <img src="{{asset('frontend/images/logo/logo-dark.svg')}}" alt="Manifest Multimedia Logo"> --}}
						<img src="{{asset('frontend/images/logo/logo.png')}}" alt="Manifest Multimedia Logo">
						<span class="position-absolute top-9 m-l-10 version"></span>
					</div>
				</div>
			</div>
			<div class="row d-flex align-items-center">
				<div class="col-lg-5">
					<div class="content">
						{{-- <div class="news m-b-40">
							<div class="info">NEW LOOK</div>
							<span>A new Look is Loading.</span>
							<span class="pull-right version"></span>
						</div> --}}
						<h1 class="m-b-10">Welcome to <br /> Manifest Multimedia</h1>
						<p class="m-b-40">For 7+ years we've empowered <span class="text-color-primary">everyone</span> within our reach with 
							the best tools to leverage technology to enhance thier lives and to grow their businesses. Now it's time for us to give ourselves
						a refreshing new look with more products to help you win. <br /><span class="text-color-primary"> Please check back soon! </span></p>
						<div class="row">
							{{-- <div class="col-lg-6">
								<a href="#demos" class="button button-primary transition-3d-hover sm-margin-bottom-30 d-block">Explore Demos</a>
							</div> --}}
							{{-- <div class="col-lg-6">
								<a href="https://themeforest.net/item/bodrum-modular-multi-purpose-html5-template/25649533" target="_blank" class="button button-success-soft transition-3d-hover d-block">Buy Now</a>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6">
					<div class="flow-container h-850">
						<div class="flow-content">
							<div class="row">
								<div class="col-4">
									<div class="rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/1.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/2.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/3.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/4.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/5.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/6.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden">
										<img src="{{asset('frontend/images/landing/header/7.png')}}" class="img-fluid" alt="">
									</div>
								</div>
								<div class="col-4">
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/8.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/9.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/10.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/11.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/12.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden">
										<img src="{{asset('frontend/images/landing/header/13.png')}}" class="img-fluid" alt="">
									</div>
								</div>
								<div class="col-4">
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/14.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/15.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/16.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/17.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/18.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden m-b-30">
										<img src="{{asset('frontend/images/landing/header/19.png')}}" class="img-fluid" alt="">
									</div>
									<div class="box rounded overflow-hidden">
										<img src="{{asset('frontend/images/landing/header/20.png')}}" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Welcome End -->


	<!-- Numbers Start -->
	{{-- <section class="box p-t-80 p-b-80">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-4 text-center sm-m-b-30">
					<h1 class="m-b-10 text-color-primary">100+</h1>
					<p class="font-bold text-color-heading">HTML5 Pages</p>
				</div>
				<div class="col-lg-4 text-center sm-m-b-30">
					<h1 class="m-b-10 text-color-primary">250+</h1>
					<p class="font-bold text-color-heading">Section Elements</p>
				</div>
				<div class="col-lg-4 text-center sm-m-b-30">
					<h1 class="m-b-10 text-color-primary">15+</h1>
					<p class="font-bold text-color-heading">Category</p>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Numbers End -->


	<!-- Page Content Start -->
	{{-- <section class="p-t-120 p-b-90">
		<div class="container">
			<div class="row text-center" id="demos">
				<div class="offset-lg-3 col-lg-6">
					<div class="header-badge m-b-15">Pages</div>
					<h2 class="m-b-10">Explore Our Demos</h2>
					<p class="m-b-40">We continue to add new things to make our template more beautiful and strong every day.</p>
				</div>
			</div>
			<div class="row">
				<div class="offset-lg-2 col-lg-4 col-md-6 col-6 m-b-30">
					<a href="gradient/home/classic-agency.html" class="d-block text-center link-text-d-n" target="_blank">
						<div class="box h-270 sm-h-220 overflow-hidden rounded transition-3d-hover m-b-20">
							<img src="{{asset('frontend/images/landing/index/2.jpg')}}" class="img-fluid" alt="">
						</div>
						<h6>Gradient Version</h6>
					</a>
				</div>
				<div class="col-lg-4 col-md-6 col-6 m-b-30">
					<a href="minimal/home/classic-agency.html" class="d-block text-center link-text-d-n" target="_blank">
						<div class="box h-270 sm-h-220 overflow-hidden rounded transition-3d-hover m-b-20">
							<img src="{{asset('frontend/images/landing/index/1.jpg')}}" class="img-fluid" alt="">
						</div>
						<h6>Minimal Version</h6>
					</a>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- Page Content End -->

	<x-frontendfooter />