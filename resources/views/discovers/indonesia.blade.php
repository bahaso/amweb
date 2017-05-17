@extends( 'layouts.default.layout' )

@section( 'content' )
	<section class="pt0 pb0">
	    <div class="slider-all-controls">
	        <ul class="slides">
	            <li class="vid-bg image-bg overlay pt240 pb240">
	                <div class="background-image-holder">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
			            	[
			            	 	'class' => 'background-image'
			            	]) !!}
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
	                            <h1 class="large">5 Destinations in Indonesia</h1>
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
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
			            	[
			            	 	'class' => 'background-image'
			            	]) !!}
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
	                            <h1 class="large">5 Destinations in Indonesia</h1>
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

    <section>
        <div class="container">
            <div class="row v-align-children">
                <div class="col-sm-6 col-md-5">
                    <h2 class="uppercase color-primary">5 Destinations In Indonesia</h2>
                    <hr>
                    <p>
                        Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="col-sm-6 col-md-offset-1 p0">
                    <div class="col-sm-6 text-center">
                        <div class="feature bordered mb30">
                            <h1 class="large uppercase">5</h1>
                            <h5 class="uppercase">Text</h5>
                        </div>
                    </div>
                    <!--end 6 col-->
                    <div class="col-sm-6 text-center">
                        <div class="feature bordered mb30">
                            <h1 class="large">2</h1>
                            <h5 class="uppercase">Text</h5>
                        </div>
                    </div>
                    <!--end 6 col-->
                    <div class="col-sm-6 text-center">
                        <div class="feature bordered mb30">
                            <h1 class="large">4</h1>
                            <h5 class="uppercase">Text</h5>
                        </div>
                    </div>
                    <!--end 6 col-->
                    <div class="col-sm-6 text-center">
                        <div class="feature bordered mb30">
                            <h1 class="large">3</h1>
                            <h5 class="uppercase">Text</h5>
                        </div>
                    </div>
                    <!--end 6 col-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="tabbed-content text-tabs no-border">
                        <ul class="tabs mb64 mb-xs-24">
                            <li class="active">
                                <div class="tab-title">
                                    <span>Jakarta</span>
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
                                    <span>Kalimantan</span>
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
                                    <span>Bali</span>
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
                                    <span>Sulawesi</span>
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
                                    <span>Raja Ampat</span>
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

	@include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop
