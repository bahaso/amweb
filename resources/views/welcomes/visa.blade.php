@extends( 'welcomes._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Travel Information',
                'url' => route( 'f.welcomes.visa' ) 
            ],
            [ 
                'label' => 'Visa & Customs',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		VISA
	</h1>
	<div class="content">
        <p>
            Information regarding the visa arrangements for this event will be provided in early 2018.
        </p>
        <p>
            For information about general procedures for Indonesian visa application, please refer to:<br>
            <a target="_blank" href="http://www.imigrasi.go.id/index.php/en/public-services/visit-visa">
                http://www.imigrasi.go.id/index.php/en/public-services/visit-visa</a>
        </p>
    </div>
    <h1 class="title fw600">
    CUSTOMS
    </h1>
    <div class="content">
        <p>
            Information regarding the visa arrangements for this event will be provided in early 2018.
        </p>
        <p>
            For information about general procedures for Indonesian Customs, please refer to:<br>
            <a target="_blank" href="http://www.indonesia.travel/en/travel-guidance/visa-and-immigration">
                http://www.indonesia.travel/en/travel-guidance/visa-and-immigration</a>
            <br>
            <a target="_blank" href="https://www.embassyofindonesia.org/index.php/customs-declaration/">
                https://www.embassyofindonesia.org/index.php/customs-declaration/</a>
        </p>
    </div>
</section>

@stop