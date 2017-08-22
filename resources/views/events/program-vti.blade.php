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
                'label' =>  'VTI Program',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <h1 class="title fw600">
            Voyage To Indonesia Program (Ministry Of Finance)
        </h1>
        <div class="content">
            <p>
                The Voyage to Indonesia program will feature public events, seminars/panels, and publications
                showcasing Indonesia and ASEAN as a reformed, resilient, progressive, and pro-job economy. VTI
                events will be integrated under four overarching themes:
            </p>
            <ol style="margin-left: 15px">
                <li>
                    Development
                    <ul>
                        <li>
                            Inclusive Growth - sharia economy and other initiatives
                        </li>
                        <li>
                            Empowerment of women in Indonesia’s economy
                        </li>
                    </ul>
                </li>

                <li>
                    Economy and Finance
                    <ul>
                        <li>
                            Building a reformed and resilient economy which aims to show that Indonesia has
                            undergone significant reform and is resilient towards external shocks.
                        </li>
                        <li>
                            Digitalized economy, representing Indonesia’s progress in embracing modern technology to
                            promote economic growth.
                        </li>
                    </ul>
                </li>
                <li style="margin-bottom: 10px">Indonesia’s Diversity</li>
                <li>Indonesia’s Potential</li>
            </ol>
            <p>
                A wide range of activities such as seminars, focused group discussions (FGD), and workshops will be
                organized around the first two themes. “Indonesia’s Diversity” will be showcased through cultural
                events
                and targeted presentations celebrating the unique heritage and composition of the country. Lastly,
                “Indonesia’s Potential” will promote programs and priority initiatives for the host country, namely
                trade fairs and investment opportunities. Several ministries and other respective institutions are
                collaborating to organize and carry out these events.
            </p>
            <p>
                Aside from the four themes above, VTI will also conduct various outreach programs to stakeholders
                such
                as private sector, parliament, youth, academics, media, NGO/think tank, and international community
                in
                order to convey the message of Indonesia’s economic achievements and to explain the roles of
                international organizations, such as the IMF and World Bank Group.
            </p>
        </div>
    </section>
@stop

