@extends( 'posts._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => $curr_menu->title, 
                'url' => route( 'f.posts.index', [ $curr_menu->id, $db_post_map->slug ] ) 
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