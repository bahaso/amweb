@extends( 'faqs._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'About', 
                'url' => route( 'f.abouts.imf_world_bank' ) 
            ],
            [ 
                'label' => 'About IMF', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <h1 class="title fw600">
            About The International Monetary Fund (IMF)
        </h1>
        <div class="content">
            <p>
                {!! html_img( 'img/am2018/public/about-imf_article.jpg',
                [
                    'w' => '40%',
                    'h' => 'auto'
                ]) !!}
            </p>
            <p>
                The IMF, also known as the Fund, was conceived at a UN conference in Bretton Woods, New Hampshire,
                United States, in July 1944. The 44 countries at that conference sought to build a framework for
                economic cooperation to avoid a repetition of the competitive devaluations that had contributed to the
                Great Depression of the 1930s.
            </p>
            <p>
                The IMF's responsibilities: The IMF's primary purpose is to ensure the stability of the international
                monetary system—the system of exchange rates and international payments that enables countries (and
                their citizens) to transact with each other. The Fund's mandate was updated in 2012 to include all
                macroeconomic and financial sector issues that bear on global stability.
            </p>
            <p>
                For information on the IMF, go to <a target="_blank" href="http://www.imf.org/en/About">http://www.imf.org/en/About</a>.
            </p>
        </div>
    </section>

@stop
