@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.informations.hotel' ) }}">
        <a href="{{ route( 'f.informations.hotel' ) }}" class="lbl">
            Hotel
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.informations.transportation' ) }}">
        <a href="{{ route( 'f.informations.transportation' ) }}" class="lbl">
            Transportation
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.informations.facilities' ) }}">
        <a href="{{ route( 'f.informations.facilities' ) }}" class="lbl">
            Other Facilities
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.informations.weather' ) }}">
        <a href="{{ route( 'f.informations.weather' ) }}" class="lbl">
            Weather
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.maps.index' ) }}">
        <a href="{{ route( 'f.maps.index' ) }}" class="lbl">
            Interactive Maps
        </a>
    </li>
@stop