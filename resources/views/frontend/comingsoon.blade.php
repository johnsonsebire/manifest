<x-error-page-layout> 

    <x-slot name="title"> 
        Manifest &mdash; Coming Soon
    </x-slot>

    <div class="mn-vh-100 d-flex align-items-center mx-1350">
        <div class="container-fluid">
            <!-- Card -->
            <div class="card justify-content-center py-5 px-4">
                <div class="row justify-content-center pt-30 pb-2">
                    <div class="col-xl-10 text-center">
                        <h1 class="mb-3">Page Under Maintenance</h1>
                        <p>Requested Service Page is not available or down for maintenance. Please check back soon!</p>
                    </div>
                    
                    <div class="col-xl-12">
                        <div id="DateCountdown" data-date="2022-07-29 00:00:00"></div>
                    </div>

                    <div class="col-xl-5 col-lg-7 col-md-9">
                        <h4 class="mb-4 font-20 text-center">Service would be Live Soon</h4>
                        <div class="text-center">
                            
                            <a href="/" class="btn btn-primary center">Go Back Home</a>
                        </div> 
                        {{-- <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d">
                            <!-- Form Group -->
                            <div class="d_input-group mb-30">
                                <input type="email" class="theme-input-style rounded-fill" placeholder="Email Address">

                                <!-- Submit -->
                                <button type="submit" class="btn-circle">
                                    <img src="{{asset('backend/img/svg/send.svg')}}" alt="" class="svg">
                                </button>
                                <!-- End Submit -->
                            </div>
                            <!-- End Form Group -->
                            
                        </form> --}}
                    </div>                                    
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
    
</x-error-page-layout>