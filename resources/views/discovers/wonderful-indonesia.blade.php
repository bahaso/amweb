@extends( 'discovers._layout' )

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
                'label' => 'Discover Indonesia', 
                'url' => route( 'f.discovers.indonesia' ) 
            ],
            [ 
                'label' => 'Wonderful Indonesia', 
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
                Wonderful Indonesia
            </span>
            <span class="mix-color-bar right"></span>
            <span class="mix-color-bar mobile-full"></span>
        </div>
        
        <p>
            Indonesia has various natural wonders to explore and Bali, known as the Island of Gods, is an alluring destination for all travelers. Explore beyond the green cascading rice fields in Bali where you can witness real-life dragons known as Komodo in Labuan Bajo, or swim with the stingless jellyfish in Kalimantan! If you want something more magical, visit the mystifying White Crater in Bandung or visit the biggest Buddhist temple known as Borobudur Temple near Yogyakarta. You can also stroll around and taste the unique cuisines from each area or enjoy the metropolitan hub of Jakarta. We invite you to travel to the surrounding islands – there are more than 16,000 for you to discover!
        </p>
        <p>
            It’s all in Wonderful Indonesia!
        </p>

        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                @foreach( $discover_tab as $key => $dt )
                <li class="@if($key == 0) active @endif">
                    <div class="title set-background height-big" 
                        style="background-image:url( {{ $tab_img[$dt->id] }} );background-size:cover;width:100%;">
                        <h4 class="inline-block mb0 set-title">{{ $dt->title }}</h4>
                    </div>
                    @foreach( $discover_post[ $dt->id ] as $dp )
                    <div class="content">
                        <div class="faq-triangle {{ $dp->arrow_color }}"></div>
                        <div class="faq-inline">
                            <div class="fi-container no-mb">
                                @if( $post_img[ $dp->id ] )
                                <a target="_blank" href="{{ $dp->url_link }}">
                                    {!! html_img( $post_img[ $dp->id ]->original(),
                                    [
                                        'w' => '181',
                                        'h' => '181',
                                        'class' => 'fi-image'
                                    ]) !!}
                                </a>
                                @endif
                                <div class="fi-box">
                                    <a target="_blank" href="{{ $dp->url_link }}" class="fi-label">
                                        {{ $dp->title }}
                                    </a>
                                    <div class="fi-desc">
                                        {!! $dp->summary !!}
                                    </div>
                                    <a target="_blank" href="{{ $dp->url_link }}" class="fi-link">Read More >></a>
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
    </div>
</section>

@stop
