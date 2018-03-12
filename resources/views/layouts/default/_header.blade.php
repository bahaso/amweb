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

                @foreach( $menu_parents as $mp )
                <li class="has-dropdown">
                    <a href="
                    @if( $mp->url_link )
                        {{ $mp->url_link }}
                    @elseif( $mp->post_map_id )
                        {{ route( 'f.posts.index', [ 'id' => $mp->id, 'slug'=> str_slug($mp->title) ] ) }}
                    @else
                        #
                    @endif 
                    ">
                        {{ $mp->title }}
                    </a>
                    @if( $menu_childs[$mp->id]->count() > 0 )
                    <ul>
                        @foreach( $menu_childs[$mp->id] as $mc )
                        <li>
                            <a href="@if( $mc->url_link )
                                        {{ $mc->url_link }}
                                    @else 
                                        {{ route( 'f.posts.index', [ 'id' => $mc->id, 'slug'=> str_slug($mc->title) ] ) }}
                                    @endif">
                                {{ $mc->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach

         {{--       <li class="has-dropdown">
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
                </li>--}}
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
