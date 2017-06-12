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
                'label' => 'Program VTI', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Voyage to Indonesia Program
    </h1>
    <div class="content">
        <p>
            Voyage to Indonesia consists of programs featuring policy events, promotions, and publications leading to the Annual Meeting 2018. The word ‘Voyage’ is used to project the idea of a journey towards a new region/discovery, and appropriate in describing a different Indonesia embedded with a key message – “To Know Indonesia Better: Indonesia is a reformed, resilient, progressive, and pro-job country in its attempts to achieve sustainable and inclusive growth.”
        </p>
        <p>
            Activities of Voyage to Indonesia kicked off in 2016 and will culminate at the IMF-WB AM 2018 carrying the expectation of heightening the world’s awareness and focus to Indonesia and Asia, in particular South East Asian as a dynamic and positively-contributive economic group to the global economy dynamics. Success stories and learnings of Indonesia (and Asia) in performing a reformation resulting in the country’s established forces and economic power might be inspirative not only to emerging countries, but also to developed countries which currently in need of structural reformation in order to promote a sustainable economic rehabilitation post 2009 global financial crisis.
        </p>
        <p>
            The key message will be embedded into four theme corridors relating to: 1) Development Issue; 2) Economy and Finance; 3) Indonesia Diversity; and 4) Indonesia Potential by considering its relevance to levels of the latest global and national issues. These four theme corridors will be interpreted through activities conducted by each technical ministry/institution and the Bank of Indonesia. As for these two theme corridors, i.e. development issue; and economy and finance, it will be highlighted in several policy events programs.
        </p>
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">
                            1. Development Issue
                        </h4>
                    </div>
                    <div class="content">
                        <p>
                            This policy event will highlight development issues in the form of national/regional/international FGD, seminar/workshop:
                        </p>
                        <ul>
                            <li>Fighting Inequality (Ministry of Finance)</li>
                            <li>
                                Urbanization (Ministry of Finance, National Development Planning Agency (Bappenas), Ministry of Public Works and Housing)
                            </li>
                            <li>
                                Stunting (Ministry of Health)
                            </li>
                            <li>Human Capital, Investing in Education (Ministry of Education and Culture, Indonesia Endowment Fund for Education (LPDP), Ministry of Religious Affairs, Nahdlatul Ulama, Muhammadiyah)</li>
                            <li>
                                Health: Delivering Affordable Service (National Healthcare Security Agency, Ministry of Health)
                            </li>
                            <li>
                                Social Protection (National Healthcare Security Agency, Ministry of Social Affairs)
                            </li>
                            <li>
                                Food Security or Food Sovereignty (National Development Planning Agency, Ministry of Defence, Coordinating Ministry for Economic Affairs)
                            </li>
                            <li>
                                Gender (Women Empowerment) (Coordinating Ministry for Human Development and Cultural Affairs, Ministry of Women’s Empowerment and Child Protection, Bank of Indonesia)
                            </li>
                            <li>
                                Toward e-Government (Ministry of Trade, National Public Procurement Agency, Ministry of Communication and Informatics)
                            </li>
                            <li>
                                Governance and the Rule of Law (National Development Planning Agency, Ministry of Legal and Human Rights, Supreme Court of Indonesia)
                            </li>
                            <li>
                                Land Administration for Social Equity, Economic Growth, and Environmental Protection (Coordinating Ministry for Economic Affairs, Ministry of Agricultural and Spatial Planning, Ministry of Environment and Forestry, National Development Planning Agency, Ministry of Public Works and Housing)
                            </li>
                            <li>
                                Climate Change (Ministry of Environment and Forestry, Ministry of Finance, Ministry of Energy and Mineral Resources)
                            </li>
                            <li>
                                Restoring Forest (Ministry of Environment and Forestry, Peatland Restoration Agency)
                            </li>
                            <li>
                                Natural Disaster Management (National Board for Disaster Management)
                            </li>
                            <li>
                                Fisheries and Productive Marine Ecosystem (Coordinating Ministry for Maritime Affairs, Ministry of Maritime Affairs and Fisheries, Ministry of Affairs)
                            </li>
                            <li>
                                Developing Tourism Destination (Ministry of Tourism, Coordinating Ministry for Maritime Affairs, Ministry of Finance)
                            </li>
                            <li>
                                Multilateralism and International Organization (Ministry of Foreign Affairs, Bank of Indonesia, National Development Planning Agency, Ministry of Finance)
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">2. Economy and Finance Issue</h4>
                    </div>
                    <div class="content">
                        <p>
                            This policy event will highlight economy and finance issues in the form of national/regional/international FGD, seminar/workshop:
                        </p>
                        <ul>
                            <li>
                                Boosting Growth (Bank of Indonesia, Ministry of Finance)
                            </li>
                            <li>
                                Domestic Resource Mobilization (Ministry of Finance, National Development Planning Agency) 
                            </li>
                            <li>
                                Digital Economy (Bank of Indonesia, Financial Services Authority, Ministry of Communication and Informatics)
                            </li>
                            <li>
                                Financial Inclusion/Literacy (Bank of Indonesia, Financial Services Authority, Ministry of Finance)
                            </li>
                            <li>
                                Anti Money Laundering/Combating Financing Terrorism (Indonesian Financial Transaction Report and Analysis Center (INTRAC), Ministry of Finance, Coordinating Ministry for Political, Legal, and Security Affairs, Financial Services Authority, Bank of Indonesia, Ministry of Foreign Affairs)
                            </li>
                            <li>
                                State-Owned Enterprise/Contribution to the Economy (Ministry of State-Owned Enterprise
                            </li>
                            <li>
                                Competition Policy (10 Years Reflection of Competition Law in Indonesia) (Commission for the Supervision of Business Competition, Capital Investment Coordinating Board, National Development Planning Agency, Coordinating Ministry for Economic Affairs)
                            </li>
                            <li>
                                Tax Policy and Administration (Ministry of Finance)
                            </li>
                            <li>
                                Decentralization and Municipal Government (Ministry of Finance, National Development Planning Agency, Ministry of Trade)
                            </li>
                            <li>
                                Managing a Debt, a Deficit Rule (Bank of Indonesia, Ministry of Finance)
                            </li>
                            <li>
                                Between 1998 Asian Financial Crisis and 2008 Global Financial Crises, Indonesian Perspective (Ministry of Finance, Bank of Indonesia, Deposit Insurance Agency, Financial Services Authority)
                            </li>
                            <li>
                                Regional Integration (Ministry of Finance, Bank of Indonesia)
                            </li>
                            <li>
                                Global Trade and Capital Flow (Bank of Indonesia, Ministry of Indonesia)
                            </li>
                            <li>
                                Financial Market Deepening (Bank of Indonesia, Ministry of Finance, Financial Services Authority)
                            </li>
                            <li>
                                Policy Mix (Bank of Indonesia, Ministry of Indonesia, Coordinating Ministry for Economic Affairs)
                            </li>
                            <li>
                                SMEs and Financing (Bank of Indonesia, Ministry of Finance, Ministry of Cooperatives and SMEs)
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">3. Indonesian Diversity</h4>
                    </div>
                    <div class="content">
                        <p class="no-mb">
                            This program to be conducted during the IMF-WB AM 2018 on 8-14 October 2018 with activities as follows:
                        </p>
                        <ul>
                            <li>
                                Batik Exhibition
                            </li>
                            <li>
                                Art Exhibition (Painting, Sculpture, Photo, etc.)
                            </li>
                            <li>
                                Furniture Exhibition
                            </li>
                            <li>
                                Etnic Song Choir Competition 
                            </li>
                            <li>
                                Food and Beverage Festivities, The Indonesia Heritage
                            </li>
                            <li>
                                National High School Writing Competition on Development
                            </li>
                            <li>
                                Traditional Ethnic Music Festival (Sasando, Gamelan, Gondang Batak, etc.)
                            </li>
                            <li>
                                Tourism Promotion: 5 Tourist Destination Package (Ministry of Tourism)
                            </li>
                            <li>
                                Agriculture Product Exhibition
                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">4. Indonesian Potential</h4>
                    </div>
                    <div class="content">
                        <p class="no-mb">
                            This program to be conducted during the policy events to fill in Indonesia’s promotion of priority programs consisting of these activities:
                        </p>
                        <ul>
                            <li>
                                Trade Promotion (Ministry of Trade)
                            </li>
                            <li>
                                Investment Promotion (Capital Investment Coordinating Board)
                            </li>
                            <li>
                                Sharia Economy and Finance (Bank of Indonesia, Financial Services Authority, Bank of SOEs)
                            </li>
                            <li>
                                Indonesia Infrastructure Promotion/PPPs (Ministry of Public Works and Housing, Coordinating Ministry for Economic Affairs, Ministry of Finance)
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>

        <p>
            Based on the several policy events above, the Ministry of Finance, under the coordination of IMF-WB AM 2018 Preparation Task Force, has organized a number of policy events 
            nationally and prepared several of activities to be conducted in nationals, regionals, and internationals up to 2018. 
            Details of these policy events are accessible through this link. 
            <a href="{{ route('f.events.ministry') }}">Ministry of Finance</a>
        </p>

        <p>
            Furthermore, Bank of Indonesia also carried out several policy events in conjunction with Voyage to Indonesia (VTI) highlighting two theme corridors – Economy and Finance; and Indonesia Potential – as a complement to the activities conducted by Ministry of Finance and other ministries/institutions. On changes of Indonesia, the policy events are divided into four subthemes: Reformed and Resilient Economy, Digitalized Economy, Towards a Modern & Inclusive Sharia Economy & Finance, as well as Women Empowerment. Direct communication was also conducted to local stakeholders (outreach) to convey the implementation of 
            Annual Meeting 2018. Details of these policy events are accessible through this link.
            <a href="{{ route('f.events.bank') }}">Bank Indonesia</a>
        </p>
    </div>
</section>
@stop

