<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- {{domainsearch('johnsonsebire', 'com')}} --}}
    <div class="row col-md-12">
         <div class="col-md-4">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div class="">
                        <h4 class="mb-1">Invoices</h4>
                        <p class="font-14">Recurring Invoices</p>
                     </div>
                     <div class="">
                        <h2><span id="invoices-count">{{$invoices}}</span><sup></sup></h2>
                     </div>
                  </div>
               </div>
               <div id="invoices-chart"></div>
            </div>

            <!-- End Card -->
         </div>

         <div class="col-md-4">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div class="">
                        <h4 class="mb-1">Services</h4>
                        <p class="font-14">Total Services</p>
                     </div>
                     <div class="">
                        <h2><span id="services-count">0</span><sup></sup></h2>
                     </div>
                  </div>
               </div>
               <div id="services-chart"></div>
            </div>
            <!-- End Card -->
         </div>
         

         <div class="col-md-4">
            <!-- Card -->
            <div class="card area-chart-box mb-30">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div class="">
                        <h4 class="mb-1">Tickets</h4>
                        <p class="font-14">Support Requests</p>
                     </div>
                     <div class="">
                        <h2><span id="pending-tickets">15</span><sup></sup><span id="resolved-tickets" style="display:none;">2</span></h2>
                     </div>
                  </div>
               </div>
               <div id="tickets-chart"></div>
            </div>
            <!-- End Card -->
         </div>

     </div>

     


</div>
