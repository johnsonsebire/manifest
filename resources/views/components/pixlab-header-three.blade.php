    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
<!--====== Start Header Section ======-->
<header class="theme-header">
    <!-- header Navigation -->
    <div class="header-navigation navigation-style-v3">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{url('/')}}" class="brand-logo"><img src="{{asset('frontend/images/logo/logo.png')}}" alt="Logo"></a>
                    @livewire('language-switcher')
                </div>
                <div class="nav-menu nav-ml-auto">
                    <!-- Navbar Close -->
                    <div class="navbar-close"><i class="far fa-times"></i></div>
                    <!-- Nav Search -->
                    <div class="nav-search">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="{{__('Search Here')}}" name="email" required>
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item has-children"><a href="{{url('#')}}" class="active nav-link">{{__("Company")}}</a>
                                <ul class="sub-menu">
                                    <li class="has-children"><a href="{{url('#')}}">{{__('About Us')}}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('culture')}}">{{__('Our Culture')}}</a></li>
                                            <li><a href="{{url('process')}}">{{__('Our Process')}}</a></li>
                                            <li><a href="{{url('life')}}">{{__('Life At Manifest')}}</a></li>
                                            <li><a href="{{url('career')}}">{{__('Join the Team')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="{{url('#')}}">{{__('Products')}}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('smart-pos')}}">{{__('SmartPOS')}}</a></li>
                                            <li><a href="{{url('smart-accounting')}}">{{__('SmartAccounting')}}</a></li>
                                            <li><a href="{{url('smart-lms')}}">{{__('SmartLMS')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="{{url('#')}}">{{__('Expertise')}}</a>
                                        <ul class="sub-menu">
                                            <li class="has-children"><a href="{{url('#')}}">{{__('Frontend')}}</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('angular-js')}}">{{__('Angular JS')}}</a></li>
                                                    <li><a href="{{url('vue-js')}}">{{__('Vue JS')}}</a></li>
                                                    <li><a href="{{url('react-js')}}">{{__('React JS')}}</a></li>
                                                    <li><a href="{{url('express-js')}}">{{__('Express JS')}}</a></li>
                                                    <li><a href="{{url('javascript')}}">{{__('Javascript')}}</a></li>
                                                    <li><a href="{{url('html-css')}}">{{__('HTML/CSS')}}</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children"><a href="{{url('#')}}">{{__('Backend')}}</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('php')}}">{{__('PHP')}}</a></li>
                                                    <li><a href="{{url('node-js')}}">{{__('Node JS')}}</a></li>
                                                    <li><a href="{{url('java')}}">{{__('Java')}}</a></li>
                                                    <li><a href="{{url('python')}}">{{__('Python')}}</a></li>
                                                    <li><a href="{{url('ruby-on-rails')}}">{{__('Ruby on Rails')}}</a></li>
                                                    <li><a href="{{url('dot-net')}}">{{__('.NET')}}</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children"><a href="{{url('#')}}" >{{__('Cloud/DevOps')}}</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('service/aws')}}">{{__('AWS')}}</a></li>
                                                    <li><a href="{{url('service/google')}}">{{__('Google')}}</a></li>
                                                    <li><a href="{{url('service/azure')}}">{{__('Microsoft Azure')}}</a></li>
                                                </ul></li>
                                            <li class="has-children"><a href="{{url('#')}}">{{__('E-Commerce')}}</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('service/magento')}}">{{__('Magento')}}</a></li>
                                                    <li><a href="{{url('service/shopify')}}">{{__('Shopify')}}</a></li>
                                                    <li><a href="{{url('service/woocommerce')}}">{{__('WooCommerce')}}</a></li>
                                                    <li><a href="{{url('service/bigcommerce')}}">{{__('Big Commerce')}}</a></li>
                                                    <li><a href="{{url('service/opencart')}}">{{__('Open Cart')}}</a></li>     
                                                </ul> 
                                            </li>
                                            <li class="has-children"><a href="{{url('#')}}">{{__('CMS')}}</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('service/wordpress')}}">{{__('WordPress')}}</a></li>
                                                    <li><a href="{{url('service/joomla')}}">{{__('Joomla')}}</a></li>
                                                    <li><a href="{{url('service/drupal')}}">{{__('Drupal')}}</a></li>
                                                    <li><a href="{{url('service/umbraco')}}">{{__('Umbraco')}}</a></li>
                                                    <li><a href="{{url('service/sitescore')}}">{{__('Sitescore')}}</a></li>     
                                                </ul>
                                            </li>
                                            <li class="has-children"><a href="{{url('#')}}">{{__('Other')}}</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('partner/tawk-to')}}">{{__('Tawk.to')}}</a></li>
                                                    <li><a href="{{url('partner/zoho-business')}}">{{__('Zoho Business')}}</a></li>  
                                                    <li><a href="{{url('partner/commerce-box')}}">{{__('Commerce Box')}}</a></li>  
                                                    <li><a href="{{url('partner/cloudypeeps-cpaas')}}">{{__('Cloudy Peeps CPaaS')}}</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="{{url('partner-directory')}}" class="nav-link">{{__('Partnerships')}}</a></li>
                                    <li class="menu-item"><a href="{{url('clientele')}}" class="nav-link">{{__('Clientele')}}</a></li>
                                    <li class="menu-item"><a href="{{url('contact-us')}}" class="nav-link">{{__('Contact Us')}}</a></li>

                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="{{url('#')}}" class="nav-link">{{__('Industry')}}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('industry/retail')}}">{{__('Retail')}}</a></li>
                                    <li><a href="{{url('industry/healthcare')}}">{{__('Healthcare')}}</a></li>
                                    <li><a href="{{url('industry/government')}}">{{__('Government')}}</a></li>
                                    <li><a href="{{url('industry/education')}}">{{__('Education')}}</a></li>
                                    <li><a href="{{url('industry/transport')}}">{{__('Transport')}}</a></li>
                                    <li><a href="{{url('industry/blockchain')}}">{{__('Blockchain')}}</a></li>
                                    <li><a href="{{url('industry/charity')}}">{{__('Charity')}}</a></li>
                                    <li><a href="{{url('industry/technology')}}">{{__('Technology')}}</a></li>
                                    <li><a href="{{url('industry/human-resources')}}">{{__('Human Resources')}}</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="{{url('#')}}" class="nav-link">{{__('Solutions')}}</a>
                                <ul class="sub-menu">
                                    <li class="has-children"><a href="{{url('#')}}">{{__('Development')}}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('service/website-development')}}">{{__('Website Development')}} </a></li>
                                            <li><a href="{{url('service/mobile-app-development')}}">{{__('Mobile App Development')}}</a></li>
                                            <li><a href="{{url('service/web-app-development')}}">{{__('Web App Development')}}</a></li>
                                            <li><a href="{{url('service/blockchain-development')}}">{{__('Blockchain Development')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="{{url('#')}}">{{__('Design')}}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('service/ui-ux-design')}}">{{__('UI/UX Design')}}</a></li>
                                            <li><a href="{{url('service/corporate-branding')}}">{{__('Corporate Branding')}}</a></li>
                                            <li><a href="{{url('service/product-design')}}">{{__('Product Design')}}</a></li>
                                            <li><a href="{{url('service/illustrations')}}">{{__('Illustrations')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="{{url('#')}}">{{__('Training')}}</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url('service/it-training')}}">{{__('IT Training')}}</a></li>
                                        </ul>
                                    </li>
                           
                                    <li><a href="{{url('service/sap-consulting')}}">{{__('SAP Consulting')}}</a></li>
                                    
                                    <li><a href="{{url('service/digital-marketing')}}">{{__('Digital Marketing')}}</a></li>
                                    <li><a href="{{url('service/advertising')}}">{{__('Advertising')}}</a></li>
                                    <li><a href="{{url('service/seo')}}">{{__('SEO')}}</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="{{url('#')}}" class="nav-link">{{__('Resources')}}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('insights')}}">{{__('Insights')}}</a></li>
                                    <li><a href="{{url('downloads')}}">{{__('Downloads')}}</a></li>
                                    <li><a href="{{url('legal')}}">{{__('Legal')}}</a></li>
                                    <li><a href="{{url('developer-resources')}}">{{__('Developer Resources')}}</a></li>
                                </ul>
                            </li>
                            

                            <li class="menu-item"><a href="/login" class="nav-link">{{__('Login')}}</a></li> 
                        </ul>
                    </nav>
                </div>
                <div class="header-right-nav">
                    <ul>
                        <li class="nav-button"><a href="javascript:void(Tawk_API.toggle())" class="main-btn arrow-btn">{{__("Let's Talk")}}</a></li>
                        <li class="bar-item"><img src="{{asset('pixlab/images/bar.png')}}" alt="button"></li>
                        <li class="navbar-toggle-btn">
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>