@extends( 'layouts.default.layout' )

@section( 'content' )

    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 'label' => $navigation, 'url' => $route ],
            [ 'label' => $slug ]
        ]
    ])

    <section class="image-square-title">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h4 class="uppercase mb16 fw600 title">{{ $slug }}</h4>
                    <p class="lead">
                        {{ $slug }} Description
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                {!! html_img( 'img/am2018/public/logo-AM-fix.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <p class="mb0 desc">
                Every three consecutive years, International Monetary Fund (IMF) and World Bank Group (WB) conduct an annual meeting located outside the Headquarters in Washington DC. In 2015, Indonesia has been appointed to be the host country of 2018 Annual Meeting. Naturally, Ministry of Finance and Bank Indonesia (Indonesian Central Bank) become the core organizing committee of the biggest international conference which would be held in Nusa Dua, Bali.
            </p>
        </div>
    </section>
     <section class="image-square right">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                {!! html_img( 'img/am2018/public/imf.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content wysiwyg">
            <p class="mb0 desc">
                IMF is an international organization that aims to:
                <ul>
                    <li>Endorse international cooperation and maintain financial stability</li>
                    <li>Facilitate international trade</li>
                    <li>Stimulate the sustainable economic growth as well as workforce absorption</li>
                    <li>Reduce poverty in the world</li>
                </ul>
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                {!! html_img( 'img/am2018/public/IMF2.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content">
            <p class="mb0 desc">
                Indonesia’s membership in IMF, the process wasn’t directly from Indonesia’s membership in UN - 28th September 1950. On 10 September 1952, Board of Governors of the IMF and IBRD (World Bank) agreed on resolution of terms and conditions upon Indonesia’s membership. Indonesia accepted it and signed in mid 1953 (officially became the member), it was then legalized through Act No. 5 1954 on Indonesia’s Membership in IMF and IBRD (UU No 5 Tahun 1954 tentang Keanggotaan RI dari IMF dan IBRD).
            </p>
        </div>
    </section>

    @include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop