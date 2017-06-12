@extends( 'informations._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Information', 
                'url' => route( 'f.informations.hotel' ) 
            ],
            [ 
                'label' => 'Weather', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Indonesia Weather
	</h1>
	<div class="content">
		<p>
			Indonesia’s climate is relatively even year-round as the country lies along the equator. Indonesia has two seasons –a wet season and a dry season– with no extremes temperature between the two seasons. The average temperature in most of Indonesia region is between 20˚ - 36˚C depending on the region’s altitude.
		</p>
		<p>
			For most of Indonesia’s area, the dry season falls between April and October with the wet season between November and March. This cycle, however, is relatively unstable in the last few years due to climate change.
		</p>
		<p>
			Indonesia’s climate is almost entirely tropical, dominated by the Tropical rainforest climate found in every major island of Indonesia, followed by the Tropical monsoon climate that predominantly lies along Java’s coastal north, Sulawesi’s coastal south and east, and Bali, and finally the tropical Savana climate, can be found in isolated location in Central Java, lowland of East Java, coastal southern Papua and smaller islands to the east of Lombok. However, cooler climate types can be found in mountainous regions of Indonesia at 1,300 to 1,500 metres above sea level
		</p>
		<p class="no-mb">
			Further Information regarding Indonesia’s weather can be found at:
			<a href="https://www.accuweather.com/en/id/indonesia-weather">https://www.accuweather.com/en/id/indonesia-weather</a>
		</p>
	</div>
</section>

@stop
