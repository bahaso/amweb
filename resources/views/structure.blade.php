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
                <div class="nav-utility">
                    <div class="module left">
                        <span class="sub">IMF - World Bank Annual Meetings 2018 in Bali, Indonesia, October 14-20, 2018</span>
                    </div>
                </div>

                <div class="nav-bar v-align-children">
                    <div class="module left">
                        <a href="{{ URL::to('/') }}">
                            <img class="logo logo-light" alt="AM 2018 Bali" src="{{ asset('img/logo-light.png') }}" />
                            <img class="logo logo-dark" alt="AM 2018 Bali" src="{{ asset('img/logo_am.jpg') }}" />
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
                                        About
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to('/about/imf-wbam') }}">IMF - WB Annual Meeting 2018</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/about/imf') }}">IMF</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/about/worldbank') }}">World Bank</a>
                                        </li>
                                        <li>
                                            <a href="#">Indonesia and IMF - World Bank</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="">
                                        Event
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to('/event') }}">Main Events</a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::to('/event') }}">Side Events</a>
                                        </li>
                                        <li>
                                            <a href="#">Venues Map</a>
                                        </li>
                                        <li>
                                            <a href="#">Maps: Bali and Venues</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Voyage To Indonesia
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::to('/about/vti') }}">About VTI</a>
                                        </li>
                                        <li>
                                            <a href="#">Seminar</a>
                                        </li>
                                        <li>
                                            <a href="#">Exhibition</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Discover Indonesia
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">5 Destinasi Pariwisata Indonesia</a>
                                        </li>
                                        <li>
                                            <a href="#">11 Destinasi Bali</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Media and Publication
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="#">Seminar Materials</a>
                                        </li>
                                        <li>
                                            <a href="#">Press Release</a>
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


            <footer class="footer-1 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <div class="widget">
                                <h6 class="title">About</h6>
                                <hr>
                                <ul class = "">
                                    <li>
                                        <a href="{{ URL::to('/about/imf-wbam') }}">IMF - WB Annual Meeting 2018</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/about/imf') }}">IMF</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/about/worldbank') }}">World Bank</a>
                                    </li>
                                    <li>
                                        <a href="#">Indonesia and IMF - World Bank</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Events</h6>
                                <hr>
                                <ul class="">
                                    <li>
                                        <a href="{{ URL::to('/event') }}">Main Events</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/event') }}">Side Events</a>
                                    </li>
                                    <li>
                                        <a href="#">Venues Map</a>
                                    </li>
                                    <li>
                                        <a href="#">Maps: Bali and Venues</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Voyage to Indonesia</h6>
                                <hr>
                                <ul class="">
                                    <li>
                                        <a href="{{ URL::to('/about/vti') }}">About VTI</a>
                                    </li>
                                    <li>
                                        <a href="#">Seminar</a>
                                    </li>
                                    <li>
                                        <a href="#">Exhibition</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Discover Indonesia</h6>
                                <hr>
                                <ul class="">
                                    <li>
                                        <a href="#">5 Destinasi Pariwisata Indonesia</a>
                                    </li>
                                    <li>
                                        <a href="#">11 Destinasi Bali</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Media and Publications</h6>
                                <hr>
                                <ul class="">
                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#">Seminar Materials</a>
                                    </li>
                                    <li>
                                        <a href="#">Press Release</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                    </div>
                    <!--end of row-->
                    
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