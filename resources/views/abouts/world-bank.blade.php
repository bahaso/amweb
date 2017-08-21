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
                'label' => 'About Worldbank', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        About World Bank
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/world-bank-20140807.jpg',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p class="no-mb">
            World Bank of which former name was International Bank for Reconstruction and Development was incorporated in 1944 and has developed into 5 agencies under the World Bank Group, namely:
        </p>
        <ul>
            <li>IBRD: The International Bank for Reconstruction and Development</li>
            <li>IDA: The International Development Agency</li>
            <li>IFC: The International Financial Corporation</li>
            <li>MIGA: The International Multilateral Investment Guarantee Agency</li>
            <li>ICSID: The International Centre for Settlement of Investment Disputes</li>
        </ul>
        <p>
            Initially, World Bank gave loan to rebuild the countries devastated by World War II. Along the end of the World War II, the focus of World Bank shifted from reconstruction to development by emphasizing on infrastructural development such as dike, electricity network, irrigation system, and road. The establishment of International Financial Corporation (IFC) in 1965 provides loan to commercial companies and financial agencies in the emerging countries.
        </p>
        <p>
            Furthermore, International Development Association (IDA) established in 1960 focuses on the development of the low income countries. This focus is part of the paradigm shift in policy of poverty eradication as major target of the World Bank Group. The formation of International Center for Settlement of Investment Disputes (ICSID) and Multilateral Investment Guarantee Agency (MIGA) will expand the capability of World Bank Group to connect global financial source with the needs of the emerging countries.  
        </p>
        <p>
            World Bank Group consistently promotes significant activities such as poverty alleviation, economy development and sustainable public living in the emerging countries.
        </p>
        <p>
            On 15 April 1954, under the Act No. 5 1954 on Indonesia’s Membership in IMF and IBRD, Indonesia became the member of IBRD. However, Indonesia withdrew its membership on 17th August 1965. Indonesia became the member again in September 1966 as the transition from Orde Lama to Orde Baru took place.
        </p>
    </div>
</section>

@stop