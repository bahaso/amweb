@extends( 'welcomes._layout' )

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
                'label' => 'Travel Information',
                'url' => route( 'f.discovers.indonesia' ) 
            ],
            [ 
                'label' => 'Indonesia in Brief', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
<!--     <h1 class="title fw600">
        Indonesia
    </h1> -->
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-in-brief.jpg',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>


        <div class="mix-color-title">
            <span class="mix-color-bar left"></span>
            <span class="mct-row fm-indonesiana">
                indonesia
            </span>
            <span class="mix-color-bar right"></span>
        </div>

        <div class="info-split-column">
            <div class="sc-col">
                <div class="sc-label big">Population</div>
                <div class="sc-value big">263,645,474</div>
            </div>
            <div class="sc-col right">
                <div class="sc-label big">Area</div>
                <div class="sc-value big">1,812,108 Km2</div>
            </div>
            <div class="sc-col heighten">
                <div class="sc-label">Languages</div>
                <div class="sc-value">Bahasa Indonesia</div>
            </div>
            <div class="sc-col right">
                <div class="sc-label">Religion</div>
                <div class="sc-value">
                    Islam, Protestantism, Catholicism, Hinduism, Buddhism and Confucianism
                </div>
            </div>
            <div class="sc-col">
                <div class="sc-label">Government    </div>
                <div class="sc-value">Constitutional Republic</div>
            </div>
            <div class="sc-col right">
                <div class="sc-label">Currency</div>
                <div class="sc-value">
                    (Rp) Indonesian Rupiah
                </div>
            </div>
        </div>

        <div class="mix-bar-full"></div>
        
        <p>The Indonesian Archipelago straddles the equator with raw, natural surroundings such as majestic mountains and pristine beaches. Located between the Pacific and Indian Oceans, Indonesia has a tropical climate which is enjoyable year-round. From land to sea, Indonesia offers extraordinary destinations and attractions found nowhere else in the world.</p>
        <p>Explore beyond the green cascading rice fields in Bali where you can witness real-life dragons known as Komodo in Labuan Bajo, or swim with the stingless jellyfish in Kalimantan! If you want something more magical, visit the mystifying White Crater in Bandung or visit the biggest Buddhist temple known as Borobudur Temple near Yogyakarta. You can also stroll around and taste the unique cuisines from each area or enjoy the metropolitan hub of Jakarta. Discover it all in Wonderful Indonesia!</p>
        <div class="mix-bar-full"></div>

    </div>
</section>

@stop