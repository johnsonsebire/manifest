<x-frontendlayout>

    <x-slot name="title">
    Yay! We are 8 Years! &mdash; Manifest Multimedia 
    </x-slot>
    <section class="m-t-80 h-full-footer d-flex align-items-center sm-p-t-120 sm-p-b-120">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-5 sm-m-b-30">
					<img src="{{asset('frontend/images/anniversary.png')}}" class="img-fluid" alt="">
				</div>
				<div class="offset-md-1 col-md-6">
					<h1 class="text-primary m-b-10">Let's Celebrate 8 Years of Great Work</h1>
					<p class="m-b-40">You're cordially invited to the 8th Anniversary Celebration of Manifest Multimedia. Please find event details below:</p>

					<div class="row countdown m-b-10">
						<div class="col-md-4 m-b-30">
							<h4 class="days">Saturday 30th <br /> April, 2022</h4>
							<span>DATE</span>
						</div>
						<div class="col-md-2 m-b-30">
							<h4 class="hours">9:45AM Prompt</h4>
							<span>TIME</span>
						</div>
						<div class="col-md-6 m-b-30">
							<h4 class="minutes">Empomart HQ - <br /> East Legon</h4>
							<span>VENUE</span>
						</div>
						
                        <div class="col-md-12">
                            {{-- <input type="text" placeholder="Enter your email address"> --}}
                            <a href="https://goo.gl/maps/VnecFeB34g4Zz7kp7" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i> Get Google Map Directions</a>
                        </div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Page End -->
</x-frontendlayout>