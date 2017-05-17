<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="x-dns-prefetch-control" content="off" />
    <meta name="distribution" content="global" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield( 'head_meta' )
    @yield( 'head_link' )
    
    @section( 'head_css' )
        @yield( 'head_vendor_css' )
        @section( 'head_page_css' )
        @show
    @show

    @section( 'head_js' )
        @yield( 'head_vendor_js' )
        @yield( 'head_page_js' )
    @show
</head>
<body class="@yield( 'doc_body_class' )">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="st_container" class="@yield( 'outer_class' )">
    @yield( 'blank_content' )
</div>

@section( 'inline_script' )
    <script>
        var baseUrl = "{{ route( 'f.home' ) }}",
            apiPath = '/api/v1';
    </script>
@show

@section( 'foot_js' )
    @section( 'foot_vendor_js' )
        {!! html_js('modernizr-2.8.3.min.js', 'vendor') !!}
        {!! html_js('jquery-1.12.2.min.js', 'vendor') !!}
    @show
    @yield( 'foot_page_js' )
@show

</body>
</html>
