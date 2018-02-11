@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Publications',
                'url'   => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
                'url'   => route( 'f.news.index' )
            ],
            [
                'label' => 'Mount Agung’s Alert Status Down to Level III'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Mount Agung’s Alert Status Down to Level III
    </h1>
    <div class="content">
        {!! html_img( 'img/am2018/public/bali-news.jpg',
        [
            'w' => '100%',
            'h' => 'auto',
            'style' => 'margin-bottom:20px;'
        ]) !!}
        <p class="no-mb txt-bold">
            Jakarta, 10 th February 2018
        </p>
        <p>
            The Mount Agung alert status is reduced from radius of 6 kilometers (kms) from its crater to 4 kms. "Tourism is completely safe," said Minister of ESDM Ignasius Jonan who is currently in Bali, Saturday (10/02/2018).
        </p>
        <p>
            The status of Mount Agung is  downgraded from the AWAS (Level IV) to STANDBY status (Level III) by the Center for Volcanology and Geological Hazard Mitigation (PVMBG) Ministry of Energy and Mineral Resources.
        </p>
        <p>
            Such decline status, the 26,130 people residing in 195 points can return to their homes and tourist activities are declared fully safe.
        </p>
    </div>
</section>


@stop