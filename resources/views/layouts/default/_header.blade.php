<div class="nav-bar">

    <div id="nav_logo" class="module left">
        <a href="{{ route( 'f.home' ) }}" class="logo-link">
            {!! html_img( 'img/am2018/logo-garuda-indonesia.png',
                [ 
                    'w'     => 285,
                    'h'     => 62,
                    'class' => 'logo logo-dark' 
                ]) !!}
        </a>
    </div>
    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
        <i class="ti-menu"></i>
    </div>
    <div id="st_menu" class="module-group right">
        <div class="module left">
            <ul class="menu">
                <li>
                    <a href="{{ route( 'f.home' ) }}">
                        Home
                    </a>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        About
                    </a>
                    <ul>
                        @foreach( $art_about as $ab )
                        <li>
                            <a href="{{ route( 'f.abouts.detail', [ $ab->id, $ab->slug ] ) }}">{{ $ab->title }}</a>
                        </li>
                        @endforeach
                        <li>
                            <a href="{{ route( 'f.abouts.faq' ) }}">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Events
                    </a>
                    <ul>
                        @foreach( $art_event as $av )
                        <li>
                            <a href="{{ route( 'f.events.detail', [ $av->id, $av->slug ] ) }}">{{ $av->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Travel Information
                    </a>
                    <ul>
                       <li>
                            <a href="{{ route( 'f.travels.indonesia' ) }}">
                                Indonesia in Brief
                            </a>
                        </li>
                        @foreach( $art_travel as $at)
                        <li>
                            <a href="{{ route( 'f.travels.detail', [ $at->id, $at->slug ]) }}">
                                {{ $at->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Discover Indonesia
                    </a>
                    <ul>
                    <!--<li>
                            <a href="{{ route( 'f.discovers.destination', ['Discover Indonesia', 'Main Destination']) }}">Main Destination</a>
                        </li> -->
                        <li>
                            <a href="{{ route( 'f.discovers.wonderful_indonesia', ['Discover-Indonesia', 'Wonderful-Indonesia']) }}">Wonderful
                                Indonesia</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.discovers.bali', ['Discover-Indonesia', 'Bali']) }}">Bali</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.discovers.tourism', ['Discover-Indonesia', 'Paket-Wisata']) }}">Tourism
                                Packages</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Media and Publications
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.news.index' ) }}">News</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.press-releases.index' ) }}">Press Releases</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.publications.index' ) }}">Publications</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.galleries.index' ) }}">Photo Gallery</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!--end of menu module-->
        {{--<div class="module widget-handle language left">
            <ul class="menu">
                <li class="has-dropdown">
                    <a href="#">ENG</a>
                    <ul>
                        <li>
                            <a href="en">ENG</a>
                        </li>
                        <li>
                            <a href="id">IND</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>--}}
    </div>

</div>
