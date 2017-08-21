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
                'label' => 'Bali'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <h1 class="title fw600 min-mb15">
        Visit Bali, Indonesia for Sun, Sea and Nightlife.
    </h1>
    <p class="mb10">
        Also take a banana boat trip or dance until dawn.
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
            {!! html_img( 'img/cover12.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/cover15.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/cover16.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/cover14.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/cover14.jpg', []) !!}
        </div>
    </div>
</div>

@stop