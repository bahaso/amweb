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
                'label' => 'Fiscal Performance and Flexibility'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Fiscal Performance and Flexibility: More Fiscal Stimulus with Prudent Fiscal Management
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-updates-4.JPG',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            Indonesia keeps driving for more fiscal stimulus with prudent fiscal policy.
             As one of the vehicles, the government is working on to build a credible and realistic budget. Between 2015 and 2016, tax revenue grew 3.5%, 
             which includes the contribution of IDR 109.5 trillion from Tax Amnesty. Indonesia Tax Amnesty, itself, has been named as the world’s most successful 
             tax program (based on revenue and declared assets). The total asset declared, as of March 31st 2017, amounted to an equivalent of 39.3% of 2016 GDP.
        </p>
        <p class="no-mb">
            <a href="{{ asset( 'uploads/public/Indonesia-Updates-May-2017-Section-4.pdf' ) }}" class="fw400 link-txt fs14">
                Download Complete Report
            </a>
        </p>
    </div>
</section>

@stop