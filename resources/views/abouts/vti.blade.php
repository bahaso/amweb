@extends( 'abouts._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'About', 
                'url' => route( 'f.abouts.imf' ) 
            ],
            [ 
                'label' => 'VTI', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Voyage to Indonesia
    </h1>
    <div class="content">
        <p>
            In the third year of every three-year period, the International Monetary Fund (IMF) and the World Bank Group (WBG) conduct a meeting outside their headquarters in Washington DC. Indonesia has been appointed as host country for the 2018 Annual Meetings IMF-WBG in Nusa Dua, Bali. Ministry of Finance and Bank of Indonesia have been assigned as core organizing committee of this event. 
        </p>
        <p>
            It is estimated that 15,000 delegations from 189 member countries will attend this event. The participants include ministers of finance, central bankers, delegations from regional and global economic partnership institutions, civil society representatives, academics and private sectors, as well as the media from all over the world.
        </p>
        <p>
            “Voyage of Indonesia” is a program covering series of events conducted until the peak event of the 2018 Annual Meetings IMF-WBG in October, 2018 and aftermath. This program aims to grow awareness of the 2018 Annual Meetings IMF-WBG in Indonesia and to promote Indonesia to delegations attending this event.
        </p>
        <p>
            Indonesia intends to take an opportunity from this moment in order to gain more benefits for the sake of national and global interests by showing its achievements in economic and social sectors, as well as its wealthy culture, tourism objects, and beautiful landscapes. Before hosting the main event in Bali, Indonesia will conduct some preliminary activities in 2017 in order to build enthusiasm for this great event. Those activities aiming to attract international and national realms are organized within a program which is entitled “Voyage to Indonesia” or VTI.
        </p>
        <p class="no-mb">
            Both side events and main events of “Voyage to Indonesia” are conducted in order to:
        </p>
        <ul>
            <li>promote Indonesia’s achievement in implementing reformation and democracy</li>
            <li>promote Indonesia’s national resilience and economic progress after the Asian crisis</li>
            <li>promote Indonesia’s leadership and commitment in discussing global concerns</li>
            <li>promote culture, tourism, and creative industry; as well as optimize other national interests</li>
        </ul>
        <p class="no-mb">
            To achieve those goals, both side events and main events of “Voyage to Indonesia” are held in the form of:
        </p>
        <ul>
            <li>seminar, workshop, and focus group discussion</li>
            <li>exhibition, such as creative industry, domestic products, digital economy, and financial technology</li>
            <li>cultural performance</li>
            <li>investment forum</li>
            <li>economic cooperation forum</li>
            <li>financial industry and banking forum; trade promotion; and other related activities</li>
        </ul>
    </div>
</section>

@stop