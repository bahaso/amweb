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
                'label' => 'About IMF', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        About Annual Meeting
    </h1>
    <div class="content">
        <p>
            Annual Meetings of International Monetary Funds &amp; World Bank Group (IMF-WBG) are regular meetings which have been held since 1946 and are conducted annually in October (during autumn) by Boards of Governors of IMF and WBG. Annual Meetings aim to discuss the global financial and economic progress, as well as current issues, such as: poverty eradication and sustainable economic development. Besides Annual Meetings, there are also regular meetings conducted on every spring. These events are known as Spring Meetings which are held annually in April.
        </p>
        <p>
            In addition to the meetings of the Boards of Governors, the Development Committee (DC) and the International Monetary and Financial Committee (IMFC) are officially convened as parts of the Annual Meetings. DC and IMFC advise the Boards of Governors on issues of global concern, including global economic outlook, poverty eradication, economic development, and aid effectiveness.
        </p>
        <p>
            Around this meetings, IMF and WBG organize a number of fora to facilitate the interaction of governments and IMF-WBG staffs with civil society organizations, journalists, private sector executives, academics and representatives of other international organizations. Every effort is made to ensure that the Annual Meetings provide an effective forum for explaining to public, directly and through media, the activities, challenges, and achievements of both institutions. The meetings also aim to open up the meetings to the public through live-streamed events and online conversations on World Bank Live, Twitter, and other platforms which have been well-prepared to broadcast all over the world.
        </p>
        <p>
            Around 12,000 up to 15,000 people attend the meeting, including about 3,500 delegation members from 189 member countries of IMF-WBG, roughly 1,000 media representatives, and more than 5,000 visitors and special guests, drawn primarily from private business, the banking community, academic institution, local and international press, international NGO, and also observers and parliament members. Staffs of IMF-WBG also participate in the meetings with government delegation officials.
        </p>
        <p>
            There are no less than 1,200 meetings held simultaneously during IMF-WBG Annual Meetings with the largest participants from financial and economic sectors all over the world.
        </p>

        <h3 style="font-weight:600;font-size:25px;">
            History of IMF-WBG Annual Meetings
        </h3>
        <p>
            Traditionally, both Spring Meetings in April and Annual Meetings in October are held in Washington DC, USA where IMF-WBG Headquarters are located, for two consecutive years in order to reflect the international character of the two institutions. Meanwhile, in every third year Annual Meetings are taken place in one of member countries appointed as host country after the process of bidding. Below is the history of Annual Meetings held outside Washington DC. 
        </p>

        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Annual Meetings Outside the United States 1947-2015</h4>
                    </div>
                    <div class="content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th class="l-sep">Year</th>
                                    <th>City</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1947</td>
                                    <td>London</td>
                                    <td>England, The United Kingdom</td>
                                    <td class="l-sep">1982</td>
                                    <td>Toronto, Ontario</td>
                                    <td>Canada</td>
                                </tr>
                                <tr>
                                    <td>1950</td>
                                    <td>Paris</td>
                                    <td>France</td>
                                    <td class="l-sep">1985</td>
                                    <td>Seoul</td>
                                    <td>South Korea</td>
                                </tr>
                                <tr>
                                    <td>1952</td>
                                    <td>Mexico City</td>
                                    <td>Mexico</td>
                                    <td class="l-sep">1988</td>
                                    <td>Berlin</td>
                                    <td>Germany</td>
                                </tr>
                                <tr>
                                    <td>1955</td>
                                    <td>Istanbul</td>
                                    <td>Turkey</td>
                                    <td class="l-sep">1991</td>
                                    <td>Bangkok</td>
                                    <td>Thailand</td>
                                </tr>
                                <tr>
                                    <td>1958</td>
                                    <td>New Delhi</td>
                                    <td>India</td>
                                    <td class="l-sep">1994</td>
                                    <td>Madrid</td>
                                    <td>Spain</td>
                                </tr>
                                <tr>
                                    <td>1961</td>
                                    <td>Vienna</td>
                                    <td>Austria</td>
                                    <td class="l-sep">1997</td>
                                    <td>Hong Kong</td>
                                    <td>People's Republic of China</td>
                                </tr>
                                <tr>
                                    <td>1964</td>
                                    <td>Tokyo</td>
                                    <td>Japan</td>
                                    <td class="l-sep">2000</td>
                                    <td>Prague</td>
                                    <td>Czech Republic</td>
                                </tr>
                                <tr>
                                    <td>1967</td>
                                    <td>Rio de Janeiro</td>
                                    <td>Brazil</td>
                                    <td class="l-sep">2003</td>
                                    <td>Dubai</td>
                                    <td>United Arab Emirates</td>
                                </tr>
                                <tr>
                                    <td>1970</td>
                                    <td>Copenhagen</td>
                                    <td>Denmark</td>
                                    <td class="l-sep">2006</td>
                                    <td>Singapore</td>
                                    <td>Singapore</td>
                                </tr>
                                <tr>
                                    <td>1973</td>
                                    <td>Nairobi</td>
                                    <td>Kenya</td>
                                    <td class="l-sep">2009</td>
                                    <td>Istanbul</td>
                                    <td>Turkey</td>
                                </tr>
                                <tr>
                                    <td>1976</td>
                                    <td>Manila</td>
                                    <td>Phillipines</td>
                                    <td class="l-sep">2012</td>
                                    <td>Tokyo</td>
                                    <td>Japan</td>
                                </tr>
                                <tr>
                                    <td>1979</td>
                                    <td>Belgrade</td>
                                    <td>Republic of Yugoslavia</td>
                                    <td class="l-sep">2015</td>
                                    <td>Lima</td>
                                    <td>Peru</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">Indonesia is Appointed as Host Country of 2018 Annual Meeting</h4>
                    </div>
                    <div class="content">
                        <p class="no-mb">
                            Indonesia has been appointed as host country of 2018 Annual Meetings IMF-WBG through the following stages which have been undertaken since 2014:
                        </p>
                        <ul>
                            <li>Expression of interest and submission of bidding proposal (September 2014).</li>
                            <li>Site evaluation by Meeting Team Secretariat (MTS IMF-WBG) (December 2014).</li>
                            <li>Report of site evaluation which resulted in a shortlist of three countries to be nominated, i.e. Indonesia, Egypt, and Senegal (April 2015).</li>
                            <li>Indonesia was appointed as host country (October 2015).</li>
                            <li>The signing of Agreement for the 2018 Annual Meetings of the Boards of Governors of IMF and WBG on October 10, 2015 which officially marked that Indonesia has been appointed as the host country of the event in Nusa Dua, Bali.</li>
                            <li>Periodical inspection on the preparation of the event by MTS Mission Team (has been and will be conducted on April 2016, January 2017, May 2018, and July 2018).</li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>

    </div>
</section>

@stop