@extends( 'articles._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => $db_post_map->title, 
                'url' => route( 'f.articles.index', [ $db_post_map->id, $db_post_map->slug ] ) 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <div class="content">
        {!! $db_post->content_html !!}
    </div>
</section>

@stop