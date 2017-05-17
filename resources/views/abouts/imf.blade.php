@extends( 'layouts.default.layout' )

@section( 'content' )

	@include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'About', 
                'url' => route( 'f.abouts.imf_world_bank' ) 
            ],
            [ 
                'label' => 'About IMF', 
            ]
        ]
    ])

	<section class="image-square-title mb80">
		<div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
	                <h4 class="uppercase mb16 fw600 title">About IMF</h4>
	                <p class="lead">
	                    IMF was found in July 1945 during Bretton Woods Conference, New Hampshire, US, where 45 government representatives agreed on an economic cooperation framework that was designed to prevent 1930’s Great Depression from happening again. IMF Headquarter is located in Washington DC, US.
	                </p>
	            </div>
	        </div>
        </div>
	</section>


	<section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/IMF-conference.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <p class="mb0 desc">
                IMF comprises of 189 member countries, in which each of the members is obliged to contribute financially, that will further determine quota and voting rights in IMF. Each member is entitled to certain quota that reflect their relative positions to the other members. IMF also collects financial resources from its members that can be lended to member that is going through balance of payment difficulty.
            </p>
        </div>
    </section>
    <section class="image-square right">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/imf.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content wysiwyg">
            <p class="mb0 desc">
                IMF is an international organization that aims to:
                <ul>
                    <li>Endorse international cooperation and maintain financial stability</li>
                    <li>Facilitate international trade</li>
                    <li>Stimulate the sustainable economic growth as well as workforce absorption</li>
                    <li>Reduce poverty in the world</li>
                </ul>
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/IMF2.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content">
            <p class="mb0 desc">
                Indonesia’s membership in IMF, the process wasn’t directly from Indonesia’s membership in UN - 28th September 1950. On 10 September 1952, Board of Governors of the IMF and IBRD (World Bank) agreed on resolution of terms and conditions upon Indonesia’s membership. Indonesia accepted it and signed in mid 1953 (officially became the member), it was then legalized through Act No. 5 1954 on Indonesia’s Membership in IMF and IBRD (UU No 5 Tahun 1954 tentang Keanggotaan RI dari IMF dan IBRD).
            </p>
        </div>
    </section>
    
    @include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop