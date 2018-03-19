@extends( 'layouts.blank' )

@section( 'head_vendor_css' )
	@parent
	{!! html_css( 'bootstrap.css' ) !!}
	{!! html_css( 'themify-icons.css' ) !!}
	{!! html_css( 'flexslider.css' ) !!}
	{!! html_css( 'lightbox.min.css' ) !!}
	{!! html_css( 'ytplayer.css' ) !!}
	{!! html_css( 'theme.css' ) !!}
	{!! html_css( 'custom.css' ) !!}
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
@stop

@section( 'head_page_css' )
	@parent
	{!! html_css( 'main.css', 'css/fo' ) !!}
@stop

@section( 'doc_body_class', 'scroll-assist' )

@section( 'blank_content' )

<header id="st_header" class="nav-container" role="banner">
	<a id="top"></a>
	<nav>
		@include( 'layouts.default._top-header' )
		@include( 'layouts.default._header' )
	</nav>
</header>

<nav id="st_nav" role="navigation">
</nav>

<div id="st_body" role="main" class="@yield( 'body_class' )">
	@yield( 'content' )
</div>

<div id="st_footer">
	@include( '_partials._sponsors',
	[
	    'class' => 'bg-secondary'
	])
	<footer  class="footer-1 bg-dark" role="contentinfo">

		@include( 'layouts.default._footer' )
	</footer>
</div>
@stop

@section( 'foot_vendor_js')
	@parent
	{!! html_js( 'jquery.min.js' ) !!}
	{!! html_js( 'bootstrap.min.js' ) !!}
	{!! html_js( 'flickr.js' ) !!}
	{!! html_js( 'flexslider.min.js' ) !!}
	{!! html_js( 'lightbox.min.js' ) !!}
	{!! html_js( 'masonry.min.js' ) !!}
	{!! html_js( 'twitterfetcher.min.js' ) !!}
	{!! html_js( 'spectragram.min.js' ) !!}
	{!! html_js( 'ytplayer.min.js' ) !!}
	{!! html_js( 'countdown.min.js' ) !!}
	{!! html_js( 'smooth-scroll.min.js' ) !!}
	{!! html_js( 'parallax.js' ) !!}
	{!! html_js( 'scripts.js' ) !!}
    {!! html_js( 'zebra_datepicker/dist/zebra_datepicker.min.js', 'vendor' ) !!}
@stop

@section( 'foot_page_js' )
	@parent
@stop