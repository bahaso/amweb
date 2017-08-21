@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.abouts.vti' ) }}">
        <a href="{{ route( 'f.abouts.vti' ) }}" class="lbl">
            The Voyage to Indonesia
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.abouts.am2018' ) }}">
        <a href="{{ route( 'f.abouts.am2018' ) }}" class="lbl">
            2018 Annual Meetings
        </a>
    </li>
    <!--<li class="{{ isActiveRoute( 'f.abouts.imf_world_bank' ) }}">
        <a href="{{ route( 'f.abouts.imf_world_bank' ) }}" class="lbl">
        IMF - WB Annual Meeting 2018
        </a>
    </li>-->
    <li class="{{ isActiveRoute( 'f.abouts.imf' ) }}">
        <a href="{{ route( 'f.abouts.imf' ) }}" class="lbl">
            The International Monetary Fund
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.abouts.world_bank' ) }}">
        <a href="{{ route( 'f.abouts.world_bank' ) }}" class="lbl">
            The World Bank Group
        </a>
    </li>
    <!--<li class="{{ isActiveRoute( 'f.pages.index' ) }}">
        <a href="{{ route( 'f.pages.index', ['about', 'National Committee']) }}" class="lbl">National Committee</a>
    </li>-->
    <li class="{{ isActiveRoute( 'f.faqs.index' ) }}">
        <a href="{{ route( 'f.faqs.index' ) }}" class="lbl">
            FAQ
        </a>
    </li>
@stop