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
                'label' => 'Hotel', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Hotel Accommodations
	</h1>
	<div class="content">
		<h2 class="sub-title">
			Hotel Rooms
		</h2>
		<p>
			The capacity of the Nusa Dua area and its surroundings is more than 
			sufficient to accommodate both official and non-official participants of the Annual Meetings. 
			For this purpose, we have blocked a total 3,720 rooms in 19 hotels and resorts across all available categories 
			designated for official delegations. For a map listing of hotels, 
			<a href="#">click here</a>. 
			Hotel rates can be 
			<a href="#">found here</a>, 
			and reservation instructions for each hotel can be 
			<a href="#">found here</a>.
		</p>
		<h2 class="sub-title">
			Proximity to Meeting Venues
		</h2>
		<p>
			The 2018 Annual Meetings will take place in and around the ITDC/Nusa Dua complex (Bali Nusa Dua Convention Center/BNDCC and Bali International Convention Center/BICC) from Sunday, October 8, through Saturday, October 14.
			The distance from the official hotels to the meeting venues (Bali Nusa Dua Convention Center/BNDCC and Bali International Convention Center/BICC) are around 2 to 20 minutes by car, and some are within walking distance. The Indonesian authorities will provide regular shuttle vehicles between the hotels and the meeting venues.
		</p>
		<h2 class="sub-title">
			Additional Hotel Rooms
		</h2>
		<p>
			Additional hotel capacity to cover a further 10,000 participants is also available within and surrounding the ITDC (Bali Nusa Dua complex), with an abundant range of accommodation from economy to luxury. A list of accredited hotels in the ITDC and the surrounding areas of South Nusa Dua, Tanjung Benoa, Jimbaran, Kuta, Legian, Seminyak, and Sanur.
		</p>
	</div>
</section>

@stop
