@extends( 'posts._layout' )

@section( 'head_page_css' )
    @parent
    {!! html_css( 'discover-indonesia.css', 'css/fo' ) !!}
@stop

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'About', 
                'url' => route( 'f.posts.index', [ $db_post_map->id, $db_post_map->slug ] ) 
            ],
            [ 
                'label' => $db_post_map->title,
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <div class="content">


        <div class="mix-color-title mb-50">
            <span class="mix-color-bar mobile-full"></span>
            <span class="mix-color-bar left"></span>
            <span class="mct-row fm-signika-reg sm-font">
                {{ $db_discover->title }}
            </span>
            <span class="mix-color-bar right"></span>
            <span class="mix-color-bar mobile-full"></span>
        </div>
        <div class="no-mb">
            {!! $db_discover->content !!}
        </div>

        <div class="faq-title-link">
            <h4 class="ftl-title">{{ $db_discover->tab_title }}</h4>
        </div>
        
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                @foreach( $db_discover_tab as $key=>$dt )
                <li class="@if( $key == 0 ) active @endif">
                    <div class="title set-background" 
                        style="background-image:url('@if($db_discover_tabImage[$dt->id]){{$db_discover_tabImage[$dt->id]->original()}}@endif');background-size:cover;width:100%;background-position:center center;">
                        <h4 class="inline-block mb0 set-title-bali">{{ $dt->title }}</h4>
                    </div>
                    @foreach( $tab_child[$dt->id] as $tc )
                    <div class="content">
                        <div class="faq-triangle {{ $tc->arrow_color }}"></div>
                        <div class="faq-inline">
                            <div class="fi-container">
                                <a href="{{ $tc->url_link }}">
                                    @if( $tab_child_image[$tc->id] )
                                        {!! html_img( $tab_child_image[$tc->id]->original(),
                                        [
                                            'w' => '181',
                                            'h' => '181',
                                            'class' => 'fi-image'
                                        ]) !!}
                                    @endif
                                </a>
                                <div class="fi-box">
                                    <a href="{{ $tc->url_link }}" class="fi-label">{{ $tc->title }}</a>
                                    <div class="fi-desc">
                                        {!! $tc->summary !!}
                                    </div>
                                    <a href="{{ $tc->url_link }}" class="fi-link">Read More >></a>
                                </div>
                            </div> 
                        </div>                            
                    </div>
                    @endforeach
                </li>
                @endforeach

            </ul>
            <!--end of accordion-->
        </section>

        <div class="content no-padding">

            <div class="mix-bar-full no-mb"></div>
            <div class="faq-title-link">
                <h4 class="ftl-title">{{ $db_discover->title_extra }}</h4>
                <a href="{{ $db_discover->url_link_extra }}" class="ftl-link">More >></a>
            </div>
            <div class="faq-split">
                @foreach( $db_discover_extra as $number=>$de)
                <div class="fs-box @if($number%2==1) right @endif">
                    @if( $extra_image[$de->id])
                        {!! html_img( $extra_image[$de->id]->original(),
                        [
                            'w' => '400',
                            'h' => '243',
                        ]) !!}
                    @endif
                    <div class="fs-container">
                        <a href="{{ $de->url_link }}" class="fs-title">{{ $de->title }}</a>
                        <p>
                            {{ $de->summary }}
                        </p>
                    </div>
                </div>
                @endforeach

<!--                 <div class="fs-box ">
                    {!! html_img( 'img/am2018/public/discover-indonesia/bali/ayam-betutu.jpg',
                    [
                        'w' => '400',
                        'h' => '243',
                    ]) !!}
                    <div class="fs-container">
                        <h5 class="fs-title">Ayam Betutu</h5>
                        <p>
                            Cooked and wrapped in banana leaf for 24 hours straight, Ayam Betutu offers rich flavour that you should not miss!
                        </p>
                    </div>
                </div> -->
            </div>
            <div class="mix-bar-full no-mb"></div>

            {{--<div class="faq-title-link">
                <h4 class="ftl-title">Hotel & Resorts</h4>
                <a href="http://www.indonesia.travel/en/post/bali-s-unique-hotel-resorts" class="ftl-link">More >></a>
            </div>

            <div class="fi-container">
                {!! html_img( 'img/am2018/public/discover-indonesia/bali/four-season-Resort.jpg',
                [
                    'w' => '211',
                    'h' => '211',
                    'class' => 'fi-image'
                ]) !!}
                <div class="fi-box info">
                    <div class="fi-label">Four Seasons Resort Bali Sayan</div>
                    <div class="fi-desc info">
                        Stay at the resort in the middle of breathtaking rainforest by the Ayung River in Ubud to rejuvenate your soul.
                     </div>
                     <div class="fi-info">
                         <span class="icons marker"></span>
                         <span>
                             Jl. Raya Sayan, Ubud, Sayan Ubud, Bali 80571
                         </span>
                     </div>
                      <div class="fi-info">
                         <span class="icons telephone"></span>
                         <span>
                             (0361) 977577
                         </span>
                     </div>
                      <div class="fi-info">
                         <span class="icons globe"></span>
                         <span>
                             fourseasons.com
                         </span>
                     </div>
                </div>
            </div>

            <div class="fi-container">
                {!! html_img( 'img/am2018/public/discover-indonesia/bali/sandat-gampling-tent.jpg',
                [
                    'w' => '211',
                    'h' => '211',
                    'class' => 'fi-image'
                ]) !!}
                <div class="fi-box info">
                    <div class="fi-label">Four Seasons Resort Bali Sayan</div>
                    <div class="fi-desc info">
                        Stay at the resort in the middle of breathtaking rainforest by the Ayung River in Ubud to rejuvenate your soul.
                     </div>
                     <div class="fi-info">
                         <span class="icons marker"></span>
                         <span>
                             Jl. Raya Sayan, Ubud, Sayan Ubud, Bali 80571
                         </span>
                     </div>
                      <div class="fi-info">
                         <span class="icons telephone"></span>
                         <span>
                             (0361) 977577
                         </span>
                     </div>
                      <div class="fi-info">
                         <span class="icons globe"></span>
                         <span>
                             fourseasons.com
                         </span>
                     </div>
                </div>
            </div>--}}


            <div class="mix-bar-full no-mb"></div>

            {!! $db_discover->content_bottom !!}

        </div>

    </div>
</section>

@stop