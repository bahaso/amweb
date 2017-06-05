@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.abouts.imf' ) }}">
        <a href="{{ route( 'f.events.index' ) }}" class="lbl">
            Main Events
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.abouts.world_bank' ) }}">
        <a href="{{ route( 'f.pages.index', ['events', 'Program VTI']) }}" class="lbl">
            Side Events
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.abouts.program_vti' ) }}">
        <a href="{{ route( 'f.abouts.program_vti' ) }}" class="lbl">
            Program VTI
        </a>
    </li>
@stop