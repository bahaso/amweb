@extends( 'layouts.default.sidebar.layout' )

@section( 'lhs_sidebar' )
    <li class="{{ isActiveRoute( 'f.discovers.indonesia' ) }}">
        <a href="{{ route( 'f.discovers.indonesia') }}" class="lbl">
            Indonesia in Brief
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.welcomes.tips' ) }}">
        <a href="{{ route( 'f.welcomes.tips') }}" class="lbl">
            Travel Tips
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.welcomes.visa' ) }}">
        <a href="{{ route( 'f.welcomes.visa') }}" class="lbl">
            Visa
        </a>
    </li>
    <li class="{{ isActiveRoute( 'f.welcomes.customs' ) }}">
        <a href="{{ route( 'f.welcomes.customs') }}" class="lbl">
            Customs
        </a>
    </li>

@stop