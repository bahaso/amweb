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
                <time datetime="2017/06/21 08:05">Thursday, 21 june 2017 - 08:05</time>
                <h2 class="title">
                    Institutional and Government Effectiveness: Accelerated Reforms Agenda with Institutional Improvement
                </h2>
                <p class="txt">
                    Indonesia is committed to accelerate its reform agenda as is shown by its institutional improvement. There are, at least, six points that underpin the statement above. which are...
                </p>
            </a>
        </div>
    </div>
</section>

@stop