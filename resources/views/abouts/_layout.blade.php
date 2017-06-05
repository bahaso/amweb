@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.abouts.imf' ) }}">
        <a href="{{ route( 'f.abouts.imf' ) }}" class="lbl">
            About IMF
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.abouts.world_bank' ) }}">
        <a href="{{ route( 'f.abouts.world_bank' ) }}" class="lbl">
            World Bank
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.abouts.am2018' ) }}">
        <a href="{{ route( 'f.abouts.am2018' ) }}" class="lbl">
            AM 2018
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.faqs.index' ) }}">
        <a href="{{ route( 'f.faqs.index' ) }}" class="lbl">
            FAQ
        </a>
    </li>
@stop