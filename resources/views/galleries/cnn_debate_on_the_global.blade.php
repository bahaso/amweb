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
                'label' => 'CNN Debate on the Global Economy'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <h1 class="title fw600">
        CNN Debate on the Global Economy How to Strengthen Global Economy - IMF - WBG Annual Meetings 2017
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
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-1.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-2.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-3.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-4.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-5.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-6.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-7.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-8.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-9.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-10.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-11.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-12.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-13.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-14.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-15.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-16.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-17.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-18.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-19.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-20.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-21.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-22.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-23.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-24.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-25.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-26.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-27.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-28.JPG', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-29.JPG', []) !!}
        </div>
    </div>
</div>

@stop