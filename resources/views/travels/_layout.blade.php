@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.travels.indonesia' ) }}">
        <a href="{{ route( 'f.travels.indonesia') }}" class="lbl">
            Indonesia in Brief
        </a>
    </li>
    @foreach( $side_nav as $ab )
    <li class="{{ isActiveURL( route( 'f.travels.detail', [$ab->id, $ab->slug ]) ) }}">
        <a href="{{ route( 'f.travels.detail', [$ab->id, $ab->slug ] ) }}" class="lbl">
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
@stop