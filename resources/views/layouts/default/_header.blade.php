<div class="nav-bar">

    <div class="module left">
        <a href="{{ route( 'f.home' ) }}" class="logo-link">
            {!! html_img( 'img/am2018/amf2018-logo.jpg', 
                [ 
                    'w'     => 169,
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
                        <li>
                            <!-- <a href="{{ route( 'f.abouts.imf_world_bank' ) }}">IMF - WB Annual Meeting 2018</a> -->
                        </li>
                        <li>
                            <a href="{{ route( 'f.abouts.imf' ) }}">IMF</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.abouts.world_bank' ) }}">World Bank</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['about', 'National Commitee']) }}">National Commitee</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['about', 'AM 2018']) }}">AM 2018</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.faqs.index' ) }}">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Events
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.events.index' ) }}">Main Events</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['events', 'Program VTI']) }}">Side Events</a>
                        </li>
<!--                         <li>
                            <a href="{{ asset( 'uploads/public/Venue Map.pptx' ) }}">Venues Map</a>
                        </li> -->
                        <li>
                            <a href="{{ route( 'f.pages.index', ['events', 'Program VTI']) }}">Program VTI</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Coming To Indonesia
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Coming To Indonesia', 'VISA']) }}">VISA</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Coming To Indonesia', 'Customs']) }}">CUSTOMS</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Discover Indonesia
                    </a>
                    <ul>
<!--                         <li>
                            <a href="{{ route( 'f.discovers.indonesia' ) }}">5 Destinasi Pariwisata Indonesia</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.discovers.bali' ) }}">11 Destinasi Bali</a>
                        </li> -->
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Discover Indonesia', 'Indonesia in Brief']) }}">Indonesia in Brief</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Discover Indonesia', 'Main Destination']) }}">Main Destination</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Discover Indonesia', 'Bali']) }}">Bali</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Discover Indonesia', 'Paket Wisata']) }}">Paket Wisata</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Media and Public
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Media and Public', 'Gallery']) }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Media and Public', 'Publication']) }}">Publication</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Media and Public', 'Press Release']) }}">Press Release</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Information
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Information', 'Hotel']) }}">Hotel</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Information', 'Flight Schedule']) }}">Flight Schedule</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Information', 'Transportation']) }}">Transportation</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Information', 'Weather']) }}">Weather</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.pages.index', ['Information', 'Food and Beverages']) }}">Food and Beverages</a>
                        </li>
                    </ul>
                </li>
<!--                 <li class="has-dropdown">
                    <a href="#">
                        Voyage To Indonesia
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.abouts.vti' ) }}">About VTI</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.exhibitions.seminar' ) }}">Seminar</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.exhibitions.detail' ) }}">Exhibition</a>
                        </li>
                    </ul>
                </li> -->

<!--                 <li class="has-dropdown">
                    <a href="#">
                        Media and Publication
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.galleries.detail' ) }}">Gallery</a>
                        </li>
                        <li>
                            <a href="#">Seminar Materials</a>
                        </li>
                        <li>
                            <a href="#">Press Release</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!--end of menu module-->
        <div class="module widget-handle language left">
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
        </div>
    </div>

</div>