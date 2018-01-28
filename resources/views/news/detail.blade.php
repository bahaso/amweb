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
                'label' => 'News Title'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        {{ $query->title }}
    </h1>
    <div class="content">
<!--         @if( $query->coverOriginal())
            {!! html_img( $query->coverOriginal(),
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        @endif -->

        {!! $query->content_html !!}
    </div>
</section>


@stop