<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AM 2018 Bali</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/ytplayer.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body class="scroll-assist">
        <div class="nav-container">
            <a id="top"></a>
            <nav>   
                <div class="nav-bar">
                    <div class="module left">
                        <a href="{{ URL::to('/') }}">
                            <img class="logo logo-light" alt="AM 2018 Bali" src="{{ asset('img/logo-light.png') }}" />
                            <img class="logo logo-dark" alt="AM 2018 Bali" src="{{ asset('img/logo_am.jpeg') }}" />
                        </a>
                        <a href="{{ URL::to('/vti/about/en') }}">
                            <img class="logo logo-light" alt="AM 2018 Bali" src="{{ asset('img/logo-light.png') }}" />
                            <img class="logo logo-dark" alt="AM 2018 Bali" src="{{ asset('img/logo_vti.jpeg') }}" />
                        </a>
                    </div>
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group right">
                        <div class="module left">
                            <ul class="menu">
                                <li>
                                    <a href="/">
                                        Home
                                    </a>                                    
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Voyage To Indonesia
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to('/event') }}">
                                                Event
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/event/detail') }}">
                                                Event Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/vti/about/en') }}">
                                                About VTI
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Pages
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="title">Inner Pages</span>
                                                </li>
                                                <li>
                                                    <a href="page-about-us-1.html">About Us 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-us-2.html">About Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-about-us-3.html">About Us 3</a>
                                                </li>
                                                <li>
                                                    <a href="page-services-1.html">Services 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-services-2.html">Services 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-services-3.html">Services 3</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-1.html">Contact 1</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-2.html">Contact 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-contact-3.html">Planner</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="title">Utility Pages</span>
                                                </li>
                                                <li>
                                                    <a href="page-login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="page-register.html">Register</a>
                                                </li>
                                                <li>
                                                    <a href="page-coming-soon.html">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a href="page-faq.html">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="page-confirmation.html">Confirmation</a>
                                                </li>
                                                <li>
                                                    <a href="page-countdown.html">Countdown</a>
                                                </li>
                                                <li>
                                                    <a href="page-countdown-2.html">Countdown 2</a>
                                                </li>
                                                <li>
                                                    <a href="page-404.html">404 - Error</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Elements
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="title">Elements</span>
                                                </li>
                                                <li>
                                                    <a href="elements-buttons.html">
                                                        <i class="ti-link"></i> Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="elements-tabs.html">
                                                        <i class="ti-layout-tab"></i> Tabbed Content</a>
                                                </li>
                                                <li>
                                                    <a href="elements-progress.html">
                                                        <i class="ti-rocket"></i> Progress Bars</a>
                                                </li>
                                                <li>
                                                    <a href="elements-accordions.html">
                                                        <i class="ti-layout-accordion-separated"></i> Accordions</a>
                                                </li>
                                                <li>
                                                    <a href="elements-alerts.html">
                                                        <i class="ti-flag-alt"></i> Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="elements-form-inputs.html">
                                                        <i class="ti-pencil-alt"></i> Form Inputs</a>
                                                </li>
                                                <li>
                                                    <a href="elements-countdown.html">
                                                        <i class="ti-alarm-clock"></i> Countdowns</a>
                                                </li>
                                                <li>
                                                    <a href="elements-modals.html">
                                                        <i class="ti-layout-slider-alt"></i> Modals</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="title">Elements</span>
                                                </li>
                                                <li>
                                                    <a href="elements-pricing.html">
                                                        <i class="ti-money"></i> Pricing Tables</a>
                                                </li>
                                                <li>
                                                    <a href="elements-icon-boxes.html">
                                                        <i class="ti-eye"></i> Icon Boxes</a>
                                                </li>
                                                <li>
                                                    <a href="elements-widgets.html">
                                                        <i class="ti-layout-media-right"></i> Widgets</a>
                                                </li>
                                                <li>
                                                    <a href="elements-typography.html">
                                                        <i class="ti-text"></i> Typography</a>
                                                </li>
                                                <li>
                                                    <a href="elements-lists.html">
                                                        <i class="ti-list"></i> Lists</a>
                                                </li>
                                                <li>
                                                    <a href="elements-grid.html">
                                                        <i class="ti-view-grid"></i> Grid Structure</a>
                                                </li>
                                                <li>
                                                    <a href="elements-textimage.html">
                                                        <i class="ti-layout-list-large-image"></i> Text &amp; Image</a>
                                                </li>
                                                <li>
                                                    <a href="elements-intros.html">
                                                        <i class="ti-microphone"></i> Intro Sections</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <span class="title">Elements</span>
                                                </li>
                                                <li>
                                                    <a href="elements-titles.html">
                                                        <i class="ti-layout-cta-left"></i> Titles Left</a>
                                                </li>
                                                <li>
                                                    <a href="elements-titles-center.html">
                                                        <i class="ti-layout-cta-center"></i> Titles Center</a>
                                                </li>
                                                <li>
                                                    <a href="elements-video.html">
                                                        <i class="ti-video-clapper"></i> Video Inline</a>
                                                </li>
                                                <li>
                                                    <a href="elements-video-bg.html">
                                                        <i class="ti-video-clapper"></i> Video BG</a>
                                                </li>
                                                <li>
                                                    <a href="elements-video-slider.html">
                                                        <i class="ti-video-clapper"></i> Video Slider</a>
                                                </li>
                                                <li>
                                                    <a href="elements-galleries.html">
                                                        <i class="ti-gallery"></i> Image Galleries</a>
                                                </li>
                                                <li>
                                                    <a href="elements-parallax.html">
                                                        <i class="ti-layers"></i> Parallax</a>
                                                </li>
                                                <li>
                                                    <a href="elements-nav-light.html">
                                                        <i class="ti-menu-alt"></i> Nav Styles</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Portfolio
                                    </a>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Contained
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="portfolio-grid-2col.html">
                                                        2 Columns
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-grid.html">
                                                        3 Columns
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-grid-4col.html">
                                                        4 Columns
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Wide
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="portfolio-wide-2col.html">
                                                        2 Columns
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-wide.html">
                                                        3 Columns
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-wide-4col.html">
                                                        4 Columns
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="portfolio-parallax.html">
                                                Parallax
                                            </a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Single
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="portfolio-single-1.html">
                                                        Case Study 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-single-2.html">
                                                        Case Study 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-single-3.html">
                                                        Case Study 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-single-4.html">
                                                        Case Study 4
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio-single-5.html">
                                                        Case Study 5
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Shop
                                    </a>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Shop Layout
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="shop-sidebar.html">
                                                        Sidebar Left
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-sidebar-right.html">
                                                        Sidebar Right
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-fullwidth-4col.html">
                                                        4 Columns
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-fullwidth.html">
                                                        3 Columns
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-fullwidth-2col.html">
                                                        2 Columns
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">
                                                Product Single
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="shop-product-sidebar-left.html">
                                                        Sidebar Left
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-sidebar.html">
                                                        Sidebar Right
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-fullwidth.html">
                                                        No Sidebar
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">
                                                Cart
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-checkout.html">
                                                Checkout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--end of menu module-->
                        <div class="module widget-handle language left">
                            <ul class="menu">
                                <li class="has-dropdown">
                                    <a href="#">ENG</a>
                                    <ul>
                                        <li>
                                            <a href="en">ENG</a>
                                        </li>
                                        <li>
                                            <a href="id">IND</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>

        <div class="main-container">
            <!-- content -->  
            @yield('content')


            <footer class="footer-1 bg-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Data</a>
                                </li>
                                <li>
                                    <a href="#">Research and Publications</a>
                                </li>
                                <li>
                                    <a href="#">Learning</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <ul>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Projects and Operations</a>
                                </li>
                                <li>
                                    <a href="#">Countries</a>
                                </li>
                                <li>
                                    <a href="#">Topics</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title white">FOLLOW US</h6>
                                <hr>
                                <ul class="list-inline social-list">
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-flickr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title white">NEWSLETTER</h6>
                                <hr>
                                <input type="text" placeholder="Enter email to subscribe" />
                            </div>
                            <!--end of widget-->
                        </div>
                    </div>
                    <!--end of row-->

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#">Legal</a> | 
                            <a href="#">Access to Information</a> | 
                            <a href="#">Contact</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            AM 2018 Bali
                        </div>
                    </div>
                </div>
                <!--end of container-->
            </footer>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/flickr.js') }}"></script>
        <script src="{{ asset('js/flexslider.min.js') }}"></script>
        <script src="{{ asset('js/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/masonry.min.js') }}"></script>
        <script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
        <script src="{{ asset('js/spectragram.min.js') }}"></script>
        <script src="{{ asset('js/ytplayer.min.js') }}"></script>
        <script src="{{ asset('js/countdown.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>