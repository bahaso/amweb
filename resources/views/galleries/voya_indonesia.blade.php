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
                'label' => 'Voya to Indonesia'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <h1 class="title fw600">
        Voya to Indonesia
    </h1>
    <p class="mb10">
        Voya To Indonesia-Promotion on the occasion of Indonesia's position as host country for the 2018 IMF-World Bank Annual Meetings in Bali
    </p>

    <a href="{{ route( 'f.galleries.index' ) }}" class="pull-right fw400">
        Back to Gallery
    </a>
    <div class="owl-carousel-gallery mb20"></div>
    <div class="owl-carousel" 
        data-items="3" 
        data-margin="15" 
        data-loop="true"
        data-autoplay="true" 
        data-autoplay-timeout="3000"
        data-autoplay-hover-pause="true"
    >
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/voya-indonesia/a. Promotion on the occasion of Indonesia\'s position as host country for the 2018 IMF-World Bank Annual Meetings in Bali [1].jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/voya-indonesia/a. Promotion on the occasion of Indonesia\'s position as host country for the 2018 IMF-World Bank Annual Meetings in Bali [2].jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/voya-indonesia/a. Promotion on the occasion of Indonesia\'s position as host country for the 2018 IMF-World Bank Annual Meetings in Bali [3].jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/voya-indonesia/a. Promotion on the occasion of Indonesia\'s position as host country for the 2018 IMF-World Bank Annual Meetings in Bali [4].jpg', []) !!}
        </div>
    </div>
</div>

@stop