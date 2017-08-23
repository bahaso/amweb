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
</section>

@stop