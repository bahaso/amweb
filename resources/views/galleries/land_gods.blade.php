@extends( 'galleries._layout' )

@section( 'head_vendor_css' )
    @parent
    {!! html_css( 'owl.carousel/dist/assets/owl.carousel.min.css', 'vendor' ) !!}
@stop

@section( 'foot_vendor_js' )
    @parent
    {!! html_js( 'owl.carousel/dist/owl.carousel.min.js', 'vendor' ) !!}
@stop

@section( 'foot_page_js' )
    @parent
    {!! html_js( 'owl-carousel.js' ) !!}
@stop

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Gallery', 
                'url' => route( 'f.galleries.index' ) 
            ],
            [
                'label' => 'Bali'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <h1 class="title fw600">
        Bali
    </h1>
    <p class="mb10">
        Also known as the Land of the Gods, Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields that exude peace and serenity
    </p>

    <a href="{{ route( 'f.galleries.index' ) }}" class="pull-right fw400">
        Back to Gallery
    </a>
    <div class="owl-carousel-gallery mb20"></div>
    <div class="owl-carousel gl" 
        data-items="3" 
        data-margin="15" 
        data-loop="true"
        data-autoplay="true" 
        data-autoplay-timeout="3000"
        data-autoplay-hover-pause="true"
        data-auto-width="true"
    >
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-1.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-2.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-3.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-4.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-5.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-6.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-7.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-8.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-9.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-10.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-11.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-12.jpg', []) !!}
        </div>
    </div>
</div>

@stop