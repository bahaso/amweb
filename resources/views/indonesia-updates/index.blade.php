@extends( 'galleries._layout' )

@section( 'foot_vendor_js' )
    @parent
    {!! html_js( 'featured-news.js' ) !!}
@stop

@section( 'head_page_css' )
    @parent
    {!! html_css( 'news-index.css', 'css/fo' ) !!}
@stop

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Indonesia Updates', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Indonesia Updates
    </h1>
    <div class="content">
        <div class="news-item">
            <a href="{{ route( 'f.indonesia_updates.detail', [ 1, 'Institutional-and-Government-Effectiveness' ]) }}">
                <h2 class="title">
                    Institutional and Government Effectiveness: Accelerated Reforms Agenda with Institutional Improvement
                </h2>
                <p class="txt">
                    Indonesia is committed to accelerate its reform agenda as is shown by its institutional improvement. There are, at least, six points that underpin the statement above. which are...
                </p>
            </a>
        </div>
        <div class="news-item">
            <a href="{{ route( 'f.indonesia_updates.detail', [ 2, 'Economic-factor-strong-and-stable-growth' ]) }}">
                <h2 class="title">
                    Economic Factor: Strong and Stable Growth Prospects Remain Intact
                </h2>
                <p class="txt">
                    Indonesia continues to maintain a strong and stable economic growth. 
                    Indonesia’s conducive environment underpins strong growth fundamental, such as...
                </p>
            </a>
        </div>
        <div class="news-item">
            <a href="{{ route( 'f.indonesia_updates.detail', [ 3, 'External-factor-improved-external-resilience' ]) }}">
                <h2 class="title">
                    External Factor: Improved External Resilience
                </h2>
                <p class="txt">
                    Dealing with external shocks, Indonesia improved its resilience. The national currency, Rupiah remained stable throughout April 2017...
                </p>
            </a>
        </div>
        <div class="news-item">
            <a href="{{ route( 'f.indonesia_updates.detail', [ 4, 'Fiscal-performance-and-flexibility' ]) }}">
                <h2 class="title">
                    Fiscal Performance and Flexibility: More Fiscal Stimulus with Prudent Fiscal Management
                </h2>
                <p class="txt">
                    Indonesia keeps driving for more fiscal stimulus with prudent fiscal policy. As one of the vehicles, the government is working on to build a credible and realistic budget...
                </p>
            </a>
        </div>
        <div class="news-item">
            <a href="{{ route( 'f.indonesia_updates.detail', [ 5, 'monetary-and-financial-factor' ]) }}">
                <h2 class="title">
                    Monetary and Financial Factor: Credible Monetary Policy Track Record and Favourable Financial Sector
                </h2>
                <p class="txt">
                    Through Bank Indonesia Policy Mix, Indonesia has built a credible monetary policy track record. Several efforts have been designed...
                </p>
            </a>
        </div>
        <div class="news-item">
            <a href="{{ route( 'f.indonesia_updates.detail', [ 6, 'Progressive-infrastructure-development' ]) }}">
                <h2 class="title">
                    Progressive Infrastructure Development: Strong Commitment on Acceleration of Infrastructure Provision
                </h2>
                <p class="txt">
                   The government has enacted various reforms to accelerate infrastructure provision, they are i) fiscal reforms...
                </p>
            </a>
        </div>
    </div>
</section>

@stop