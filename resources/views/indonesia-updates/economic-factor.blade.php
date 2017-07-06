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
                'label' => 'Economic Factor'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Economic Factor: Strong and Stable Growth Prospects Remain Intact
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-updates-2.jpg',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            Indonesia continues to maintain a strong and stable economic growth. 
            Indonesia’s conducive environment underpins strong growth fundamental, such as i) large and stable economy; ii) new economic structure; 
            iii) consistent budget reform, and iv) high infrastructure investments. In terms of Growth Domestic Product (GDP), 
            Indonesia is projected to stay on the positive streak. According to Consensus Forecast, as of May 2017, GDP growth is expected to stand at 5.2%.
        </p>
        <p class="no-mb">
            <a href="{{ asset( 'uploads/public/Indonesia-Updates-May-2017-Section-2.pdf' ) }}" class="fw400 link-txt fs14">
                Download Complete Report
            </a>
        </p>
    </div>
</section>

@stop