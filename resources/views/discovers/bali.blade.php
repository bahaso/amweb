@extends( 'layouts.default.layout' )

@section( 'content' )
	<section class="pt0 pb0">
	    <div class="slider-all-controls">
	        <ul class="slides">
	            <li class="vid-bg image-bg overlay pt240 pb240">
	                <div class="background-image-holder">
	                    <img alt="Background Image" class="background-image" src="https://unsplash.imgix.net/photo-1425321395722-b1dd54a97cf3?q=75&fm=jpg&w=1080&fit=max&s=9e4ce3e023621d6f94259eea8fa3b856">
	                </div>
	                <div class="fs-vid-background">
	                    <video muted loop>
	                        <source src="{{ asset( 'videos/am2018/video.webm' ) }}" type="video/webm">
	                        <source src="{{ asset( 'videos/am2018/video.mp4' ) }}" type="video/mp4">
	                        <source src="{{ asset( 'videos/am2018/video.ogv' ) }}" type="video/ogg">
	                    </video>
	                </div>
	                <div class="container">
	                    <div class="row">
	                        <div class="col-sm-12 text-center">
	                            <h1 class="large">Flexslider + Video Backgrounds</h1>
	                            <p class="lead">
	                                Simple markup with intellegent auto play and pause functionality.
	                            </p>
	                        </div>
	                    </div>
	                    <!--end of row-->
	                </div>
	                <!--end of container-->
	            </li>
	            <li class="vid-bg image-bg overlay pt240 pb240">
	                <div class="background-image-holder">
	                    <img alt="Background Image" class="background-image" src="https://unsplash.imgix.net/photo-1425321395722-b1dd54a97cf3?q=75&fm=jpg&w=1080&fit=max&s=9e4ce3e023621d6f94259eea8fa3b856">
	                </div>
	                <div class="fs-vid-background">
	                    <video muted loop>
	                        <source src="{{ asset( 'videos/am2018/video2.webm' ) }}" type="video/webm">
	                        <source src="{{ asset( 'videos/am2018/video2.mp4' ) }}" type="video/mp4">
	                        <source src="{{ asset( 'videos/am2018/video2.ogv' ) }}" type="video/ogg">
	                    </video>
	                </div>
	                <div class="container">
	                    <div class="row">
	                        <div class="col-sm-12 text-center">
	                            <h1 class="large">Flexslider + Video Backgrounds</h1>
	                            <p class="lead">
	                                Simple markup with intellegent auto play and pause functionality.
	                            </p>
	                        </div>
	                    </div>
	                    <!--end of row-->
	                </div>
	                <!--end of container-->
	            </li>
	        </ul>
	    </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="tabbed-content text-tabs no-border">
                        <ul class="tabs mb64 mb-xs-24">
                            <li class="active">
                                <div class="tab-title">
                                    <span>GWK</span>
                                </div>
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="local-video-container mb40">
                                                <div class="background-image-holder">
										            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
										            	[
										            	 	'class' => 'background-image'
										            	]) !!}
                                                </div>
                                                <video controls="">
                                                    <source src="{{ asset( 'videos/am2018/video.webm' ) }}" type="video/webm">
                                                    <source src="{{ asset( 'videos/am2018/video.mp4' ) }}" type="video/mp4">
                                                    <source src="{{ asset( 'videos/am2018/video.ogv' ) }}" type="video/ogg">
                                                </video>
                                                <div class="play-button"></div>
                                            </div>
                                            <!--end of local inline video-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tab-title">
                                    <span>Tanah Lot</span>
                                </div>
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="local-video-container mb40">
                                                <div class="background-image-holder">
										            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
										            	[
										            	 	'class' => 'background-image'
										            	]) !!}
                                                </div>
                                                <video controls="">
                                                    <source src="{{ asset( 'videos/am2018/video.webm' ) }}" type="video/webm">
                                                    <source src="{{ asset( 'videos/am2018/video.mp4' ) }}" type="video/mp4">
                                                    <source src="{{ asset( 'videos/am2018/video.ogv' ) }}" type="video/ogg">
                                                </video>
                                                <div class="play-button"></div>
                                            </div>
                                            <!--end of local inline video-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tab-title">
                                    <span>Kuta Beach</span>
                                </div>
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="local-video-container mb40">
                                                <div class="background-image-holder">
										            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
										            	[
										            	 	'class' => 'background-image'
										            	]) !!}
                                                </div>
                                                <video controls="">
                                                    <source src="{{ asset( 'videos/am2018/video.webm' ) }}" type="video/webm">
                                                    <source src="{{ asset( 'videos/am2018/video.mp4' ) }}" type="video/mp4">
                                                    <source src="{{ asset( 'videos/am2018/video.ogv' ) }}" type="video/ogg">
                                                </video>
                                                <div class="play-button"></div>
                                            </div>
                                            <!--end of local inline video-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end of text tabs-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section>
        <div class="container">
            <div class="row mb40">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h3 class="uppercase color-primary mb40 mb-xs-24">Favorites Places</h3>
                    <p class="lead">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', []) !!}
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->
                    </div>
                    <div class="feature">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', []) !!}
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-4 col-sm-6">
                    <div class="feature">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', []) !!}
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->
                    </div>
                    <div class="feature">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', []) !!}
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-4 col-sm-6">
                    <div class="feature">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', []) !!}
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->
                    </div>
                    <div class="feature">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', []) !!}
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Lorem Ipsum</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="feature bordered">
                        <h1 class="large uppercase mb64 mb-xs-24">SIGN UP<br/>NOW</h1>
                        <p class="mb80 mb-xs-24">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a class="btn btn-lg btn-filled inner-link bg-tertiary" href="#book-table">REGISTER</a>
                    </div>
                </div>
                <div class="col-sm-5">
					{!! html_img( 'img/am2018/public/borobudur.jpg', 
						[
							'class' => 'mt80 mt-xs-0 mb24'
						]) !!}
					{!! html_img( 'img/am2018/public/vti-penari-bali-lowres.jpg', 
						[
							'class' => 'col-md-pull-4 relative'
						]) !!}
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

	@include( '_partials._sponsors')
@stop