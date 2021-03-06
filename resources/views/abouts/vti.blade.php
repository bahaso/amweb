@extends( 'faqs._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'About', 
                'url' => route( 'f.abouts.imf' ) 
            ],
            [ 
                'label' => 'VTI', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        The Voyage To Indonesia
    </h1>
    <div class="content">
		<p>
            {!! html_img( 'img/am2018/public/about-vti_article.png',
            [
                'w' => '50%',
                'h' => 'auto'
            ]) !!}
        </p>
		<p>
		Beginning in 2017, the “Voyage to Indonesia”, or “VTI”, is a program of events that will be conducted in the run up to the 2018 Annual Meetings, to raise awareness of this event and promote Indonesia to the international delegations and national participants who will be attending it. The Voyage to Indonesia, and the 2018 Annual Meetings, provide Indonesia with an opportunity to showcase its achievements in economic and social sectors, highlight the many facets of its culture, and promote the beautiful landscapes and multitude of tourism options that the country offers.
		</p>
        <p class="no-mb">
            All events conducted within the “Voyage to Indonesia” program are intended to:
        </p>
        <ul>
            <li>promote Indonesia’s achievement in implementing reformation and democracy</li>
            <li>promote Indonesia’s national resilience and economic progress after the Asian crisis</li>
            <li>promote Indonesia’s leadership and commitment in discussing global concerns</li>
            <li>promote Indonesia’s culture, tourism, and creative industry; as well as optimize other national interests</li>
        </ul>
        <p class="no-mb">
            The “Voyage to Indonesia” program includes:
        </p>
        <ul>
            <li>International and regional conferences on economic and financial issues</li>
            <li>seminars, workshops, and focus group discussions</li>
            <li>exhibitions, such as creative industry, domestic products, digital economy, and financial technology</li>
            <li>cultural performances</li>
            <li>investment forum</li>
            <li>economic cooperation forum</li>
			<li>financial industry and banking forum; trade promotion; and other related activities</li>
        </ul>
    </div>
</section>

@stop
