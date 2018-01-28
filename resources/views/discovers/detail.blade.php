@extends( 'discovers._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Travel Information', 
                'url' => route( 'f.travels.detail', [ $curr_article->id, $curr_article->slug ] ) 
            ],
            [ 
                'label' => $curr_article->title, 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <div class="content">
            {!! $curr_article->content_html !!}
        </div>
    </section>

@stop