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
                'label' => 'Media and Publications',
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        News
    </h1>
    <div class="content">
        @foreach( $queries as $q )
        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ $q->id, str_slug( $q->title ) ]) }}">
                <h2 class="title">
                    {{ $q->title }}
                </h2>
                <p class="txt">
                    {{ $q->excerpt }}
                </p>
            </a>
        </div>
        @endforeach
    </div>
</section>

@stop