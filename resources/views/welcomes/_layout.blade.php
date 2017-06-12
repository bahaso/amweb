@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.welcomes.visa' ) }}">
        <a href="{{ route( 'f.welcomes.visa' ) }}" class="lbl">
            Visa
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.welcomes.tourism' ) }}">
        <a href="{{ route( 'f.welcomes.tourism' ) }}" class="lbl">
            Free Tourism Visa
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.welcomes.customs' ) }}">
        <a href="{{ route( 'f.welcomes.customs' ) }}" class="lbl">
            Customs
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.welcomes.tips' ) }}">
        <a href="{{ route( 'f.welcomes.tips' ) }}" class="lbl">
            Travel Tips
        </a>
    </li>
@stop