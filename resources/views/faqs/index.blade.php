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
                'label' => 'FAQ',
            ]
        ],
        'no_label' => true

    ])
@stop


@section( 'rhs_content' )

    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4 class="mb16">Frequently Asked Questions (FAQ)</h4>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <ul class="accordion accordion-2">
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What are the IMF-WBG Annual Meetings?</h4>
                        </div>
                        <div class="content">
                            <p>
                                The Annual Meetings bring together Central Bank and Ministry of Finance governors from the 189 member countries of the IMF-WBG along with prominent persons from private sector, academia, civil society organizations, and media to discuss developments in the global economy and finance. For two consecutive years, the Meetings take place in Washington, DC, USA, and in the third year, they are hosted by a member country.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">When and where will the 2018 Annual Meetings take place?</h4>
                        </div>
                        <div class="content">
                            <p>
                                Annual Meetings events will take place between 8-14 of October in Nusa Dua, Bali, Indonesia.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">How many meetings will be held during the IMF-WBG Annual Meetings?</h4>
                        </div>
                        <div class="content">
                            <p>
                                There will be approximately 2,000 meetings convened during the week of the Annual Meetings. As part of the main agenda, there will be a Plenary Session, the International Monetary and Financial Committee (IMFC) Meeting, and the Development Committee (DC) Meeting. In addition, the IMF and the WBG will also help organize and host a number of related meetings of groups of country delegations such as the G-20, G-24, Commonwealth, BRICS, as well as the Program of Seminars, regional briefings, press conferences, and other events.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">How many participants attend the Annual Meetings?</h4>
                        </div>
                        <div class="content">
                            <p>
                                In total, the estimated number of participants is 15.000, consisting of official delegates, observers, IMF-WBG staff, Civil Society Organizations (CSOs), academics, media, guests, and other participant categories.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">How was Indonesia selected as host country of the Annual Meetings?</h4>
                        </div>
                        <div class="content">
                            <p>
                                In September 2014, Indonesia expressed interest and submitted a proposal as part of the selection process. The IMF-WBG carried out site inspections of candidate countries in December 2014 and Indonesia was selected by shareholders as 2018 host country after an official announcement during the 2015 Annual Meetings in Lima, Peru.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What are the benefits to Indonesia as host country of the Annual Meetings?</h4>
                        </div>
                        <div class="content">
                            <p>
                                Hosting this event is an investment that will result in a boost to the local economy and several industries such as convention and meetings support services, transportation, hotels and accommodations, restaurants, retail, entertainment, tourism, and cultural points of interest.
                                Lasting economic benefits result from Indonesia being showcased internationally as a destination for culture, tourism, and trade and investment opportunities.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What is the Voyage to Indonesia?</h4>
                        </div>
                        <div class="content">
                            <p class="mb0">
                                The Voyage to Indonesia is a series of pre-events prior to the Annual Meetings. It is designed to showcase Indonesia as a reformed, resilient, progressive, and pro-job economy. There are four over-arching themes: <a href="{{ route( 'f.events.program_vti' ) }}">Development, Economy & Finance, Indonesia’s Diversity, and Indonesia’s Potential</a>.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What are the events of the Voyage to Indonesia?</h4>
                        </div>
                        <div class="content">
                            <p>There are a wide range of events such as seminars, panel discussion, community and regional outreach, meetings with stakeholders, workshops, contests, and exhibitions.
                            </p>
                        </div>
                    </li>
                </ul>
                <!--end of accordion-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
@stop