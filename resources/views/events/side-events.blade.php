@extends( 'events._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Events', 
                'url' => route( 'f.events.index' ) 
            ],
            [ 
                'label' => 'Side Events', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <h1 class="title fw600">
            Side/Parallel Events on IMF-WBG AM 2018
        </h1>
        <div class="content">
            <p>
                Side/Parallel Events form a series of activities initiated by the Government of Indonesia through
                Ministries/Institutions/Agencies/Regional Governments in order to gain optimized benefits from
                Indonesia’s position as the host country of IMF-WBG AM 2018. Such activities are performed prior to or in
                conjunction with the IMF-WBG AM 2018 on 8-14 October 2018.
            </p>
            <p class="no-mb">
                The programmed side/parallel events must be directed to achieve these goals:
            </p>
            <ul>
                <li>to promote Indonesia’s achievement in implementing reformation and democracy</li>
                <li>to bolster Indonesia’s national security and economic progression post crisis in Asia</li>
                <li>to endorse Indonesia’s leadership and commitment in global issue discussion</li>
                <li>to endorse culture, tourism, and creative industry</li>
                <li>to optimize other national interests</li>
            </ul>
            <p class="no-mb">
                In order to realize those goals, the side/parallel events shall be held either in Indonesia or outside
                the country, under the coordination of the Ministry of Finance and Bank Indonesia. These events are
                conducted through the cooperation of related Ministries/Institutions/Agencies/Regional Governments by
                considering the effectivity of goals achievement and its efficiency. Such side/parallel events are in
                the form of:
            </p>
            <section class="faq">
                <ul class="accordion accordion-2 one-open">
                    <li class="active">
                        <div class="title">
                            <h4 class="inline-block mb0">Seminar, workshop, and focus group discussion (FGD)</h4>
                        </div>
                        <div class="content">
                            <p class="no-mb">
                                Seminar, workshop, and FGD functions as substantial program aligning with the agreed
                                theme, Voyage to Indonesia, which has been divided based on time of the event:
                            </p>
                            <ul>
                                <li>
                                    Below are events conducted prior to and during the IMF-WBG AM 2018 on 8-14 October
                                    2018. Themes of the programs along with the assigned Ministries/Institutions
                                    (coordinator) are as follows:
                                    <ol>
                                        <li>Fighting Inequality, coordinated by the Ministry of Finance</li>
                                        <li>Urbanization, coordinated by the Ministry of Finance cooperating with the
                                            National Development Planning Agency, Ministry of Housing and Public Works
                                        </li>
                                        <li>Human Capital, Investing in Education, coordinated by the Ministry of
                                            Education and Culture cooperating with the Indonesia Endowment Fund for
                                            Education (LPDP), Ministry of Religious Affairs, NU Muhammaddiyah
                                        </li>
                                        <li>Climate Change, coordinated by the Ministry of Environment and Forestry,
                                            Ministry of Finance, Ministry of Energy and Mineral Resources
                                        </li>
                                        <li>Boosting Growth, coordinated by the Bank of Indonesia and Ministry of
                                            Finance
                                        </li>
                                        <li>Domestic Resources Mobilization, coordinated by the Ministry of Finance and
                                            National Development Planning Agency
                                        </li>
                                        <li>Decentralization and Municipal Government, coordinated by the Ministry of
                                            Finance and National Development Planning Agency cooperating with the
                                            Ministry of Trade.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Below events are only conducted during the IMF-WBG AM 2018 on 8-14 October 2018.
                                    Themes of the programs along with the assigned Ministries/Institutions (coordinator)
                                    are as follows:
                                    <ol>
                                        <li>Stated-Owned Enterprise/Contribution to the Economy, coordinated by the
                                            Ministry of State-Owned Enterprise
                                        </li>
                                        <li>Between 1998 Asian Financial Crisis and 2008 Global Financial Crisis,
                                            Indonesian Perspective, coordinated by the Ministry of Finance and Bank of
                                            Indonesia cooperating with the Financial Services Auhority (OJK) and Deposit
                                            Insurance Agency (LPS).
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">Promotions/Exhibitions that shall be conducted prior to and
                                during the IMF-WBG AM 2018</h4>
                        </div>
                        <div class="content">
                            <p class="no-mb">
                                These exhibitions may be performed by related Ministries/Institutions/Agencies/Reginal
                                Governments, coordinating with the Ministry of Finance and Bank of Indonesia as follows:
                            </p>
                            <ul class="b-space">
                                <li>
                                    Batik Exhibition
                                    <p>This exhibition will be held by showcasing several batik types originating from
                                        Indonesia. The batik could be sold as part of promoting Indonesia’s proud
                                        product primarily in a number of international events in and outside
                                        Indonesia.</p>
                                </li>
                                <li>
                                    Art Exhibition/photo
                                    <p>This exhibition encompasses uniquely Indonesian handcrafts (partially shown by
                                        featuring its process), paintings related to Indonesia’s cultural diversity, and
                                        numerous photos depicting the country’s riches in differences.</p>
                                </li>
                                <li>
                                    Food and Beverage of Indonesia Heritage
                                    <p>
                                        An exhibition of Indonesia’s food products and cuisines that could be enjoyed by
                                        public and participants of the programs leading to the Annual Meeting 2018.
                                    </p>
                                    <p>
                                        Establishment of special venue for Indonesia’s food and beverage in Nusa Dua,
                                        Bali during the IMF-WBG AM 2018.
                                    </p>
                                </li>
                                <li>
                                    Traditional Ethnic Music Festival
                                    <p>
                                        Indonesia’s diverse traditional music shows, such as angklung, sasando, and
                                        kolintang. The music groups will also accompany ethnic songs competition.
                                    </p>
                                    <p>
                                        Coordinated by the Ministry of Tourism cooperating with the Ministry of
                                        Education and Culture and Ministry of Finance.
                                    </p>
                                </li>
                                <li>
                                    Tourism Promotion
                                    <p>An exhibition of tourist objects that have become Indonesia’s mainstay, and also
                                        promotions of attractive tour packages which will collaborate with national
                                        flight companies and experienced travel agents.</p>
                                </li>
                                <li>
                                    Economic Sharia and Indonesia Infrastructure Promotion
                                    <p>
                                        An exhibition showcasing the advancement of Indonesia’s economic development
                                        that upholds ‘Pavilion Indonesia’ as the theme. At Pavilion Indonesia, the
                                        public and participants have the freedom to browse sharia banking products
                                        available in Indonesia complete with its roles and potentials in shaping the
                                        country’s economy. The exhibition will display Indonesia’s best infrastructure
                                        projects financed by the State Budget and those that of the scheme of Public
                                        Private Partnership.
                                    </p>
                                    <p>
                                        The exhibition is under the coordination of the Ministry of Finance and Bank of
                                        Indonesia.
                                    </p>
                                </li>
                                <li>
                                    Agriculture Product Exhibition
                                    <p>
                                        An exhibition of Indonesia’s agricultural products (export and local commodity)
                                        including its utilizations for consumption.
                                    </p>
                                    <p>
                                        Under the coordination of the Ministry of Agriculture cooperating with the
                                        Ministry of Trade and Ministry of Finance.
                                    </p>
                                </li>
                                <li>
                                    Trade International Exhibition
                                    <p>
                                        Trade promotion is an international/national trade exhibition held ahead of the
                                        IMF-WBG AM 2018 in Nusa Dua, Bali. At this event, entrepreneurs from each country
                                        member of IMF-WBG are cordially invited to showcase their finest export oriented
                                        that will be promoted in the global market. This event is essential as each
                                        country is entitled to introduce and endorse its best products so that they can
                                        gain strong movement to create business opportunities they can use to boost
                                        investment growth in its countries respectively.
                                    </p>
                                    <p>
                                        The Ministry of Trade will be the coordinator of this event with the support of
                                        the Ministry of Foreign Affairs, Capital Investment Coordinating Board (BKPM),
                                        and Indonesian Creative Economy Agency (BEKRAF).
                                    </p>
                                </li>
                                <li>
                                    Indonesia Investment Forum
                                    <p>
                                        Indonesia Investment Forum serves as an event which the purpose is to introduce
                                        Indonesia’s development potentials to investors in order to gain support to
                                        Indonesia’s inclusive and sustainable economic growth. This forum functions as a
                                        side event that will be held during the breaks of the IMF-WBG AM 2018 in Nusa
                                        Dua, Bali.
                                    </p>
                                    <p>
                                        At this forum, Investors from across the world are invited to form a gathering
                                        discussing all kinds of investment prospects there are in Indonesia.
                                        Furthermore, it will invite skilled experts/researchers in investment
                                        cooperation. There will be a number of main sessions, e.g. gala dinner, business
                                        network, panel discussion session, and exhibition of development projects in
                                        Indonesia.
                                    </p>
                                    <p>
                                        The benefits of this forum is having the moment to promote investment potentials
                                        of each existing sector in Indonesia to the world in order to support
                                        development growth in Indonesia.
                                    </p>
                                    <p>
                                        The Capital Investment Coordinating Board (BKPM) will be the event coordinator
                                        with the support of the Ministry of Finance and Ministry of State-Owned
                                        Enterprise.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">Competitions to promote Indonesia as the host country of IMF-WBG
                                AM 2018.</h4>
                        </div>
                        <div class="content">
                            <ul class="b-space">
                                <li>
                                    Ethnic Song Choir competition
                                    <p>
                                        Ethnic songs competition for public and student category. The winner of this
                                        competition has the chance to perform at cultural event of the Annual Meeting
                                        2018 in October in Bali.
                                    </p>
                                    <p>
                                        This competition is planned to be coordinated by the Ministry of Tourism
                                        cooperating with the Ministry of Education and Culture.
                                    </p>
                                </li>
                                <li>
                                    National High School Writing Competition on Development
                                    <p>
                                        Writing competition for students upholding the theme of pride for Indonesia’s
                                        diversity and common support for Indonesia’s development.
                                    </p>
                                    <p>
                                        This competition will be coordinated by the Ministry of Finance and Ministry of
                                        Education and Culture.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--end of accordion-->
            </section>
        </div>
    </section>

@stop