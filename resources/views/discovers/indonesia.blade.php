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
        
        <p class="fm-helvetica">
            Indonesian Archipelago is straddling the equator with its raw nature beauties such as mountains and beaches. 
            Located between the Pacific and Indian Ocean, Indonesia also has the tropical climate which becomes a perfect match to sunbathe 
            and strolling around. From the snowy mountain, beautiful underwater world, pristine beaches, splendid heritages, up to extraordinary 
            destinations and attractions that you can find nowhere else are here in the Wonderful Indonesia! 

        </p>
        <p class="fm-helvetica">
            The green cascading rice fields in Bali is not the only thing you can see. You can explore further and walk around with the real 
            life dragons known as Komodo in Labuan Bajo or swim with the stingless jellyfish in Kalimantan! If you want something more magical, 
            visit the mystifying White Crater in Bandung or visit the biggest Buddhist temple known as Borobudur Temple near Yogyakarta. You can also 
            stroll around and enjoy the unique cuisines from each area or enjoy the metropolitan of Jakarta with its world class hotels
            and high end entertainment centers for your nightlife attractions.
        </p>

        <div class="mix-bar-full"></div>

    </div>
</section>

@stop