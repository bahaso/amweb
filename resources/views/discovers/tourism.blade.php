@extends( 'discovers._layout' )

@section( 'head_page_css' )
	@parent
	{!! html_css( 'carousel-3-images.css', 'css/fo' ) !!}
@stop

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
                'label' => 'Discover Indonesia',
                'url' => route( 'f.discovers.indonesia' )
            ],
            [
                'label' => 'Tourism Package',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <div class="mix-color-title mb-50">
        <span class="mix-color-bar mobile-full"></span>
        <span class="mix-color-bar left" style="width:170px;margin-top:23px;"></span>
        <span class="mct-row fm-signika-reg sm-font">
            Tourism Packages
        </span>
        <span class="mix-color-bar right" style="width:170px;margin-top:23px;"></span>
        <span class="mix-color-bar mobile-full"></span>
    </div>
    <p>
        {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/tourism-packages-header.jpg',
        [
            'w' => '100%',
            'h' => 'auto'
        ]) !!}
    </p>
    <p>
        As Indonesia has large area and various traditions to explore, it might be hard for travellers to find the best itinerary
        in a limited period. Wonderful Indonesia proudly presents to you some of the best tourism packages from our certified partners
        around the areas on Indonesia for your options. You can also read our articles for further information before you decide which
        packages to accompany you on your journey.
    </p>

    @foreach( $locations as $loc )
        @if( !empty( $packages[ $loc ]))
        <div class="mix-bar-full"></div>
        <div class="title-carousel">
            <h3>
                <!-- Bali - Lombok Tour 2D/1N -->
                {{ ucwords( $loc ) }}
            </h3>
        </div>
        <a href="{{ route( 'f.discovers.tourism_list', [ $loc ]) }}" class="title-carousel-more">
            More Package
        </a>

        <div class="owl-carousel gl"
            data-items="3"
            data-nav = "true"
            data-pad = "true"
            data-loop="true"
            data-autoplay="true"
            data-autoplay-timeout="3000"
            data-autoplay-hover-pause="true"
            data-sizes="[
            [ 0, 1 ],
            [ 321, 1 ],
            [ 481, 2 ],
            [ 641, 3 ],
            [ 721, 3 ],
            [ 841, 3 ],
            [ 1041 , 3 ],
            [ 1220, 3 ]]"
        >

        @foreach( $packages[$loc] as $slug=>$dt )
            <a href="{{ route( 'f.discovers.tourism_detail', [ $loc, $slug ]) }}">
            <div class="owl-item link-img">
                @if( !empty( $dt['images']->first() ))
                <img src="http://book.itx.co.id{{ $dt['images']->first() }}" width="234" height="232">
                @else
                    {!! html_img( 'img/am2018/public/default-tourism-photo.jpg',
                    [
                        'w' => '234',
                        'h' => '232',
                    ]) !!}
                @endif

                <div class="caption text-center">
                    <h4 class="subtitle">{{ $dt['name'] }}</h4>
                </div>
            </div>
            </a>
        @endforeach

        </div>
        @endif
    @endforeach

    <div class="mix-bar-full"></div>
</section>

@stop
