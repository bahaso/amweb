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
                'label' => 'Ministry of Finance', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Policy Events of Ministry of Finance in the framework of Voyage to Indonesia
    </h1>
    <div class="content">
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">
                            Workshop of “Improvement of Regional Efficiency and Transparency in Enhancing Public Service Quality and Attracting Investments in Regional Area” held on 21 February 2017 in Yogyakarta.
                        </h4>
                    </div>
                    <div class="content no-list">
                        <p>
                            This workshop was aimed to lay out a variety of data and information on the latest condition of how regional area implemented its duties and authorities in order to improve regional’s public service quality in the future, especially in developing government and private financing innovations. The activities involved several parties, such as Central Government, Regional Government, Academics, NGOs, and SOEs.
                        </p>
                        <p class="no-mb">
                            Several important conclusions and recommendations drawn from the workshop are as follows:
                        </p>
                        <ul>
                            <li><span class="txt-bold">a. Development Strategies.</span> Increasing economic growth should be realized without the fear of 
                            being exposed to Middle Income Trap. This may be achieved through developments in 
                            which contains aspects below:
                                <ul>
                                    <li>-  Accumulation: Promote great public investment to assist in infrastructure accumulation and expertise needed to grow rapidly</li>
                                    <li>
                                        -  Innovation: Encourgae innovation and “imitation” or technology transfer
                                    </li>
                                    <li>
                                        -  Allocation: Refers to relative price between capital and workforce
                                    </li>
                                    <li>
                                        -  Stabilization related to macroeconomics condition
                                    </li>
                                    <li>
                                        -  Inclusive: Promote policies that amplify transparency in economy.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="txt-bold">
                                    b.  Financing Innovation
                                </span>
                                As part of development priority at national and regional level, infrastructure sits at the highest portion as economic growth catalyst. Hence, financing innovation is essential in supporting regional economic growth because of the limitation of the local government.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    c.  Regional Development
                                </span>
                                Regional economic integration through ASEAN Economic Society (MEA) and Free Trade Area (FTA) must receive government’s great attention. Indonesia needs to adopt a more integrated regional development to strengthen national capacity and power in globalization era.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    d.  Public Service. 
                                </span>
                                Economic governance related to society’s roles and government’s capacity improvement must be elevated by increasing the quality of public service and dynamic interaction between public and private institutions in public sector, ensuring an active market for public interest, and building a conducive investment climate for business growth and regional development activities.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    e.  Leadership Characters. 
                                </span>
                                Current affecting factors for progresses of a region fall on fair, creative, and innovative regional leadership.
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Forum Group Discussion (FGD) of “The Rising of a New World Order: Indonesia’s Challenges and Response” held on 30 March 2017 in Bandung.</h4>
                    </div>
                    <div class="content no-list">
                        <p>
                           This FGD was held in response to global condition in which values and governance upheld by various key countries in the world have shifted, such as the United Kingdom with its Brexit phenomenon and the United States of America with its new policies under the control of President Donald Trump. It has brought some parties to assume that it was the beginning of New World Order. Although it is still debated, but the shift’s significance cannot be denied because of the absorbing counter/narrative movement of the commnunist countries with its strong belief in economic liberalism which tinkering with economic nationalism rhetorics leading to protectionism. The involved parties in this FGD are academics, Central Government, International Organization (World Bank Jakarta), and business associations.
                        </p>

                        <p class="no-mb">
                            Several important conclusions and recommendations drawn from the workshop are as follows:
                        </p>
                        <ul>
                            <li>
                                <span class="txt-bold">
                                    a.  Inequality. 
                                </span>
                                Indonesia is facing several challenges, among which are poverty, inequality, and gaps between regions, which has been shown by Eastern Indonesia where level of growth and poverty rate are higher than the Western part of Indonesia. Based on the State Budget, a more credible and realistic budget composition might work as a stimulus to inclusive economic growth. Therefore, fiscal reform must be maintained especially in revenue, expenditure, and financing.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    b.  Global Power. 
                                </span>
                                Matters that are currently beyond the control of the government because of the global power are: migration of the educated and wealthy, media, political ideas, capital market and currency, as well as trade regulations. Revenue of multinational companies that exceed the country, tax evasion in significant amount by the companies in several countries show the country’s lack of control.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    c.  Globalization. 
                                </span>
                                The raising global connectivity must be utilized well to increase economy and welfare. Indonesia has the opportunity by improving trade through market expansion with either established partners or new business partners, acquiring more capital through cooperations with various parties including investors, creating employment and competition in the global world, as well as getting more information in a rapid motion.
                            </li>
                            <li>
                                d.  Economic Diplomacy. Strengthening in economic diplomacy is needed particularly for multitrack diplomacy for trade issues and multilateral forum diplomacy for other non-trade issues through multilateral forum, among which to reinforce Indonesia’s position in multilateral fora (e.g. G20 forum), support a more conducive global condition, and endorse a further effective collective cooperation to gain certainty.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    e.  International Trade. 
                                </span>
                                Aside from maintaining exchange rate stability, Indonesia should encourage international trade by implementing bilateral and ‘multitrack’ path to improve export.  Regional, subregional, bilateral forum, and ASEAN +3 are currently the effective multitrack forum that should be applied.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    f.  Business Sector. 
                                </span>
                                A proposal was made to develop small medium enterprises, creative economy and e-commerce, structural and institutional reform, including protection of intellectual property rights so that the economy can still be maintained amidst the global politic and economic uncertainty.
                            </li>
                            <li>
                                <span class="txt-bold">
                                   g.   Fiscal Policy. 
                                </span>
                                Normatively, State Budget should be credible, realistic and capable to functioning as a stimulus to economic growth. Consequently, the government needs to perform fiscal reform in managing the State Budget. Furthermore, the government needs to develop an estimated revenue that is accurate, credible, and realistic while in a more productive expenditure, such as budget allocation to education, infrastructure, health, and energy subsidy sector, it needs to be elevated. As for financing, the government needs to conduct a prudent financing management by keeping a relatively low deficit and debt.
                            </li>
                            <li>
                                <span class="txt-bold">
                                    h.  Workforce. 
                                </span>
                                Recommended policy to utilize global changes in eradicating poverty and inequality is through the establishment of workforce equipped with skilled individuals. Indonesia’s workforce should possess skills that are relevant to the world’s trend. This could be realized by providing a sophisticated work-related training and compatible with applicants’ requirement, educational curriculum and training emphasizing on IT literacy and training access for the underdeveloped society.
                            </li>
                            <li>
                                <span class="txt-bold">
                                   i.   Competitiveness. 
                                </span>
                                Regulations are required to support Indonesia’s competitiveness. Improvement in competitiveness can be realized by revitalizing manufacture and infrastructure development sector as well as regulations that support the ease in trade and investment. Manufacture sector revitalization is feasible through suppression of inflation rate so that it will be much lower than the business partners, and identification and support of sectors owning high potential growth. Ease in trade and investment are possible by supporting the rising of new business and entrepreneurship, simplifying the process of starting and managing new business as well as encouraging the birth of innovation in business variety.
                            </li>
                            <li>
                                <span class="txt-bold">
                                   j.   Public Service. 
                                </span>
                                Government also needs to increase public service, particularly in business sector through technology utilization. This can be realized by providing widest access for the public, specifically the underdeveloped society to information technology by building an infrastructure so that internet penetration and communication flow are extensively accessible. Also, government could integrate data and service management in e-government as well as increase active participation from the public in monitoring public service.
                            </li>
                            <li>
                                <span class="txt-bold">
                                   k.   Service Industry Strategies. 
                                </span>
                                 Indonesia needs to deliver proper strategies to increase the quality of service industry and its competitiveness to which is vital in amplifying HR quality in Indonesia. Liberalization and reform in service industry should also be carried out as one case study proves if it is implemented soundly, it will increase economic growth in overall. The accurate strategic policy formulation is useful for reform measures in service industry so that Indonesia could benefit profusely in globalization era.
                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Rountable Discussion (RTD): Indonesia-WB Infrastructure Financing, which was held on 19 April 2017 in Washington DC (WB-IMF Spring Meetings 2017)</h4>
                    </div>
                    <div class="content">
                        <p>
                            This activity was held to facilitate and respond to the Government of Indonesia’s ambitious plan related to the country’s infrastructure development. The Minister of Finance of the Republic of Indonesia believes that infrastructure is one way to boost Indonesia’s economic growth by contemplating the possibility of middle income trap, as well as growth target in 2017 amounting to 5.1%. Unfortunately, the plan was conflicted with the Government’s budget.
                        </p>
                        <p>
                            Through this RTD, the Government of Indonesia attempted to use the opportunity to: (i) show investors, especially World Bank as one of Indonesia’s key development partners, of its implementation plan leading to sustainable infrastructure financing, (ii) describe Indonesia’s guarantee program for infrastructure financing, and (iii) seek opportunities for guarantee cooperation by World Bank Group in PPP and non-PPP projects in Indonesia.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">National Seminar/Ministry of Finance’s Economists Forum: Sustainable Growth and Shared Prosperity held on 17-18 May 2017 in Palembang</h4>
                    </div>
                    <div class="content no-list">
                        <p>
                            The implemented national seminar was due to the cooperation of Economists of the Ministry of Finance of which discussing relevant issues on sustainable growth and shared prosperity. The discussion drew on the perspectives of Central Government, i.e. Ministry of Finance, regional, academics/public and international.
                        </p>
                        <p class="no-mb">
                            Conclusions and recommendations drawn from the seminar for stakeholders, especially Government are as follows:
                        </p>
                        <ul>
                            <li>
                                a.  Indonesia’s response against current economy in global, regional, and domestic level in order to achieve the purpose as a nation and as a state, one of which is to create a sustainable growth and shared prosperity.
                            </li>
                            <li>
                                b.  Regional readiness in facing a dynamic economic challenges such happened in South Sumatera.
                            </li>
                            <li>
                                c.  Opinions and inputs from academics and public related to compulsory policies in achieving a sustainable growth and shared prosperity. The effective use of the government’s budget allocation for subsidy and social prosperity to reduce inequality in layers of society.
                            </li>
                            <li>
                                d.  Indonesia’s sustainable growth and shared prosperity issues seen from the international institutions point of view and recommendations provided to reach the purpose.
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            MoF-IMF Joint Event on International Tax Seminar held on 12 – 13 July 2017 in Jakarta
                        </h4>
                    </div>
                    <div class="content">
                        <p>
                            Strengthening the tax system has arisen as the main development priority for the implementation of the 2030 Sustainable Development Goals (SDG). A strong tax system is key in improving the development of a country; not only how high the income increase but how to increase income. International tax reform is an integral part of domestic tax system development. The establishment of the ASEAN Economic Community (AEC), along with the expansion of cross-border investment in the ASEAN region, amplifies unwanted side-effects in terms of aggressive tax planning by multinational and regional companies. Simultaneously, the weakness of coordinating efforts by ASEAN tax authorities enables investors to take advantage of that opportunity for tax evasion.
                        </p>
                        <p>
                            The organization of this meeting is expected to obtain inputs and recommendations for high-level policy makers in the ASEAN region relevant to the aforementioned tax issues.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            National Seminar: Creating Fiscal Space for Investment and Growth held on 21 – 22 August 2017 in Balikpapan
                        </h4>
                    </div>
                    <div class="content">
                        <p>
                            In performing State Budget (APBN) formulation, the Government carries out three main fiscal policy functions, which are the allocation function, distribution function, and stabilization function. In performing those function, the government-formulated State Budget must reflect a sound and sustainable budget.
                        </p>
                        <p>
                            Three indicators of a sound and sustainable budget are: controlled deficit towards balanced or surplus, positively maintained primary balance, and a debt ratio which tends to decrease. In realizing a surplus budget, sources of national income, whether from tax or non-tax state revenue, must continue to be optimized in order to expand fiscal capacity.
                        </p>
                        <p>
                            State revenue optimization policy is implemented to provide financing certainty for the execution of programs and activities formulated in the state budget. Meanwhile, from the state budget aspect, every expenditure is targeted for the achievement of the national objective, which is the improvement of public welfare.
                        </p>
                        <p>
                            This theme was selected because the Indonesian Government currently needs a large budget to accelerate infrastructure development which will hasten development performance and economic growth. To respond to that need, this Creating fiscal space for investment and growth theme will be discussed in a National Seminar. This seminar is expected to provide inputs and recommendations relevant to efforts to create necessary fiscal space.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            2017 IMF-WB Annual Meetings Seminar held on 13 – 15 October 2017 in Washington DC (IMF-WB Annual Meeting 2017)
                        </h4>
                    </div>
                    <div class="content no-list">
                        <ul>
                            <li>
                                <span class="txt-bold txt-italic">a)  How to Reduce Inequality Without Compromising Economic Growth</span>
                                <p>
                                    For the last two decades, the world has made impressive strides in reducing global poverty and lessening inter-country economic gap. However, inequality all over the world is still relatively high. High equality level may cause a threat to long-term growth by obstructing social cohesion and people’s capability to invest with their skills and assets.
                                </p>
                                <p>
                                    Conditions in the last 25 years show that inequality can be overcome and countries are able to make policies to fight inequality and improve the lives of the poorest. However, without significant gap decrease, especially in countries where poverty level and inequality is high, the global objective to end extreme poverty in 2030 will be difficult to achieve.
                                </p>
                                <p>
                                    Therefore, to overcome this inequality there needs to be the right combination between good policies, good governance, and good institution. This is necessary to eliminate obstructions, such as untargeted and wasteful energy subsidy, inefficient public expenditure, or bad service.
                                </p>
                                <p>
                                    On the other hand, infrastructure quality must also be increased. Infrastructure can overcome inequality through connectivity. In this case, multilateral development bank support, including the World Bank is expected to offer assistance and classic program to promote growth and the creation of inclusive jobs.
                                </p>
                                <p>
                                    Furthermore, the most important issue in handling inequality is good leadership. Overcoming inequality will obligate leaders willing to challenge the status quo and tackling the general challenges of limited capacity, corruption, and lack of accountability. Leaders must also prepare themselves to make necessary but occasionally unpopular decisions that may take time to exhibit their effectiveness.
                                </p>
                                <p>
                                    Inequality is a problem faced by all countries. Therefore, the organization of this seminar is expected to result in policy recommendations that significantly help in supporting the decreasing of inequality level, especially the inequality level in Indonesia.
                                </p>
                            </li>
                            <li>
                                <span class="txt-bold txt-italic">
                                    b)  Urbanization, Environment and Sustainable Development 
                                </span>
                                <p>
                                    More than half the population of the world lives in urban areas and this proportion is estimated to increase to 66 percent in 2050. Globally, there is no country developing and achieving high income status without urbanization. Experience shows that if well-managed, urban areas will increase efficiency and productivity; encourage innovations and the rise of new ideas; give job opportunities and middle-class growth; as well as saving energy, land, and other resources. Efficient, inclusive, and sustainable urbanization will achieve the objectives of eliminating poverty and achieving mutual welfare in accelerating urbanization in developing countries.
                                </p>
                                <p>
                                    This seminar is expected to result in ideas and recommendations relevant to urbanization practice management, in order for occurring urbanization practices to not give negative impacts to an urban area but positive impacts from economic and social aspects.
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            International/Regional Seminar held on 6 – 7 December in Makassar
                        </h4>
                    </div>
                    <div class="content no-list">
                    <ul>
                        <li>
                            <span class="txt-bold txt-italic">a) Developing Tourism Destination</span>
                            <p>
                                Tourism is growing and developing faster than global economy. After reaching 1 billion international tourists in 2012, the global industry expects 1.8 billion tourists in 2030. The fastest tourism development is in developing countries – particularly in Africa, Middle East, and countries in the East and South of Asia where natural and cultural resources are the attractions and strong driving forces of economic growth through the travel business. In 2015, for the first time, the majority of tourists (approximately 550 million tourists) travelled to developing countries instead of developed countries. Tourism has the potential as one of the methods to significantly reduce poverty in a country. In 2013, tourists spent $413 billion in developing countries, triple the level of development assistance in that year.
                            </p>
                            <p>
                                This places tourism in the five highest export income category for 83% of developing countries. Labor intensive Travel & Tourism produce various beginner-level skilled and inclusive jobs for women and youths. Tourism also produces significant demand for local goods and services. Every dollar spent on the tourism sector, on average will generate $3.2 in the GDP.
                            </p>
                            <p>
                                This international seminar is expected to produce recommendations and inputs for officials relevant to the utilization of the tourism sector development as a potential sector in reducing poverty level whether in a country or a region.
                            </p>
                        </li>
                        <li>
                            <span class="txt-bold txt-italic">
                                b)  Fisheries and Productive Marine Ecosystem 
                            </span>
                            <p>
                                Seafood is the highest traded animal protein. With a projected global population growth of 2 billion (reaching 9.6 billion) in 2050, fish is a crucial element in ensuring food availability for everyone. The fisheries sector is also a resource. This sector provides jobs for the tens of millions and supports the livelihood of hundreds of millions of people. The marine ecosystem in South East Asia, particularly, is a source of income for more than 200 million people.
                            </p>
                            <p>
                                With Indo-Pacific waters having the most biologically diverse and productive marine ecosystem on Earth, commercial fisheries industry in South East Asia is one of the biggest and most active seafood suppliers in the world, exporting daily to the United States of America, European Union, China, Japan, Korea, and Russia.
                            </p>
                            <p>
                                Currently the fisheries industry is facing a big challenge with the increasing demand for seafood. Unfortunately, this condition is faced with the decrease of productivity and critical marine ecosystem health. This occurs due to damaging practices such as unreported and unregulated illegal fishing to dangerous fishing practices, as well as wastefulness and bad governance. To overcome this challenge, countries need to show strong and sustainable political willingness as well as encourage strategic partnership and completely involve civil societies and the private sector.
                            </p>
                            <p>
                                Therefore, this international seminar is expected to produce recommendations and inputs for stakeholders on a national, regional, and international level relevant to alternatives to overcome negative practices in the fisheries sector. Furthermore, it is expected to produce recommendations relevant to sustainable development of the fisheries sector as one of the main and important sectors to guarantee the realization of food security.
                            </p>
                        </li>
                    </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            ASEAN High Level Conference held on 27 – 28 February 2018 in Jakarta
                        </h4>
                    </div>
                    <div class="content">
                        <p>
                            This meeting is a minister-level meeting in the ASEAN region level. Through this meeting, Indonesia/ASEAN is expected to be able to promote the success of Indonesian/ASEAN economic policies as lesson learned for other countries, particularly countries with similar economic scale and conditions as Indonesia and other ASEAN countries. Important issues to be discussed throughout the meeting, among which, are (i) Fiscal Policy-Tax Amnesty, (ii) Macro Prudential, and (iii) Policy Reform.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            National Seminar held on 10 – 11 March 2018 in Bangka Belitung
                        </h4>
                    </div>
                    <div class="content no-list">
                        <p class="no-mb">
                            Following up the international seminar with similar theme held on 6 – 7 December 2017 in Makassar, a seminar with the same theme will be held on a national scale.
                        </p>
                        <ul>
                            <li>
                                <span class="txt-bold txt-italic">
                                    a)  Developing Tourism Destination 
                                </span>
                                <p>
                                    Tourism potential possessed by Indonesia is tremendous and expected to be one of the driving forces of the economy in the future. The Sustainable Tourism Charter (1995) mentioned that tourism development must be based on long-term sustainability criteria (sustainable tourism) as well as economically appropriate, ethically and socially fair to the community.
                                </p>
                                <p>
                                    The principle of sustainable resources utilization is that activities must avoid the excessive use of irreversible resources. This is also supported by regional involvement in the planning, development, and implementation stages in order to realize fair profit sharing. In their implementation, tourism activities must guarantee that natural and manmade resources can be managed by using international criteria and standards.
                                </p>
                                <p>
                                    Activity conducted relevant to the theme is the International seminar on Developing Sustainable Tourism. Aside from that, there will be conducted a dissemination in national newspapers composed by FEKK (Ministry of Finance Economists Forum) members. Results of the international seminar will be disseminated in the form of proceedings.
                                </p>
                                <p>
                                    This theme was selected because tourism development is a government priority by focusing on 10 tourism destinations or National Priority Strategic Areas (KSPN). To support government priority, there needs to be a fiscal framework directed to support sustainable tourism development.
                                </p>
                            </li>
                            <li>
                                <span class="txt-bold txt-italic">
                                    b)  Fisheries and Productive Marine Ecosystem 
                                </span>
                                <p>
                                    Indonesia is the second biggest wild-caught fish producer in the world, 60% of which coming from small scale fishermen. Indonesia places third in the world for tuna production and is one of the five leading aquaculture producer countries in the world. The average annual fish consumption per capita (including aquaculture) contributes 72% of the animal protein consumed nationwide. However, most of the fisheries in 7 of the 11 fisheries management areas in Indonesia is completely exploited. Fast expansion of fishing armadas causes the decline of fisheries industry per unit productivity. Coastal fisheries and the coral reefs are the ones most negatively impacted.
                                </p>
                                <p>
                                    In line with Indonesian government ambition in accelerating investment growth and infrastructure development, in the next five year period this creates a window of opportunity for the World Bank and its partners to be the partner of Indonesian development to support government investment in developing sustainable fisheries sector. This may assist Indonesia in realizing the vision of being a Global Maritime Nation which reflects welfare, inclusiveness, and sustainability in all sectors.
                                </p>
                                <p>
                                    This national seminar is expected to gather the latest data, information, and conditions relevant to the fisheries sector in Indonesia in order to produce policy recommendations to create and develop sustainable fisheries industry.
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            2018 IMF-WB Spring Meetings Seminar held on 13 – 15 April 2018 in Washington DC (IMF-WB Spring Meetings 2018)
                        </h4>
                    </div>
                    <div class="content no-list">
                    <ul>
                        <li>
                            <span class="txt-bold txt-italic">
                                a)  Domestic Resource Mobilization, Regional and Global Initiatives of Tax Issues
                            </span>
                            <p>
                                The Minister of National Development Planning, Bambang Brodjonegoro, conveyed that the government will continue to encourage national strategic projects financing without State Budget. So far, infrastructure project pipeline (master plan) to the value of Rp 570 trillion is available. This Rp 570 trillion infrastructure project consists of toll road project, port hub project, and oil refinery project with the individual budget estimation of Rp 300 trillion for toll road, Rp 70 trillion for port hub, and Rp 200 trillion for oil refinery.
                            </p>
                            <p>
                                This large budget amount is necessary for the acceleration of infrastructure development. Therefore, it is expected to be financing source from the private sector without having to utilize State Budget funds, such as multilateral organization, multilateral development bank, and others.
                            </p>
                            <p>
                                Furthermore, there are also several infrastructure project financing schemes, such as the Public Private Partnership (KPBU) and Non-State Budget Infrastucture Funding (PINA). For the KPBU scheme, investors can obtain guarantee from the government, meanwhile for PINA the nature is 100 percent pure private financing. This non-state budget funding is more towards shares investment, where the funding orientation used is equity financing.
                            </p>
                            <p>
                                Aside from PT SMI (Sarana Multi Infrastruktur) as the manager of long-term funds for infrastructure, other parties are expected as managers of pension funds and life insurance to play a part in non-State Budget funding source.
                            </p>
                            <p>
                                This Domestic Resource Mobilization, Regional and Global Initiatives of Tax Issues will be discussed in the international seminar activity. This seminar is expected to produce recommendations on improvement efforts of long-term funding sources from the private sector.
                            </p>
                        </li>
                        <li>
                            <span class="txt-bold txt-italic">
                                b)  Tax Policy Reform
                            </span>  
                            <p>
                                Until 2015, Taxpayers (WP) listed on the Directorate General of Taxes administration system reached 30,044,103 WP, consisting of 2,472,632 Statutory Bodies WP, 5,239,385 Non Employee Individual (OP) WP, and 22,332,086 Employee OP WP. This has not reflected ideal conditions, because according to Indonesia Statistics (BPS) data, the number of working Indonesian residents until 2013 reached 93.72 million people. This means only about 29.4% of the total amount of Employee Individual with an income in Indonesia registered or is listed as WP.
                            </p>
                            <p>
                                This condition is almost similar to Statutory Bodies WP, where according to BPS data, until 2013 the number of operating industries far exceeds listed Statutory Bodies WP, which are 23,941 Medium Industry enterprises, 531,351 Small Industry enterprises, and 2,887,015 Micro Industry enterprises.
                            </p>
                            <p>
                                This means not all companies are listed as Statutory Bodies WP. Reflecting on the low compliance level resulting in the aforementioned low tax income achievement, it is appropriate for tax reform to be performed in Indonesia.
                            </p>
                            <p class="no-mb">
                                Tax reform can be performed in several ways (Arifin G. 2016), among which:
                            </p>
                            <ul>
                                <li>a. tax reform through Taxation Law </li>
                                <li>
                                    b. tax administration reform through regulation of Law implementation 
                                </li>
                                <li>
                                    c. improvement of tax collecting Agency/Institution organizational structure 
                                </li>
                                <li>
                                    d. strengthening tax database 
                                </li>
                                <li>
                                    e. improvement of service for WP or Taxpayers
                                </li>
                            </ul>
                            <p>
                                Tax policy reform is highly needed at this moment and is one of the strategic initiatives of the Ministry of Finance. This situation is the basis for the proposal of the tax reform theme to be discussed in the international seminar. One of the agendas of this seminar is disseminating study results of Tax Architecture as the cross-center study at the Fiscal Policy Agency.
                            </p>
                            <p>
                                This international seminar will also invite observers and researchers with studies in the fiscal policy reform field. Results of this seminar are expected to provide policy recommendations for better tax reform.
                            </p>
                        </li>
                    </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            Voyage to Indonesia Dissemination and Plenary
                        </h4>
                    </div>
                    <div class="content">
                        <p>
                            Voyage to Indonesia Dissemination and Plenary is the pinnacle of the Voyage to Indonesia activity series conducted since 2017. In this opportunity, grand discussion and dissemination will take place relevant to policy recommendations produced throughout the Voyage to Indonesia program implementation. The meeting will be held twice at different times and locations, which are 15 – 16 May 2018 in Bali and 10 – 11 July 2018 in Jakarta
                        </p>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>
    </div>
</section>

@stop