@extends( 'layouts.default.layout' )

@section( 'content' )

	@include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 'label' => 'Voyage to Indonesia', 'url' => route( 'f.abouts.vti' ) ],
            [ 'label' => 'About VTI' ]
        ]
    ])

	<section class="image-square-title">
		<div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
	                <h4 class="uppercase mb16 fw600 title">About VTI</h4>
	                <p class="lead">
	                    Voyage to Indonesia
	                </p>
	            </div>
	        </div>
        </div>
	</section>


	<section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/logo-AM-fix.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <p class="mb0 desc">
                Every three consecutive years, International Monetary Fund (IMF) and World Bank Group (WB) conduct an annual meeting located outside the Headquarters in Washington DC. In 2015, Indonesia has been appointed to be the host country of 2018 Annual Meeting. Naturally, Ministry of Finance and Bank Indonesia (Indonesian Central Bank) become the core organizing committee of the biggest international conference which would be held in Nusa Dua, Bali.
            </p>
        </div>
    </section>
    <section class="image-square right">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/borobudur.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content">
            <p class="mb0 desc">
                Indonesia would like to leverage this opportunity to deliver a bigger impact for national and international interest by show casing Indonesia’s achievement in social and economy, as well as cultural richness, tourism and magnificent natural scenery. Before hosting 2018 Annual Meeting, Indonesia organizes a prelude event, aiming to develop public enthusiasm, in domestic, regional, and international scale. The series of event called “Voyage to Indonesia” or VTI.
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/vti-penari-bali-lowres.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content">
            <p class="mb0 desc">
                Some of the main activities of VTI for global community are exhibitions in IMF-WB Spring Annual Meeting 2017 and IMF-WB Fall Annual Meeting 2017 in Washington DC. Besides that, there are also cross-channel promotions as well as publication for more engaging, participative outreaches and effective result.
            </p>
        </div>
    </section>

	@include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop