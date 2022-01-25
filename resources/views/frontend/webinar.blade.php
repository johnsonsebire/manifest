<x-frontendlayout>
	<x-slot name="title">
		Webinar &mdash; Manifest Multimedia 
	</x-slot>
<!-- Welcome Start -->
<section class="p-t-160 p-b-240 bg-dark position-relative z-i-1" id="noparticle-buble">
	<div class="container position-relative z-i-2">
		<div class="row text-center">
			<div class="offset-lg-3 col-lg-6">
				<h1 class="text-white m-b-10"><span style="font-size:14px"> FREE WEBINAR | FRIDAY 28TH JANUARY 2022 | 10 AM</span> <br />Convert More Prospects into Buyers/Hot Leads</h1>
				<p class="text-white m-b-40">How to Create a Highly Converting Landing Page</p>
				<a href="#" class="button button-primary transition-3d-hover">Register</a>
			</div>
		</div>
	</div>
	<div class="position-absolute bottom-n1 left-0 z-i-2">
		<img src="{{asset('frontend/images/welcome/road-bottom.svg')}}" class="img-fluid" alt="">
	</div>
</section>
<!-- Welcome End -->
	<!-- Page Content Start -->
	<section class="m-t-n100 position-relative z-i-2 p-b-90">
		<div class="container">
			<div class="row">
				<!-- Item Start -->
				<div class="col-lg-12 col-md-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<a  class="box overflow-hidden rounded imgfix-animate h-500 d-block m-b-30">
						
						<video controls autoplay loop id="vid">
							<source src="{{asset('frontend/videos/webinar/featured.mp4')}}" alt="Webinar Video" type="video/mp4">
							Your browser does not support this video format. 
						</video>
						{{-- <div class="position-absolute rounded box left-20 right-20 bottom-20 p-20 text-center">
							<h5>FREE WEBINAR</h5>
							<span class="text-uppercase">Convert More Prospects into Buyers/HotLeads</span>
						</div> --}}
					</a>
				</div>
			</div>
		</div>
	</section>

	<script>
		document.getElementById('vid').play();
	</script>
</x-frontendlayout>