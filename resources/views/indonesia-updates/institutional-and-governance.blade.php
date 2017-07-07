@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url'   => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
                'url'   => route( 'f.news.index' )
            ],
            [
                'label' => 'Institutional and Governance'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Institutional and Governance Effectiveness: Accelerated Reforms Agenda with Institutional Improvement
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-updates-1.JPG',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
        Indonesia is committed to accelerate its reform agenda as is shown by great 
        strides that have been accomplished of late. According to World Bank – Doing Business Report, 
        Indonesia climbed 15 places from last year’s rank to 91st position in this year’s Ease of Doing Business. In May 2017, Indonesia has also received rating 
        upgrade from S&P Global. Moreover, The Economist placed Indonesia as Top 3 Destination for Attracting Investor. The investment growth also spoke volumes, 
        where it recorded 612.8 trillion rupiahs of the total investment in 2016, which is up 12.4% from previous year. Apart from the data, Indonesian government 
        has already shown its commitment through National Strategic Development Plan, called Nawa Cita.
        </p>
        <p class="no-mb">
            <a href="{{ asset( 'uploads/public/Indonesia-Updates-May-2017-Section-1.pdf' ) }}" class="fw400 link-txt fs14">
                Download Complete Report
            </a>
        </p>
    </div>
</section>

@stop