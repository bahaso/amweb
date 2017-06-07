@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.events.main' ) }}">
        <a href="{{ route( 'f.events.main' ) }}" class="lbl">
            Main Events
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.events.side' ) }}">
        <a href="{{ route( 'f.events.side' ) }}" class="lbl">
            Side Events
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.events.program_vti' ) }}">
        <a href="{{ route( 'f.events.program_vti' ) }}" class="lbl">
            Program VTI
        </a>
    </li>
@stop