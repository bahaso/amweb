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
                'label' => 'About World Bank Group',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        THE WORLD BANK GROUP
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/WBG_Vertical-CMYK.png',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p class="no-mb">
            The World Bank Group has set two goals for the world to achieve by 2030:
        </p>
        <ul>
            <li>End extreme poverty by decreasing the percentage of people living on less than $1.90 a day to no more than 3%</li>
            <li>Promote shared prosperity by fostering the income growth of the bottom 40% for every country</li>
        </ul>
        <p>
            The World Bank is a vital source of financial and technical assistance to developing countries around the world. Not a bank in the ordinary sense, but a unique partnership to reduce poverty and support development. The World Bank Group comprises five institutions managed by their member countries.
        </p>
        <ul>
            <li>IBRD: The International Bank for Reconstruction and Development</li>
            <li>IDA: The International Development Agency</li>
            <li> IFC: The International Financial Corporation</li>
            <li>MIGA: The International Multilateral Investment Guarantee Agency</li>
            <li>ICSID: The International Centre for Settlement of Investment Disputes</li>
        </ul>
        <p>
            Established in 1944, the World Bank Group is headquartered in Washington, D.C. and has more than 10,000 employees in over 120 offices worldwide.
        </p>
        <p>
            For more information, please visit: <a target="_blank" href="http://www.worldbank.org/en/about">http://www.worldbank.org/en/about.</a>
        </p>
    </div>
</section>

@stop