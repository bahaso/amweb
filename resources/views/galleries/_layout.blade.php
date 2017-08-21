@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="has-children {{ isActiveRoute( 'f.news.*' ) }}">
        <a href="{{ route( 'f.news.index' ) }}" class="lbl">
            News
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.press-releases.*' ) }}">
        <a href="{{ route( 'f.press-releases.index' ) }}" class="lbl">
            Press Releases
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.publications.*' ) }}">
        <a href="{{ route( 'f.publications.index' ) }}" class="lbl">
            Publications
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.galleries.*' ) }}">
        <a href="{{ route( 'f.galleries.index' ) }}" class="lbl">
            Photo Gallery
        </a>
    </li>


@stop