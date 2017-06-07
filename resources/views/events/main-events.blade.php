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
                'label' => 'Main Events', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Main Events
    </h1>
    <div class="content">
        <p class="no-mb">
            Main events are principal activities that will be held on the Annual Meetings of International Monetary Funds & World Bank (IMF-WB AM 2018) during 8 – 14 October 2018 in Nusa Dua, Bali. These activities are as follow:
        </p>
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">Board of Governors Annual Meeting Plenary</h4>
                    </div>
                    <div class="content">
                        <p>
                            The IMF-WB AM 2018 will be inaugurated by the President of Republic of Indonesia, Joko Widodo who will convey the importance of mobilizing mutual forces in overcoming intimidations against global utilization cooperation and improve the economic development for the common good. Opportunities for global economic cooperation are aimed at priority issues.
                        </p>
                        <p>
                            During this annual meeting plenary, Managing Director of IMF and President of World Bank will communicate significant points to be discussed collectively in accordance with mission and responsibilities of both institutions, which is addressing economic challenges and existing global development, including poverty eradication.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Development Committee (DC)</h4>
                    </div>
                    <div class="content">
                        <p>
                            Development Committee serves as an advisory body whose function is to provide directions for World Bank and IMF operational activities. Currently, the Minister of Finance of the Republic of Indonesia, Sri Mulyani Indrawati stands as the first person in history to lead as Chairwoman, running DC meetings with its 25 members, consisting of the governors (ministers of finance/ministers of economy) representing 189 countries of World Bank and IMF.
                        </p>
                        <p>
                            Generally, DC will discuss a number of global development agenda turning into priorities in the future. Several issues that had been discussed, e.g. sustainable economic growth, poverty eradication, economic transformation, financing climate change, natural disaster, migration and refuges, gender equality in economy sector, job opportunities, urbanization, and demographic changes. In this case, DC will adhere to committing to the achievements of Sustainable Development Goals (SDGs).
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">International Monetary and Financial Committee (IMFC)</h4>
                    </div>
                    <div class="content">
                        <p>
                            This restricted meeting will be attended by Minister of Finance or Central Bank Governor representing the elected and invited country to discuss various policy responses related to global economic commitment in achieving growth that is robust, sustainable, inclusive, and balance. Relating to these issues, this meeting in general means to examine all current policy instruments, i.e. structural, fiscal, and monetary reformation – individually and collectively. These policies are implemented to amplify market trust, financial sector stability, and to give opportunities to all countries to be exposed to benefits from globalization and technology.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Meeting of Minister of Finance and G20 Central Bank Governor</h4>
                    </div>
                    <div class="content">
                        <p>
                            On this 2018 annual meeting, a meeting will also be convened for Ministers of Finance and Central Bank Governors from all members of G20 countries and representatives of international organizations. Scope of issues in this meeting is in accordance with G20 chairmanship priority agenda as well as the latest global economic events. On this G20 meeting, the delegation of Indonesia will be chaired by the Minister of Finance of the Republic of Indonesia and the Governor of Bank Indonesia.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Bilateral and Multilateral Meetings</h4>
                    </div>
                    <div class="content">
                        <p>
                            As the IMF-WB AM 2018 will be attended by government representatives of 189 countries, international financial institutions/organization, investors, NGOs, academics, hence it is imperative to perform several strategic bilateral and multilateral meetings. Indonesia has been periodically utilizing this particular meeting to deliberate its issues which were becoming main priorities in its attempt to improve cooperation with other countries and in a number of activity programs with WB and IMF, investors as well as credit rating agencies. One of the results of previous bilateral meetings with credit rating agencies favoring Indonesia today is the improving Indonesia’s credit rating to investment grade awarded by Standard &amp; Poor’s.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Seminars</h4>
                    </div>
                    <div class="content">
                        <p>
                            Seminars on issues over economic development and global development along with its challenges will be included in the IMF-WB AM 2018 organized in different categories from high level seminar to technical seminar which are aimed for public and limited invitations.
                        </p>
                        <p>
                            Key seminars will be organized by IMF and WB as part of the IMF-WB AM 2018. Indonesia as the host country will propose several priority issues as topics in the key seminars. Moreover, Indonesia has the opportunity to hold its own seminar that attunes with the key seminars encompassing the Government of Indonesia policy agendas, such as improved investment, financial inclusive as well as fiscal and monetary policies that promote development in institutional capacity, regional government, and human resources so as to heighten Indonesia’s national economic capacity.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Press Conferences</h4>
                    </div>
                    <div class="content">
                        <p>
                            ...
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Receptions</h4>
                    </div>
                    <div class="content">
                        <p>
                            Host country receptions will be held at GWK Cultural Park where the gigantic statue of Garuda Wisnu stands on the highest place of Southern Bali. Having intended to be one of the tallest and largest modern day sculptures, it is also designed to be one of the world’s biggest and highest monumental statues in the world. The monument consists of two parts.
                        </p>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>
    </div>
</section>

@stop