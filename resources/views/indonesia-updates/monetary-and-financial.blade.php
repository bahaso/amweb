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
                'label' => 'Monetary and Financial Factor'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Monetary and Financial Factor: Credible Monetary Policy Track Record and Favourable Financial Sector
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-updates-5.jpg',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            Through Bank Indonesia Policy Mix, Indonesia has built a credible monetary policy track record. Several efforts have been designed such as the enhancement of monetary operations framework, 
            six measures to control inflation in 2017, macroprudential policy mix to support growth. For the 2017 economic outlook,
            Indonesia’s economy is expected to grow in the range of 5.0-5.4%,
            inflation is predicted to be within inflation target of 4±1%, current account deficit projected below 2.5%, and credit is projected to grow 10-12%.
        </p>
        <p class="no-mb">
            <a href="{{ asset( 'uploads/public/Indonesia-Updates-May-2017-Section-5.pdf' ) }}" class="fw400 link-txt fs14">
                Download Complete Report
            </a>
        </p>
    </div>
</section>

@stop