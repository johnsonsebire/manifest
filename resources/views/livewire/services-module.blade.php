<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="col-12">
        <div class="card mb-30">
            <div class="card-body pt-30">
                <h4 class="font-20 ">Services</h4>
            </div>
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="text-nowrap hoverable dh-table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Price</th>
                            <th>Order Date</th>
                            <th>Billing Cycle</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @if (!$services->count()==0)
                       
                       @foreach ($services as $item)
                       <tr>                          
                           <td><span><em>{{getProductDetails($item->product_id,'description')}}</em><br> {{ $item->associated_domain}}  </span></td>
                           <td>${{ getProductDetails($item->product_id, 'price')}} USD</td>
                           <td>{{ $item->start_date}}</td>
                           <td>{{$item->billing_cycle}}</td>
                           <td> <span class="status-btn paid"> {{$item->status}}</span></td>
                           <td><a href="#" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                       </tr>
                       @endforeach
                      
                       @else 

                   <td>    <a href="#"> Add a service </a>  </td>

                       @endif
                      
                      
                     
                    </tbody>
                </table>
                <div class="pagination" style="padding-left:25px">
                    {{ $services->links('pagination') }}

                </div>
                
                <!-- End Invoice List Table -->
            </div>
        </div>
    </div>

</div>
