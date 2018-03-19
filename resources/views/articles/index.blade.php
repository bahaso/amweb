@extends( 'posts._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => $db_post_map->title, 
                'url' => route( 'f.posts.index', [ $db_post_map->id, $db_post_map->slug ] ) 
            ],
            [ 
                'label' => $curr_menu->title,
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