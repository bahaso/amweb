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
                Main events are principal activities that will be held during the Annual Meetings of International
                Monetary Fund & World Bank Group (IMF-WBG AM 2018) during 8 –14 October 2018 in Nusa Dua, Bali. These
                activities are as follows:
            </p>
            <section class="faq">
                <ul class="accordion accordion-2 one-open">
                    <li class="active">
                        <div class="title">
                            <h4 class="inline-block mb0">Official Meetings</h4>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <h2 class="sub-title">Annual Meetings Plenary</h2>
                                </li>
                            </ul>
                            <p>
                                During the plenary, Managing Director of the IMF and President of the World Bank Group
                                will communicate significant points to be discussed collectively in accordance with
                                mission and responsibilities of both institutions, which is addressing economic
                                challenges and existing global development, including poverty eradication.
                            </p>
                            <p>
                                The Annual Meetings Plenary will be kicked off with an opening address by the President of the Republic of Indonesia, H.E. Joko Widodo.
                            </p>
                            {{--<p>
                                IMF-WBG AM 2018 will be inaugurated by the President of Republic of Indonesia, Joko
                                Widodo who will convey the importance of mobilizing mutual forces in overcoming
                                intimidations against global utilization cooperation and improve the economic
                                development for the common good. Opportunities for global economic cooperation are aimed
                                at priority issues.
                            </p>--}}


                            <ul>
                                <li>
                                    <h2 class="sub-title">Development Committee (DC)</h2>
                                </li>
                            </ul>
                            <p>
                                The Development Committee serves as an advisory body whose function is to provide direction and discuss the operational activities of the IMF-WBG. Currently the Minister of Finance of the Republic of Indonesia, Sri Mulyani Indrawati, stands as the first woman to serve as DC Chair and lead the committee’s meetings of its 25 governors (ministers of finance/ministers of economy) representing the 189 member countries of the IMF-WBG.
                            </p>
                            <p>
                                Generally, the DC will discuss issues related to global economic development such as sustainable economic growth, poverty eradication, economic transformation, climate change, natural disaster relief, migration and refugees, gender equality, employment outlook, urbanization, and population/demographic changes.
                            </p>
                            <ul>
                                <li>
                                    <h2 class="sub-title">International Monetary and Financial Committee (IMFC)</h2>
                                </li>
                            </ul>
                            <p>
                                The IMFC advises and reports to the IMF Board of Governors on the supervision and management of the international monetary and financial system, including on responses to unfolding events that may disrupt the system.  Although the IMFC has no formal decision-making powers, in practice, it has become a key instrument for providing strategic direction to the work and policies of the Fund.
                            </p>
                            <p>
                                The IMFC has 24 members who are central bank governors, ministers, or others of comparable rank and who are usually drawn from the governors of the Fund’s 189 member countries.
                            </p>
                            <p>
                                At the end of the meetings, the Committee issues a communiqué summarizing its views. These communiqués provide guidance for the IMF’s work program during the half year leading up to the next Spring or Annual Meetings.
                            </p>
                        </div>
                    </li>
                    {{--  <li>
                          <div class="title">
                              <h4 class="inline-block mb0">Meeting of Minister of Finance and G20 Central Bank Governor</h4>
                          </div>
                          <div class="content">
                              <p>
                                  On this 2018 annual meeting, a meeting will also be convened for Ministers of Finance and Central Bank Governors from all members of G20 countries and representatives of international organizations. Scope of issues in this meeting is in accordance with G20 chairmanship priority agenda as well as the latest global economic events. On this G20 meeting, the delegation of Indonesia will be chaired by the Minister of Finance of the Republic of Indonesia and the Governor of Bank Indonesia.
                              </p>
                          </div>
                      </li>--}}
                    {{--<li>
                        <div class="title">
                            <h4 class="inline-block mb0">Bilateral and Multilateral Meetings</h4>
                        </div>
                        <div class="content">
                            <p>
                                As the IMF-WB AM 2018 will be attended by government representatives of 189 countries, international financial institutions/organization, investors, NGOs, academics, hence it is imperative to perform several strategic bilateral and multilateral meetings. Indonesia has been periodically utilizing this particular meeting to deliberate its issues which were becoming main priorities in its attempt to improve cooperation with other countries and in a number of activity programs with WB and IMF, investors as well as credit rating agencies. One of the results of previous bilateral meetings with credit rating agencies favoring Indonesia today is the improving Indonesia’s credit rating to investment grade awarded by Standard &amp; Poor’s.
                            </p>
                        </div>
                    </li>--}}

                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">Seminars and Events</h4>
                        </div>
                        <div class="content">
                            <p>
                                Seminars on issues over economic development and global development along with its
                                challenges will be included in the IMF-WBG AM 2018 organized in different categories
                                from high level seminar to technical seminar which are aimed for public and limited
                                invitations.
                            </p>
                            <p>
                                Key seminars will be organized by IMF and WB as part of the IMF-WBG AM 2018. Indonesia
                                as the host country will propose several priority issues as topics in the key seminars.
                                Moreover, Indonesia has the opportunity to hold its own seminar that attunes with the
                                key seminars encompassing the Government of Indonesia policy agendas, such as improved
                                investment, financial inclusive as well as fiscal and monetary policies that promote
                                development in institutional capacity, regional government, and human resources so as to
                                heighten Indonesia’s national economic capacity.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">Press Conference</h4>
                        </div>
                        <div class="content">
                            <p>
                                coming soon
                            </p>
                        </div>
                    </li>
                    {{--<li>
                        <div class="title">
                            <h4 class="inline-block mb0">Receptions</h4>
                        </div>
                        <div class="content">
                            <p>
                                Host country receptions will be held at GWK Cultural Park where the gigantic statue of Garuda Wisnu stands on the highest place of Southern Bali. Having intended to be one of the tallest and largest modern day sculptures, it is also designed to be one of the world’s biggest and highest monumental statues in the world. The monument consists of two parts.
                            </p>
                        </div>
                    </li>--}}
                </ul>
                <!--end of accordion-->
            </section>
        </div>
    </section>

@stop