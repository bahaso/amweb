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
                        <!-- <li>
                            <a href="{{ route( 'f.pages.index', ['about', 'National Committee']) }}">National Committee</a>
                        </li> -->
                        <li>
                            <a href="{{ route( 'f.abouts.am2018' ) }}">AM 2018</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.abouts.vti' ) }}">VTI</a>
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
                            <a href="{{ route( 'f.events.main' ) }}">Main Events</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.events.side' ) }}">Side Events</a>
                        </li>
<!--                         <li>
                            <a href="{{ asset( 'uploads/public/Venue Map.pptx' ) }}">Venues Map</a>
                        </li> -->
                        <li>
                            <a href="{{ route( 'f.events.program_vti' ) }}">Program VTI</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Welcome To Indonesia
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.welcomes.visa', ['Welcome To Indonesia', 'Visa']) }}">Visa</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.welcomes.tourism', ['Welcome To Indonesia', 'Free Tourism Visa']) }}">Free Tourism Visa</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.welcomes.customs', ['Welcome To Indonesia', 'Customs']) }}">Customs</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.welcomes.tips', ['Welcome To Indonesia', 'Travel Tips']) }}">Travel Tips</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">
                        Discover Indonesia
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.discovers.indonesia', ['Discover Indonesia', 'Indonesia in Brief']) }}">Indonesia in Brief</a>
                        </li>
<!--                         <li>
                            <a href="{{ route( 'f.discovers.destination', ['Discover Indonesia', 'Main Destination']) }}">Main Destination</a>
                        </li> -->
                        <li>
                            <a href="{{ route( 'f.discovers.wonderful_indonesia', ['Discover Indonesia', 'Wonderful Indonesia']) }}">Wonderful Indonesia</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.discovers.bali', ['Discover Indonesia', 'Bali']) }}">Bali</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.discovers.tourism', ['Discover Indonesia', 'Paket Wisata']) }}">Tourism Package</a>
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
                            <a href="{{ route( 'f.galleries.index' ) }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.publications.index' ) }}">Publications</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.press-releases.index' ) }}">Press Releases</a>
                        </li>
                    </ul>
                </li>

<!--            <li class="has-dropdown">
                    <a href="#">
                        Information
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route( 'f.informations.hotel', ['Information', 'Hotel']) }}">Hotel</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.informations.transportation', ['Information', 'Transportation']) }}">Transportation</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.informations.facilities', ['Information', 'Other Facilities']) }}">Other Facilities</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.informations.weather', ['Information', 'Weather']) }}">Weather</a>
                        </li>
                        <li>
                            <a href="{{ route( 'f.maps.index', ['Information', 'Interactive Maps']) }}">Interactive Maps</a>
                        </li>
                    </ul>
                </li>
                -->
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
