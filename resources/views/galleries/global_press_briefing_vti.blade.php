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
                'label' => 'Global Press Briefing Voyage to Indonesia'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <h1 class="title fw600">
        Global Press Briefing Voyage to Indonesia 12 Oct 2017 - IMF - WBG Annual Meetings 2017
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
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-1.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-2.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-3.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-4.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-5.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-6.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-7.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-8.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-9.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-10.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-11.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-12.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-13.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-14.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-15.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-16.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-17.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-18.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-19.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-20.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-21.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-22.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-23.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-24.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-25.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-26.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-27.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-28.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-29.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-30.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-31.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-32.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-33.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-34.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-35.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-36.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-37.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-38.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-39.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-40.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-41.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-42.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-43.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-44.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-45.jpg', []) !!}
        </div>
    </div>
</div>

@stop