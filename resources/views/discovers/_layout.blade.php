@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.discovers.indonesia' ) }}">
        <a href="{{ route( 'f.discovers.indonesia' ) }}" class="lbl">
            Indonesia in Brief
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.discovers.wonderful_indonesia' ) }}">
        <a href="{{ route( 'f.discovers.wonderful_indonesia' ) }}" class="lbl">
            Wonderful Indonesia
        </a>
    </li>
<!--     <li class="{{ isActiveRoute( 'f.discovers.destination' ) }}">
        <a href="{{ route( 'f.discovers.destination' ) }}" class="lbl">
            Main Destination
        </a>
    </li> -->
    <li class="{{ isActiveRoute( 'f.discovers.bali' ) }}">
        <a href="{{ route( 'f.discovers.bali' ) }}" class="lbl">
            Bali
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.discovers.tourism' ) }}">
        <a href="{{ route( 'f.discovers.tourism' ) }}" class="lbl">
            Tourism Package
        </a>
    </li>

@stop