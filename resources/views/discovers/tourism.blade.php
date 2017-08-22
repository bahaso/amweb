@extends( 'discovers._layout' )

@section( 'head_page_css' )
	@parent
	{!! html_css( 'carousel-3-images.css', 'css/fo' ) !!}
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
        <span class="mix-color-bar left" style="width:170px;margin-top:23px;"></span>
        <span class="mct-row fm-signika-reg sm-font">
            Tourism Packages
        </span>
        <span class="mix-color-bar right" style="width:170px;margin-top:23px;"></span>
    </div>
    
    <p class="fm-helvetica">
        As Indonesia has large area and various traditions to explore, it might be hard for travellers to find the best itinerary 
        in a limited period. Wonderful Indonesia proudly presents to you some of the best tourism packages from our certified partners 
        around the areas on Indonesia for your options. You can also read our articles for further information before you decide which
        packages to accompany you on your journey.
    </p>

    <div class="mix-bar-full no-mb"></div>

    <section id="carousel-custom-style">
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali 1D Tour 
                            <span class="tc-small">(8-10hrs)</span>
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-hotel.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                       			<div class="caption text-center">
                                    <h4 class="subtitle">Bali Tour</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-dance.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali Tour</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-surf.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali Tour</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-hotel.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali Tour</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <!--end of row-->
        <div class="mix-bar-full"></div>
        <!--end of row-->
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali - Lombok Tour 2D/1N
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-lake.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lombok</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-sea.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lombok</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-beach.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lombok</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-lake.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lombok</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <!--end of row-->
        <div class="mix-bar-full"></div>
        <!--end of row-->
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali - Yogya Tour 2D/1N
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-candi.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Yogyakarta</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-festival.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Yogyakarta</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-becak.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Yogyakarta</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-candi.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Yogyakarta</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <!--end of row-->
        <div class="mix-bar-full"></div>
        <!--end of row-->
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali - Komodo Tour 2D/1N
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-island.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-dragon.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-habitat.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/komodo-island.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <!--end of row-->
        <div class="mix-bar-full"></div>
        <!--end of row-->
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali - Toba Lake 3D/2N Tour
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-lake.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lake Toba</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-statue.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lake Toba</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-house.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lake Toba</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toba-lake.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Lake Toba</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <!--end of row-->
        <div class="mix-bar-full"></div>
        <!--end of row-->
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali - Toraja 3D/2N Tour
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-house.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Toraja</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-wall.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Toraja</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-statue.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Toraja</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/toraja-house.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali - Toraja</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <!--end of row-->
        <div class="mix-bar-full"></div>
        <!--end of row-->
        <div class="masonry fadeIn" >
          <div class="post-snippet masonry-item logo-carousel-container">
                <div class="logo-carousel" data-max-items="3" data-direction-nav="true" style="">
                    <div class="title-carousel">
                        <h3>
                            Bali Cruise Package Tour 1D
                            <span class="tc-small">(7-8hrs)</span>
                        </h3>
                    </div>
                    <ul class="slides" >
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-phinisi.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali Phinisi</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-cruise.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali Cruise</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/phinisi-boat-bali.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Phinisi Boat Bali</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="image-caption cast-shadow">
                                {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-phinisi.jpg', 
                                    [ 
                                        'w'     => 232,
                                        'h'     => 232,
                                    ]) !!}
                                <div class="caption text-center">
                                    <h4 class="subtitle">Bali Phinisi</h4>
                                    <p class="subtext">
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of snippet-->
        </div>
        <div class="mix-bar-full"></div>
        <!--end of row-->
    </section>
</section>

@stop