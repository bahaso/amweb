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
		            {!! html_img( 'img/am2018/slides/background-vti.png', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
            </li>
        </ul>
    </section>

    <div class="container">

    	<section id="about" class="row">
            <div class="col-md-3 logo-voyage">
	            {!! html_img( 'img/am2018/voyage-to-indonesia.png', 
	                [ 
	                	'w'		=> 235,
	                	'h'		=> 95,
	                    'class' => 'background-image' 
	                ]) !!}
            </div>
            <div class="col-md-9 feature bordered desc">
                <h4 class="uppercase mb100">Voyage To Indonesia</h4>
                <p>
                    "Voyage To Indonesia" (VTI) is the big theme of IMF - WB Annual Meetings 2018 preparation, taken form the essence of 'voyage' as a hourney toward new place and discovery. The objective is to leverage the benefits of the event for national interest and International community.
                </p>
                <a class="btn btn-sm" href="#">Read More</a>
            </div>
        </section>

    </div>

    <div id="news_wrapper">
    	<div class="container">
	        <section id="news" class="row">
	            <div class="col-md-9 col-md-push-3">
	                <div class="row masonry-loader fadeOut">
	                    <div class="col-sm-12 text-center">
	                        <div class="spinner"></div>
	                    </div>
	                </div>
	                <div class="row masonry fadeIn" style="position: relative; height: 330px;">
	                    <div class="col-sm-6 post-snippet masonry-item" style="position: absolute; left: 0px; top: 0px;">
	                        <div class="image-caption cast-shadow mb-xs-32 img-home">
					            {!! html_img( 'img/am2018/news/covers/home-1.jpg', 
					                [ 
					                	'w'		=> 408,
					                	'h'		=> 300,
					                    'class' => 'img-home' 
					                ]) !!}
	                            <div class="caption text-center">
	                                <p>
	                                    <a class="btn btn-md btn-filled" href="">Learn More</a>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                    <!--end of snippet-->
	                    <div class="col-sm-6 post-snippet masonry-item" style="position: absolute; left: 438px; top: 0px;">
	                        <div class="image-caption cast-shadow mb-xs-32 ">

					            {!! html_img( 'img/am2018/news/covers/home-2.jpg', 
					                [ 
					                	'w'		=> 408,
					                	'h'		=> 300,
					                    'class' => 'img-home' 
					                ]) !!}
	                            <div class="caption text-center">
	                                <p>
	                                    <a class="btn btn-md btn-filled" href="#">Learn More</a>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                    <!--end of snippet-->
	                </div>
	                <!--end of row-->
	            </div>
	            <!--end of 9 col-->
	            <div class="col-md-3 col-md-pull-9 hidden-sm">
	                <div class="widget">
	                    <h6 class="title">Recent Posts</h6>
	                    <hr>
	                    <ul class="link-list recent-posts">
	                        <li>
	                            <a href="#">A simple image post for starters</a>
	                            <span class="date">September 23, 2015</span>
	                        </li>
	                        <li>
	                            <a href="#">An audio post for good measure</a>
	                            <span class="date">September 19, 2015</span>
	                        </li>
	                        <li>
	                            <a href="#">A thoguhtful blockquote post on life</a>
	                            <span class="date">September 07, 2015</span>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <!--end of sidebar-->
	        </section>
        </div>
    </div>

    <div id="countdown" class="bg-secondary">
	    <div class="container">
	        <div class="row">
	        	<div id="timer" class="col-md-6">
	        		<div class="text-center header-title">
	        			Left To Annual Meeting 2018
	        		</div>
	        		<div class="text-center countdown-timer">
                        <!-- <div class="countdown" data-date="2018/12/01"></div> -->
                        <div class="days">
                        	<span class="text">00</span>
                        	<span class="label">Days</span>
                        </div>
                        <div class="sep">
                        	<span class="text">:</span>
                        	<span class="label">&nbsp;</span>
                        </div>
                        <div class="hours">
                        	<span class="text">00</span>
                        	<span class="label">Hours</span>
                    	</div>
	        		</div>
	        		
	        	</div>
	        	<div id="follow" class="col-md-6">
	        		<div class="text-center header-title">
	        			Follow us at
	        		</div>
	        		<div class="text-center">
	                    <a href="#" target="_blank">
	                        <i class="ti-facebook color-white"></i>
	                    </a>
	                    <a href="#" target="_blank">
	                        <i class="ti-twitter-alt color-white"></i>
	                    </a>
	                    <a href="#" target="_blank">
	                        <i class="ti-instagram color-white"></i>
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