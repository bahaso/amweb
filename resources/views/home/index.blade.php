@extends( 'layouts.default.layout' )

@section( 'head_page_css' )
	@parent
	{!! html_css( 'home.css', 'css/fo' ) !!}
@stop 

@section( 'content' )
    <section id="slideshow" class="cover fullscreen image-slider slider-all-controls controls-inside parallax"
    		 data-h-diff="70"
    	>
        <ul class="slides">
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti1.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
            </li>
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti2.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
            </li>
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti3.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
            </li>
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti4.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
            </li>
        </ul>
    </section>

    <div class="container">

        <div class="row">

            <section id="about_imf" class="col-sm-6 about-section">
                <div class="well feature bordered">
                    <h4 class="title mb40">Annual Meetings IMF-WB in Indonesia</h4>
                    <div class="logo mb40">
                        {!! html_img( 'img/am2018/amf2018-logo.jpg', 
                            [ 
                                'w'     => 388,
                                'h'     => 142,
                                'class' => 'logo logo-dark' 
                            ]) !!}
                    </div>
                    <p class="desc">
                        Annual Meetings of International Monetary Funds &amp; World Bank Group (IMF-WB) are

                        regular meetings which have been held since 1946 and are conducted annually in

                        October (during autumn) by Boards of Governors of IMF and WBG. The annual

                        meeting for 2018 will be held in Nusa Dua, Bali, Indonesia in October.
                    </p>
                    <a class="btn btn-sm btn-blue" href="{{ route( 'f.abouts.am2018') }}">
                        View More
                    </a>
                </div>
            </section>

            <section id="about_voyage" class="col-sm-6 about-section">
                <div class="well feature bordered">
                    <h4 class="title mb40">Voyage to Indonesia</h4>
                    <div class="logo mb40">
                        {!! html_img( 'img/am2018/voyage-to-indonesia.png', 
                            [ 
                                'w'     => 339,
                                'h'     => 137,
                                'class' => 'background-image' 
                            ]) !!}
                    </div>
                    <p class="desc">
                        ‘Voyage of Indonesia’ is the activities program covering series of events conducted until the peak event of the Annual Meetings IMF-WB in October, 2018 and aftermath. This program aims to increase the awareness of the 2018 Annual Meetings IMF-WB in Indonesia and to promote Indonesia to delegations attending this event.
                    </p>
                    <a class="btn btn-sm btn-blue" href="{{ route( 'f.abouts.vti') }}">
                        View More
                    </a>
                </div>
            </section>

        </div>

    </div>

    <div id="news_wrapper">
    	<div class="container">
	        <section id="news" class="row">
                <div class="row masonry fadeIn">
                    <div class="col-sm-4 post-snippet masonry-item">

                        <div class="logo-carousel" data-max-items="1" data-direction-nav="true">
                            <ul class="slides">
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 img-home">
            				            {!! html_img( 'img/am2018/public/IMF-conference.jpg', 
            				                [ 
            				                	'w'		=> 408,
            				                	'h'		=> 300,
            				                    'class' => 'img-home' 
            				                ]) !!}
                                        <div class="caption text-center">
                                        	<h4>Latest News | April 16th 2018</h4>
                                            <span class="text-info">
                                                <p>
                                            	Coordinator Minister of Maritime Lead The Meeting On Preparing IMF-World Bank Annual Meetings 2018 In Indonesia
                                                </p>
                                                <a href="#" class="btn-link">Learn More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 img-home">
                                        {!! html_img( 'img/am2018/public/IMF-conference.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4>Latest News | April 16th 2018</h4>
                                            <span class="text-info">
                                                <p>
                                                Coordinator Minister of Maritime Lead The Meeting On Preparing IMF-World Bank Annual Meetings 2018 In Indonesia
                                                </p>
                                                <a href="#" class="btn-link">Learn More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
               		<div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32 img-home">
				            {!! html_img( 'img/am2018/public/aabbcc.jpg', 
				                [ 
				                	'w'		=> 408,
				                	'h'		=> 300,
				                    'class' => 'img-home' 
				                ]) !!}
                            <div class="caption text-center">
                            	<h4>Tourist Package</h4>
                                <span class="text-info">
                                    <p>
                                    	The World's Largest and grates Buddisht temple, build in the 19th century with mountainous scenery
                                    </p>
                                    <a href="#" class="btn-link">Learn More</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32 ">

				            {!! html_img( 'img/am2018/public/borobudur-2.jpg', 
				                [ 
				                	'w'		=> 408,
				                	'h'		=> 300,
				                    'class' => 'img-home' 
				                ]) !!}
                            <div class="caption text-center">
                            	<h4>INDONESIA UPDATE</h4>
                                <span class="text-info">
                                    <p>
                                	   International Development Association (IDA18) 4th Replenishment Meeting in Yogyakarta
                                    </p>
                                    <a href="#" class="btn-link">Learn More</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                </div>
                <!--end of row-->
	        </section>
        </div>
    </div>

    <div id="countdown" class="bg-secondary">
	    <div class="container">
	        <div class="row">
	        	<div id="timer" class="col-md-6">
	        		<div class="text-center countdown-timer">
                        <div class="countdown" data-date="2018/10/14"></div>
                        <div class="sep">
                        	<span class="text">Voyage To Indonesia in</span>
                        </div>
                        <div>
                            <div class="days">
                            	<span class="text">00</span>
                            	<span class="label">Days</span>
                            </div>
                            <div class="hours">
                            	<span class="text">00</span>
                            	<span class="label">Hours</span>
                        	</div>
                            <div class="mins">
                            	<span class="text">00</span>
                            	<span class="label">Minutes</span>
                        	</div>
                            <div class="secs">
                            	<span class="text">00</span>
                            	<span class="label">Seconds</span>
                        	</div>
                        </div>
	        		</div>
	        		
	        	</div>
	        	<div id="follow" class="col-md-6">
	        		<div class="fo-col text-center header-title">
	        			Follow us at:
	        		</div>
	        		<div class="fo-col text-center">
	                    <a href="#" target="_blank">
	                        <i class="ti-facebook color-white"></i>
	                    </a>
	                    <a href="#" target="_blank">
	                        <i class="ti-instagram color-white"></i>
	                    </a>
	                    <a href="#" target="_blank">
	                        <i class="ti-twitter-alt color-white"></i>
	                    </a>
	                    <a href="#" target="_blank">
	                        <i class="ti-youtube color-white"></i>
	                    </a>
	        		</div>
	        	</div>
	        </div>
	        <!--end of row-->
	    </div>
	    <!--end of container-->
	</div>

	@include( '_partials._sponsors')
@stop
