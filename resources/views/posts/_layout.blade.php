@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    @foreach( $parent_menu as $pm )
    <li class="{{ isActiveURL( route( 'f.posts.index', [$pm->post_map_id, str_slug($pm->title)]) ) }}">
        <a href="
            @if( $pm->url_link )
                {{ $pm->url_link }}
            @else
                {{ route( 'f.posts.index', [$pm->post_map_id, str_slug($pm->title) ] ) }}
            @endif
            " class="lbl">
            {{ $pm->title }}
        </a>
        @if( $child_menu[$pm->id]->count() > 0 )
        <ul>
            @foreach( $child_menu[$pm->id] as $cm )
            <li class="has-children {{ isActiveURL( route( 'f.posts.index', [$cm->post_map_id, str_slug($cm->title)]) ) }}">
                <a href="
                    @if( $cm->url_link )
                        {{ $cm->url_link }}
                    @else
                        {{ route( 'f.posts.index', [$cm->post_map_id, str_slug($cm->title) ] ) }}
                    @endif
                    " class="lbl">
                    {{ $cm->title }}
                </a>
            </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
<!--     <li class="{{ isActiveRoute( 'f.abouts.faq' ) }}">
        <a href="{{ route( 'f.abouts.faq' ) }}" class="lbl">
            FAQ
        </a>
    </li> -->
@stop