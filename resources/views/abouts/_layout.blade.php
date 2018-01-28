@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    @foreach( $side_nav as $ab )
    <li class="{{ isActiveURL( route( 'f.abouts.detail', [$ab->id, $ab->slug ]) ) }}">
        <a href="{{ route( 'f.abouts.detail', [$ab->id, $ab->slug ] ) }}" class="lbl">
            {{ $ab->title }}
        </a>
        @if( $side_nav_child[$ab->id]->count() > 0 )
        <ul>
            @foreach( $side_nav_child[$ab->id] as $sc )
            <li class="has-children {{ isActiveRoute( 'f.events.upcoming_vti' ) }}">
                <a href="{{ route( 'f.events.upcoming_vti' ) }}" class="lbl">{{ $sc->title }}</a>
            </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
    <li class="{{ isActiveRoute( 'f.abouts.faq' ) }}">
        <a href="{{ route( 'f.abouts.faq' ) }}" class="lbl">
            FAQ
        </a>
    </li>
@stop