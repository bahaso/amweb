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
                'label' =>  'Past VTI Events',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <h1 class="title fw600">
            Past Voyage to Indonesia Events
        </h1>
        <div class="content">
            <ul style="margin-left: 15px">
                <li>
                    <h4>Workshop on “Improvement of Regional Efficiency and Transparency in Enhancing Public Service Quality and Attracting Investments in Regional Area”, 21st February 2017 in Yogyakarta
                    </h4>
                    <p>This workshop aimed to lay out a variety of data and information on the latest condition of how regional area implemented its duties and authorities in order to improve regional’s public service quality in the future, especially in developing government and private financing innovations.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Focus Group Discussion (FGD) on “The Rising of a New World Order: Indonesia’s Challenges and Response”, 30th March 2017 in Bandung</h4>
                    <p>This FGD was held in response to global condition in which values and governance upheld by various key countries in the world have shifted, such as the United Kingdom with its Brexit phenomenon and the United States of America with its new policies under the control of President Donald Trump. It has brought some parties to assume that it was the beginning of New World Order. Although it is still debated, but the shift’s significance cannot be denied because of the absorbing counter/narrative movement of the communist countries with its strong belief in economic liberalism which tinkering with economic nationalism rhetoric leading to protectionism.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Roundtable Discussion (RTD): “Indonesia-WB Infrastructure Financing”, 19th April 2017 in Washington DC (WB-IMF Spring Meetings 2017</h4>
                    <p>This activity was held to facilitate and respond to the Government of Indonesia’s ambitious plan related to the country’s infrastructure development. The Minister of Finance of the Republic of Indonesia believes that infrastructure is one way to boost Indonesia’s economic growth by contemplating the possibility of middle income trap, as well as growth target in 2017 amounting to 5.1%. Unfortunately, the plan was conflicted with the government’s budget.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Seminar on “Global Economic Outlook in ASEAN Perspectives”, 28th April 2017 in Jakarta</h4>
                    <p>The half day seminar was conducted by Bank Indonesia as a kickoff event for a series of Voyage to Indonesia.  The panelist, consisting of Professor Maurice Obstfeld (Economic Counsellor and Director of the IMF’s Research Department) and Deputy Governor of ASEAN Central Banks discussed how the reform undertaken by ASEAN countries in post-Asian Financial Crisis have equipped ASEAN countries with pre-emptive and sound policy formulation in the region. Panelist also discussed the recent economic outlook and Central Bank’s effort to safeguard macroeconomic and financial stability in an increasingly uncertain world.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>National Seminar/Ministry of Finance’s Economists Forum: “Sustainable Growth and Shared Prosperity”, 17th-18th May 2017 in Palembang</h4>
                    <p>This national seminar was held by the cooperation between Ministry of Finance and the Regional Economists. The objective of the event was to discuss relevant issues on sustainable growth and shared prosperity. The discussion drew from the perspectives of governmental actors, such as Ministry of Finance, Regional, Academics, Public and International.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Joint IMF-Indonesia High-Level Conference “International Taxation in Asia: Issue and the Way Forward, 12th-13th July in Jakarta</h4>
                    <p>Strengthening tax systems has emerged as a key development priority for the implementation of the 2030 Sustainable Development Goals (SDG). It is recognized that strong tax system is key for enhancing state building; it is not just how much revenue is raised that matters for development and growth, but also how it is raised. The establishment of the ASEAN Economic Community (AEC), along with the expansion of cross-border investment in the ASEAN region, amplifies unwanted side-effects in terms of aggressive tax planning by multinational and regional companies. Simultaneously, the weakness of coordinating efforts by ASEAN tax authorities enables investors to take advantage of that opportunity for tax evasion.</p>
                    <p>The conference will provide a forum to engage policymakers on issues related domestic resource mobilization, including through international tax reforms. The scope and nature of initiatives to address mismatches and loopholes of the current international tax architecture, remaining areas of difficulty, and the challenges of tax competition and coordination will be addressed.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Seminar on ASEAN: 50 Years of Growth, 19th July 2017 in Jakarta</h4>
                    <p>This seminar was held under the collaboration of Bank Indonesia and The Jakarta Post. This event aims to mark the anniversary of ASEAN as a regional integration. This also intended to celebrate the economic achievements and progress that was accomplished amongst ASEAN countries.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Indonesia Infrastructure Finance Forum 2017, 25th July 2017 in Jakarta</h4>
                    <p>The need for infrastructure development in Indonesia is massive, partly due to the archipelagic landscape and the huge population, coupled with its steady economic growth. The government of Indonesia under President Jokowi’s administration has consistently made infrastructure development one of its highest priority. However, the capacity of the government to finance the development of infrastructure through the government budget is limited. </p>
                    <p>The forum aimed to: 1) Demonstrate achievements by the Indonesian government in developing infrastructure finance; 2) Identify the key future challenges on infrastructure finance, and how those challenges may be solved, or even turned into opportunities, taking into account the input from different perspectives of the internal government, development agencies, as well as the private sector; and 3) Explore the opportunities for private sector and multilateral development agencies to take a bigger role in supporting Indonesia’s infrastructure development.</p>
                </li>
            </ul>
        </div>
    </section>
@stop

