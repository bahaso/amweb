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
    <p>Information regarding the tourism packages will be provided in early October 2017.</p>

    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali 1D Tour 
            <span class="tc-small">(8-10hrs)</span>
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-hotel.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Tour</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-dance.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Tour</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-surf.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Tour</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-hotel.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Tour</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </div>
    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali - Lombok Tour 2D/1N
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-lake.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lombok</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-sea.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lombok</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-beach.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lombok</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-sea.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lombok</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </div>
    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali - Yogya Tour 2D/1N
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-candi.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Yogyakarta</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-festival.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Yogyakarta</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-becak.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Yogyakarta</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-festival.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Yogyakarta</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </div>
    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali - Komodo Tour 2D/1N
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-island.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-dragon.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-habitat.jpg', []) !!}
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-dragon.jpg', []) !!}
        </div>
    </div>
    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali - Toba Lake 3D/2N Tour
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-lake.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lake Toba</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-statue.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lake Toba</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-house.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lake Toba</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-statue.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Lake Toba</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </div>
    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali - Toraja 3D/2N Tour
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-house.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Toraja</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-statue.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Toraja</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-wall.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Toraja</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-statue.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali - Toraja</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </div>
    <div class="mix-bar-full"></div>
    <div class="title-carousel">
        <h3>
            Bali Cruise Package Tour 1D
            <span class="tc-small">(7-8hrs)</span>
        </h3>
    </div>
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
        <div class="owl-item link-img" style="text-align: center;">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-phinisi.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Phinisi</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-cruise.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Phinisi</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/phinisi-boat-bali.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Phinisi</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="owl-item link-img">
            {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-cruise.jpg', []) !!}
            <div class="caption text-center">
                <h4 class="subtitle">Bali Phinisi</h4>
                <p class="subtext">
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
    </div>
    <div class="mix-bar-full"></div>
</section>

@stop