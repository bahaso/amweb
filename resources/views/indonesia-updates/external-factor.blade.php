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
                'label' => 'External Factor'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        External Factor: Improved External Resilience
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-updates-3.JPG',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            Dealing with external shocks, Indonesia improved its resilience. The national currency, 
            Rupiah remained stable throughout April 2017, closing at Rp13,329/USD. To buffer against external shocks, 
            Indonesia has ample level of foreign exchange reserves. As of April 2017, it is standing at a staggering USD 123.2 billion.
        </p>
        <p class="no-mb">
            <a href="{{ asset( 'uploads/public/Indonesia-Updates-May-2017-Section-3.pdf' ) }}" class="fw400 link-txt fs14">
                Download Complete Report
            </a>
        </p>
    </div>
</section>

@stop