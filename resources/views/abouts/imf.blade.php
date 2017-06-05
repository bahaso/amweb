@extends( 'abouts._layout' )

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
        About the International Monetary Fund (IMF)
    </h1>
    <div class="content">
        <p>
            During the Great Depression in 1930s, countries around the world attempted to overcome economic failure by creating foreign trade obstacles, devaluating currencies to compete in export market, and limiting the freedom of foreign exchange ownership. However, these attempts did not bring any benefit for each country. Global trade declined sharply and standard of workforce and living also decreased in a lot of countries.
        </p>
        <p>
            {!! html_img( 'img/am2018/public/imf.jpg',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            The downfall of international monetary cooperation after the war stimulated the founders of the IMF to plan to build an instititution for supervising international monetary system. Monetary system included exchange rate and international payment systems enabling countries and their people to purchase products and services each other. This new global entity was expected to ensure exchange rate stability and encourage its member countries to eliminate exchange rate limitation which may obstruct trade.
        </p>
        <p>
            The IMF was founded in July 1944 as representatives of 45 countries meeting in Bretton Woods, New Hampshire, USA agreed on a framework for international economic cooperation. They believed that the framework is needed to avoid a repetition of the competitive devaluations that had contributed to the Great Depressions.
        </p>
        <p>
            The IMF formally started to exist in December 1945 as 29 countries signed the agreement and started operating on March 1, 1947. At the end of that year, France became the first country applying for a loan from the IMF.
        </p>
        <p>
            The IMF membership began to develop at the end of 1950s and during 1960s. This development occured because a lot of African countries had proclaimed their independence and applied for membership. However, the cold war occuring at that time limited the IMF membership because most of countries under the influence of Soviet did not join this organization.
        </p>
        <p>
            IMF comprises of 189 member countries, in which each of the members is obliged to contribute financially, that will further determine quota and voting rights in IMF. Each member is entitled to certain quota that reflect their relative positions to the other members. IMF also collects financial resources from its members that can be lended to member that is going through balance of payment difficulty.
        </p>
        <p class="no-mb">
            IMF is an international organization that aims to:
        </p>
        <ul>
            <li>Endorse international cooperation and maintain financial stability</li>
            <li>Facilitate International Trade</li>
            <li>Stimulate the sustainable economic growth as well as workforce absorption</li>
            <li>Reduce poverty in the world</li>
        </ul>
        <p>
            The process of Indonesia’s membership in IMF wasn’t directly from Indonesia’s membership in UN on September 28, 1950. On September 10, 1952 Boards of Governors of IMF and IBRD (former name of the World Bank) agreed on resolution of terms and conditions upon Indonesia’s membership. Indonesia accepted it and signed the agreement in mid 1953 (officially became the member). It was then legalized through Act No. 5 1954 on Indonesia’s Membership in IMF and IBRD.
        </p>
    </div>
</section>

@stop