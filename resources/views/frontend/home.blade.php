<x-frontendlayout>
	<x-slot name="title">
		Home &mdash; Manifest Multimedia 
	</x-slot>

<!-- Welcome Start -->
	<section class="welcome-auto m-t-80" id="particle-buble">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="offset-lg-3 col-lg-6 text-center">
					<h1 class="display-2 m-b-10">We <span class="text-color-primary">Deliver.</span></h1>
					{{-- <h1 class="m-b-20">Winning <span class="text-color-primary">Solutions!</span></h1> --}}
					<p class="m-b-40">Anybody can set up an app or a website. We build strategic, engaging experiences that reinforce credibility, communicate key information and turn prospects into profits.</p>
					<div class="row">
						<div class="col-lg-5 col-12">
							<x-anchor href="{{Route::has('build-website')?'/build-website':'/login'}}" class="button-primary" >Build a Website </x-anchor>
						</div>
						<div class="col-lg-5 col-12">
							<x-anchor href="{{Route::has('build-app')?'/build-app':'/login'}}" class="button-primary-soft" > Build an App </x-anchor>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Welcome End -->
<!-- TrustBox widget - Review Collector -->
<div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="5c9b54e6184db30001a49904" data-style-height="52px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5" data-no-reviews="hide" data-scroll-to-list="true" data-allow-robots="true">
	<a href="https://www.trustpilot.com/review/manifestghana.com" target="_blank" rel="noopener">Trustpilot</a>
  </div>
  <!-- End TrustBox widget -->
</x-frontendlayout>