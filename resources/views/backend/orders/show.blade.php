<x-backend-layout>
    <x-slot name="title">
         Account &mdash; Manifest Multimedia 
    </x-slot>
 Order New Product

 <div class="col-12">
    <div class="card mb-30">
        <!-- Form -->
        <form action="#">
            <h4 class="font-20 mb-30 mt-30 mx-4">Form Wizard</h4>
            <div id="smartwizard" class="sw sw-theme-arrows sw-justified">
                <ul class="nav">
                    <li>
                        <a class="nav-link inactive active" href="#step-1">
                            User Details
                        </a>
                    </li>
                    <li>
                        <a class="nav-link inactive" href="#step-2">
                            Address
                        </a>
                    </li>
                    <li>
                        <a class="nav-link inactive" href="#step-3">
                            Review &amp; Submit
                        </a>
                    </li>
                    <li>
                        <a class="nav-link inactive" href="#step-4">
                            <i class="icofont-check-alt"></i>
                        </a>
                    </li>
                </ul>
            
                <div class="tab-content" style="height: 335px;">
                    <div id="step-1" class="tab-pane" role="tabpanel" style="display: block;">
                        <!-- User Details -->
                        <div class="card-body">
                            <h4 class="font-20 mb-20">User Details</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">First Name</label>
                                        <input type="text" class="theme-input-style" placeholder="Type Your First Name" required="">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Email</label>
                                        <input type="email" class="theme-input-style" placeholder="Your Email Address">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Age</label>
                                        <input type="text" class="theme-input-style style--five" placeholder="24">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Last Name</label>
                                        <input type="text" class="theme-input-style" placeholder="Type Your Last Name">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Phone</label>
                                        <input type="text" class="theme-input-style" placeholder="Phone">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Gender</label>
                                        
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center mr-5">
                                                <!-- Custom Radio -->
                                                <div class="custom-radio mr-3">
                                                    <input type="radio" id="male" name="gender-group">
                                                    <label for="male"></label>
                                                </div>
                                                <!-- End Custom Radio -->
                                                
                                                <label for="male">Male</label>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <!-- Custom Radio -->
                                                <div class="custom-radio mr-3">
                                                    <input type="radio" id="female" name="gender-group">
                                                    <label for="female"></label>
                                                </div>
                                                <!-- End Custom Radio -->
                                                
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End User Details -->
                    </div>
                    <div id="step-2" class="tab-pane" role="tabpanel" style="display: none;">
                        <!-- Address-->
                        <div class="card-body">
                            <h4 class="font-20 mb-20">Address</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address 01</label>
                                        <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">City</label>
                                        <input type="text" class="theme-input-style" placeholder="Dhaka">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Postcode</label>
                                        <input type="text" class="theme-input-style" placeholder="2456">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address 02</label>
                                        <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">State</label>
                                        <input type="text" class="theme-input-style" placeholder="VICA">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Country</label>
                                        <select class="form-control">
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="india">India</option>
                                            <option value="pakistan">Pakistan</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="vhutan">Vhutan</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End Address -->
                    </div> 
                    <div id="step-3" class="tab-pane" role="tabpanel" style="display: none;">
                        <!-- Review-->
                        <div class="card-body">
                            <h4 class="font-20 mb-20">Review</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Name</span>
                                        <span class="black">Abrilay Khatun</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Email</span>
                                        <span class="black">username@email.com</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20 mb-md-0">
                                        <span class="font-14 bold c4 mr-4">Phone</span>
                                        <span class="black">+25 6987 4521</span>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Age</span>
                                        <span class="black">24</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Gender</span>
                                        <span class="black">Male</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Address</span>
                                        <span class="black">Melbourne 3000, VIC, Australia</span>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End Review -->
                    </div>
                    <div id="step-4" class="tab-pane" role="tabpanel" style="display: none;">
                        <div class="step-done">
                            <span class="btn-circle done"><i class="icofont-check"></i></span>
                            <h2 class="text_color font-30 mb-20">Done Successfully!</h2>
                            <p>Integer ac interdum lacus. Nunc porta semper lacus a varius. Pellentesque habitant morbi tristique senectus.</p>
                        </div>
                    </div>
                </div><div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;"><button class="btn sw-btn-prev disabled" type="button">Previous</button><button class="btn sw-btn-next" type="button">Next</button></div>
            </div>
        </form>
        <!-- End Form -->
    </div>

    <div class="card mb-30">
        <!-- Form -->
        <form action="#">
            <h4 class="font-20 smartwizard2-top-title">Horizontal Form Wizard</h4>
            <div id="smartwizard2" class="sw sw-theme-default sw-justified">
                <ul class="nav">
                    <li>
                        <a class="nav-link inactive active" href="#stepp-1">
                            <i class="icofont-user-alt-7"></i>
                            <span class="d-block">User Details</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link inactive" href="#stepp-2">
                            <i class="icofont-location-pin"></i>
                            <span class="d-block">Address</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link inactive" href="#stepp-3">
                            <i class="icofont-check-circled"></i>
                            <span class="d-block">Review &amp; Submit</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link inactive" href="#stepp-4">
                        </a>
                    </li>
                </ul>
            
                <div class="tab-content" style="height: 295px;">
                    <div id="stepp-1" class="tab-pane p-0" role="tabpanel" style="display: block;">
                        <!-- User Details -->
                        <div class="card-body p-0">
                            <h4 class="font-20 mb-20">User Details</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">First Name</label>
                                        <input type="text" class="theme-input-style" placeholder="Type Your First Name" required="">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Email</label>
                                        <input type="email" class="theme-input-style" placeholder="Your Email Address">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Age</label>
                                        <input type="text" class="theme-input-style style--five" placeholder="24">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Last Name</label>
                                        <input type="text" class="theme-input-style" placeholder="Type Your Last Name">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Phone</label>
                                        <input type="text" class="theme-input-style" placeholder="Phone">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Gender</label>
                                        
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center mr-5">
                                                <!-- Custom Radio -->
                                                <div class="custom-radio mr-3">
                                                    <input type="radio" id="male2" name="gender-group2">
                                                    <label for="male2"></label>
                                                </div>
                                                <!-- End Custom Radio -->
                                                
                                                <label for="male">Male</label>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <!-- Custom Radio -->
                                                <div class="custom-radio mr-3">
                                                    <input type="radio" id="female2" name="gender-group2">
                                                    <label for="female2"></label>
                                                </div>
                                                <!-- End Custom Radio -->
                                                
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End User Details -->
                    </div>
                    <div id="stepp-2" class="tab-pane p-0" role="tabpanel" style="display: none;">
                        <!-- Address-->
                        <div class="card-body p-0">
                            <h4 class="font-20 mb-20">Address</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address 01</label>
                                        <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">City</label>
                                        <input type="text" class="theme-input-style" placeholder="Dhaka">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Postcode</label>
                                        <input type="text" class="theme-input-style" placeholder="2456">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address 02</label>
                                        <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">State</label>
                                        <input type="text" class="theme-input-style" placeholder="VICA">
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Country</label>
                                        <select class="form-control">
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="india">India</option>
                                            <option value="pakistan">Pakistan</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="vhutan">Vhutan</option>
                                        </select>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End Address -->
                    </div> 
                    <div id="stepp-3" class="tab-pane p-0" role="tabpanel" style="display: none;">
                        <!-- Review-->
                        <div class="card-body p-0">
                            <h4 class="font-20 mb-20">Review</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Name</span>
                                        <span class="black">Abrilay Khatun</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Email</span>
                                        <span class="black">username@email.com</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Phone</span>
                                        <span class="black">+25 6987 4521</span>
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Age</span>
                                        <span class="black">24</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Gender</span>
                                        <span class="black">Male</span>
                                    </div>
                                    <!-- End Form Group -->
                                    
                                    <!-- Form Group -->
                                    <div class="review-list mb-20">
                                        <span class="font-14 bold c4 mr-4">Address</span>
                                        <span class="black">Melbourne 3000, VIC, Australia</span>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                        </div>
                        <!-- End Review -->
                    </div>
                    <div id="stepp-4" class="tab-pane" role="tabpanel" style="display: none;">
                        <div class="step-done">
                            <span class="btn-circle done"><i class="icofont-check"></i></span>
                            <h2 class="text_color font-30 mb-20">Done Successfully!</h2>
                            <p>Integer ac interdum lacus. Nunc porta semper lacus a varius. Pellentesque habitant morbi tristique senectus.</p>
                        </div>
                    </div>
                </div><div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;"><button class="btn sw-btn-prev disabled" type="button">Previous</button><button class="btn sw-btn-next" type="button">Next</button></div>
            </div>
        </form>
        <!-- End Form -->
    </div>

    <div class="card vertical-step-wizard">
        <!-- Form -->
        <form action="#">
            <h4 class="font-20 mb-30 mt-30 mx-3 mx-sm-4">Vertical Form Wizard</h4>
           
            <div id="example-vertical" role="application" class="wizard clearfix"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="example-vertical-t-0" href="#example-vertical-h-0" aria-controls="example-vertical-p-0"><i class="icofont-user-alt-7"></i><span class="current-info audible">current step: </span><span class="number">1.</span> User Details</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-vertical-t-1" href="#example-vertical-h-1" aria-controls="example-vertical-p-1"><i class="icofont-location-pin"></i><span class="number">2.</span> Address</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="example-vertical-t-2" href="#example-vertical-h-2" aria-controls="example-vertical-p-2"><i class="icofont-check-circled"></i><span class="number">3.</span> Review &amp; Submit</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="example-vertical-t-3" href="#example-vertical-h-3" aria-controls="example-vertical-p-3"><span class="number">4.</span> Complete</a></li></ul></div><div class="content clearfix">
                <h3 id="example-vertical-h-0" tabindex="-1" class="title current">User Details</h3>
                <section id="example-vertical-p-0" role="tabpanel" aria-labelledby="example-vertical-h-0" class="body current" aria-hidden="false">
                    <!-- User Details -->
                    <div class="card-body pt-0">
                        <h4 class="font-20 mb-20">User Details</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">First Name</label>
                                    <input type="text" class="theme-input-style" placeholder="Type Your First Name" required="">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Email</label>
                                    <input type="email" class="theme-input-style" placeholder="Your Email Address">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Age</label>
                                    <input type="text" class="theme-input-style style--five" placeholder="24">
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Last Name</label>
                                    <input type="text" class="theme-input-style" placeholder="Type Your Last Name">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Phone</label>
                                    <input type="text" class="theme-input-style" placeholder="Phone">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Gender</label>
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center mr-5">
                                            <!-- Custom Radio -->
                                            <div class="custom-radio mr-3">
                                                <input type="radio" id="male3" name="gender-group3">
                                                <label for="male3"></label>
                                            </div>
                                            <!-- End Custom Radio -->
                                            
                                            <label for="male">Male</label>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!-- Custom Radio -->
                                            <div class="custom-radio mr-3">
                                                <input type="radio" id="female3" name="gender-group3">
                                                <label for="female3"></label>
                                            </div>
                                            <!-- End Custom Radio -->
                                            
                                            <label for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                    </div>
                    <!-- End User Details -->
                </section>
                <h3 id="example-vertical-h-1" tabindex="-1" class="title">Address</h3>
                <section id="example-vertical-p-1" role="tabpanel" aria-labelledby="example-vertical-h-1" class="body" aria-hidden="true" style="display: none;">
                    <!-- Address-->
                    <div class="card-body pt-0">
                        <h4 class="font-20 mb-20">Address</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Address 01</label>
                                    <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">City</label>
                                    <input type="text" class="theme-input-style" placeholder="Dhaka">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Postcode</label>
                                    <input type="text" class="theme-input-style" placeholder="2456">
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Address 02</label>
                                    <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">State</label>
                                    <input type="text" class="theme-input-style" placeholder="VICA">
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Country</label>
                                    <select class="form-control">
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="india">India</option>
                                        <option value="pakistan">Pakistan</option>
                                        <option value="nepal">Nepal</option>
                                        <option value="vhutan">Vhutan</option>
                                    </select>
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                    </div>
                    <!-- End Address -->
                </section>
                <h3 id="example-vertical-h-2" tabindex="-1" class="title">Review &amp; Submit</h3>
                <section id="example-vertical-p-2" role="tabpanel" aria-labelledby="example-vertical-h-2" class="body" aria-hidden="true" style="display: none;">
                    <!-- Review-->
                    <div class="card-body pt-0">
                        <h4 class="font-20 mb-20">Review</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="review-list mb-20">
                                    <span class="font-14 bold c4 mr-4">Name</span>
                                    <span class="black">Abrilay Khatun</span>
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="review-list mb-20">
                                    <span class="font-14 bold c4 mr-4">Email</span>
                                    <span class="black">username@email.com</span>
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="review-list mb-20">
                                    <span class="font-14 bold c4 mr-4">Phone</span>
                                    <span class="black">+25 6987 4521</span>
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Form Group -->
                                <div class="review-list mb-20">
                                    <span class="font-14 bold c4 mr-4">Age</span>
                                    <span class="black">24</span>
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="review-list mb-20">
                                    <span class="font-14 bold c4 mr-4">Gender</span>
                                    <span class="black">Male</span>
                                </div>
                                <!-- End Form Group -->
                                
                                <!-- Form Group -->
                                <div class="review-list mb-20">
                                    <span class="font-14 bold c4 mr-4">Address</span>
                                    <span class="black">Melbourne 3000, VIC, Australia</span>
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                    </div>
                    <!-- End Review -->
                </section>
                <h3 id="example-vertical-h-3" tabindex="-1" class="title">Complete</h3>
                <section id="example-vertical-p-3" role="tabpanel" aria-labelledby="example-vertical-h-3" class="body" aria-hidden="true" style="display: none;">
                    <div class="step-done">
                        <div class="">
                            <span class="btn-circle done"><i class="icofont-check"></i></span>
                            <h2 class="text_color font-30 mb-20">Done Successfully!</h2>
                            <p>Integer ac interdum lacus. Nunc porta semper lacus a varius. Pellentesque habitant morbi tristique senectus.</p>
                        </div>
                    </div>
                </section>
            </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>

        </form>
        <!-- End Form -->
    </div>
            
</div>
 </x-backend-layout>