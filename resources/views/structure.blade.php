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
                        <a href="{{ URL::to('/vti/about') }}">
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
                                <li>
                                    <a href="{{ URL::to('/vti/about') }}">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/event') }}">
                                        Event
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/event/detail') }}">
                                        Voyage To Indonesia
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Discover Indonesia
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Media and Publication
                                    </a>
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
                        <div class="col-md-4 col-sm-6">
                            <div class="widget">
                                <h4 class="title header_title">VOYAGE TO INDONESIA</h4>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                                Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                                </p>
                            </div>

                            <span class = "num_followers">15k</span> followers
                            <hr class = "separator">
                            <span class = "white"><i> Follow Us: </i>&nbsp;</span>
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-instagram blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-pinterest blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-google blue"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <i class="ti-youtube blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-dribbble blue"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-tumblr-alt blue"></i>
                                    </a>
                                </li>
                            </ul>
                            <br><br>

                            <div class = "row">
                                <div class = "col-md-7 newsletter">
                                    <input type="text" placeholder="Your Email..." />
                                </div>
                                <div class = "col-md-5 btn-newsletter">
                                    <a class="btn btn-lg btn-filled" href="#">NEWSLETTER</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-4 col-sm-6">
                            <div class="widget">
                                <h6 class="title">BLOGS</h6>
                                <hr>
                                
                                <ul class="cart-overview">
                                    <li>
                                        <a href="#">
                                            <img alt="blog" src="{{ asset('img/capital2.jpg') }}">
                                            <div class="description">
                                                <span class = "upperline"> Hugging pugs is super trendy</span>
                                                <span>Feb 14, 2015</span>   
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="blog" src="{{ asset('img/capital3.jpg') }}">
                                            <div class="description">
                                                <span class = "upperline"> Hugging pugs is super trendy</span>
                                                <span>Feb 14, 2015</span>   
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="blog" src="{{ asset('img/capital4.jpg') }}">
                                            <div class="description">
                                                <span class = "upperline"> Hugging pugs is super trendy</span>
                                                <span>Feb 14, 2015</span>   
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="widget">
                                <h6 class="title white">INSTAGRAM</h6>
                                <hr>
                                <div class="instafeed" data-user-name="mrareweb">
                                    <ul></ul>
                                </div>
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