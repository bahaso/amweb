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
                'label' => 'Media and Publications',
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Photo Gallery',
                'url' => route( 'f.galleries.index' ) 
            ],
            [
                'label' => 'Indonesia-USINDO Gala Dinner'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <h1 class="title fw600">
        Indonesia-USINDO Gala Dinner. IMF - WBG Annual Meetings 2017
    </h1>
    <p class="mb10">

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
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-1.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-2.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-3.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-4.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-5.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-6.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-7.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-8.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-9.JPG', []) !!}
        </div>
    </div>
</div>

@stop