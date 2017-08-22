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

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4 class="mb16">FAQ</h4>
                <p class="lead mb64">
                    Website IMF-WBG AM 2018
                </p>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <ul class="accordion accordion-2">
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What is IMF-WBG Annual Meetings?</h4>
                        </div>
                        <div class="content">
                            <p>
                                It is the annual meeting that brings together Central Bank Governors and Ministers
                                of
                                Finance from 189 countries along with prominent persons from private sector,
                                academics, NGO, and media, to discuss developments in the economy and finance.
                                For two consecutive years, it takes place in Washington DC, USA. Meanwhile, in the
                                third year, the selected member country gets to host the Meetings.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">When will IMF-WBG Annual Meetings 2018 take
                                place?</h4>
                        </div>
                        <div class="content">
                            <p>
                                It will take place on 12th – 14th October 2018 in Nusa Dua, Bali, Indonesia.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">How many meetings that will be held during
                                IMF-WBG Annual Meetings 2018?</h4>
                        </div>
                        <div class="content">
                            <p>
                                There will be more or less 2.000 meetings running simultaneously. As parts of its
                                main agenda, there will be Plenary Session, International Monetary and Financial
                                Committee (IMFC) Meeting, and Development Committee (DC) Meeting. In addition,
                                other official meetings will occur, such as G-7, G-20, G-24, BRICS, and etc. Also
                                featured are seminars, regional briefings, press conferences, and many other events
                                focused on the global economy, international development, and the world's financial
                                system.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">How many participants of IMF-WBG Annual
                                Meetings 2018?</h4>
                        </div>
                        <div class="content">
                            <p>
                                In total, the estimated number of participants is 15.000, consisting of official
                                delegates, investors, IMF-WBG staffs, Civil Society Organizations (CSOs), academics,
                                media, observers, and others.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">How did Indonesia end up hosting IMF-WBG
                                Annual Meetings 2018?</h4>
                        </div>
                        <div class="content">
                            <p>
                                Indonesia underwent a series of selection process. In September 2014, Indonesia
                                expressed interest and submitted bid proposal. Proceeding with Indonesia’s
                                candidacy, IMF-WBG carried out site inspection in December 2014. Onto the next
                                stage, Indonesia was shortlisted along with several other countries. Finally,
                                Indonesia
                                was officially selected as a host country in 10th October 2015.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What are the benefits for Indonesia as a
                                host country of IMF-WBG Annual Meetings 2018?</h4>
                        </div>
                        <div class="content">
                            <p class="mb0">
                                There are two types of benefits. First are short-term benefits. The cost of hosting
                                IMF-WBG Annual Meetings 2018 is worth spending, knowing the potential of foreign
                                exchange reserve gains from the spending of all participants prior, during, and post
                                IMF-WBG AM 2018. The potentials are coming from:
                                i) meetings (private sector), ii)
                                transportation &amp; accommodation, iii) foods &amp; beverages, iv) shopping &amp;
                                entertainment, v) tourism (nature &amp; culture). Second, is long-term benefits.
                            </p>
                            <p>
                                Second, long-term benefits that are resulted from hosting IMF-WBG Annual Meetings
                                2018, they are: i) knowledge-transfer, lessons on hosting international event, ii)
                                trade
                                and investment, the exposure of local products and investment opportunities as well
                                as trade transaction, iii) the increasing number of tourists to top 10 main
                                destinations
                                in Indonesia, iv) Indonesia’s leadership in hosting international event and
                                discussing
                                global issues.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What is Voyage to Indonesia?</h4>
                        </div>
                        <div class="content">
                            <p>
                                Voyage to Indonesia is a series of pre-events prior to IMF-WBG Annual Meetings
                                2018. It is designed to showcase Indonesia as a reformed, resilient, progressive,
                                and
                                pro-job economy. It is covered in 5 themes, they are: i) Reformed and Resilient
                                Economy, ii) Digitalized Economy, iii) Towards a Modern and Inclusive Sharia, iv)
                                Women Empowerment, v) Inclusive Growth.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">What are the events of Voyage to
                                Indonesia?</h4>
                        </div>
                        <div class="content">
                            <p>
                                There is a wide range of events, such as seminars, outreach, meeting with
                                stakeholders, workshops, contests, and exhibitions.
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