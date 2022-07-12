    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div class="nav-menu">
        <!-- Navbar Close -->
        <div class="navbar-close"><i class="far fa-times"></i></div>
        <!-- Nav Search -->
        <div class="nav-search">
            <form>
                <div class="form_group">
                    <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- Main Menu -->
        <nav class="main-menu">
            <ul>
                <li class="menu-item has-children"><a href="#" class="active nav-link">Company</a>
                    <ul class="sub-menu">
                        <li class="has-children"><a href="#">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('')}}">Who We Are</a></li>
                                <li><a href="{{url('')}}">Our Process</a></li>
                                <li><a href="{{url('')}}">Our Core Values</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Products</a>
                            <ul class="sub-menu">
                                <li><a href="onepage-index-1.html">SmartPOS</a></li>
                                <li><a href="onepage-index-2.html">SmartAccounting</a></li>
                                <li><a href="onepage-index-3.html">SmartLMS</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- <li class="menu-item has-children"><a href="#" class="nav-link">Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('')}}">Our Service</a></li>
                        <li><a href="{{url('')}}">Service Details</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-item has-children"><a href="#" class="nav-link">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('')}}">Our Portfolio</a></li>
                        <li><a href="{{url('')}}">Portfolio Details</a></li>
                    </ul>
                </li> --}}
                <li class="menu-item has-children"><a href="#" class="nav-link">Industry</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('')}}">Retail</a></li>
                        <li><a href="{{url('')}}">Healthcare</a></li>
                        <li><a href="{{url('')}}">Government</a></li>
                        <li><a href="{{url('')}}">Education</a></li>
                        <li><a href="{{url('')}}">Blockchain</a></li>
                        <li><a href="{{url('')}}">Charity</a></li>
                        <li><a href="{{url('')}}">Technology</a></li>
                        <li><a href="{{url('')}}">Human Resources</a></li>
                    </ul>
                </li>
                {{-- <li class="menu-item has-children"><a href="#" class="nav-link">Blog</a>
                     <ul class="sub-menu">
                        <li><a href="{{url('')}}">Our Blog</a></li>
                        <li><a href="{{url('')}}">Blog Details</a></li>
                    </ul> 
                </li> --}}
                <li class="menu-item"><a href="{{url('')}}" class="nav-link">Blog</a></li>
                <li class="menu-item"><a href="{{url('')}}" class="nav-link">Contact</a></li>
                {{-- <li class="nav-button"><a href="{{url('#')}}" class="main-btn arrow-btn">Let’s Talk</a></li> --}}
            </ul>
        </nav>
    </div>
    <div class="header-right-nav">
        <ul>
            <li class="bar-item"><a href="#"><img src="{{asset('pixlab/images/dot.png')}}" alt="dot"></a></li>
            <li class="navbar-toggle-btn">
                <div class="navbar-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </li>
        </ul>
    </div>