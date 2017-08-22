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
    <li class="has-children {{ isActiveRoute( 'f.events.program_vti' ) }}">
        <a href="{{ route( 'f.events.program_vti' ) }}" class="lbl">
            Voyage To Indonesia (VTI)
        </a>
        <ul>
            <li>
                <a href="#" class="lbl">Upcoming VTI Events</a>
            </li>
            <li>
                <a href="#" class="lbl">Past VTI Events</a>
            </li>

            {{--<li class="{{ isActiveRoute( 'f.events.bank' ) }}">--}}
                {{--<a href="{{route( 'f.events.bank' )}}" class="lbl">--}}
                    {{--BI--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{ isActiveRoute( 'f.events.ministry' ) }}">--}}
                {{--<a href="{{route( 'f.events.ministry' )}}" class="lbl">--}}
                    {{--Ministry of Finance--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </li>
@stop