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
                'label' => 'Bank Indonesia', 
            ]
        ],
        'no_label' => true
    ])
@stop


@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Bank Indonesia Policy Events in the Voyage to Indonesia Program
    </h1>
    <div class="content">
        <p>
            Relevant to the reformed and resilient economy theme, Indonesia will 
            be showcased as an economic power that has performed various reforms and possesses resilience against crisis. In its realization, 
            BI has three flagship activities in the form of international seminars. 
            <span class="txt-bold">The first seminar</span> with the theme “Global Economic Outlook in ASEAN 
            Perspectives” has been held on 28 April 2017 in Jakarta. This activity presented Professor Maurice Obstfeld from IMF as well as 5 Central
            Bank Deputy Governors in the ASEAN region, which were Indonesia, Singapore, Malaysia, Thailand, and the Philippines. The two subsequent 
            activities will be i) ASEAN Conference in February 2018 and ii) International Seminar 
            <span class="txt-italic">“Policy Mix and New Norm of Global Economy”</span> 
            on October 
            2018, preceding the organization of the 2018 AM. In supporting flagship activities and the 2018 AM, there will also be conducted a series of
            seminars and other activities to strengthen the message of Indonesia as reformed and resilient economy.
        </p>
        <p>
            In the digitalized economy theme, there will be presented Indonesia’s progress in the implementation of digital economy in supporting economic growth. Activities to be conducted are the launch of Fintech-based Micro, Small, and Medium Business (UMKM) development model (Fintech Village) as well as a Seminar with the topic Big Data in Semester II of 2017. Furthermore, there are also plans to conduct Fintech Indonesia progress Seminar and Exhibition activities in concurrence with the 2018 Annual Meeting. In supporting flagship activities and the 2018 AM, there will also be a series of other small scale discussion activities relevant to the digitalized economy theme.
        </p>
        <p>
            Regarding the theme towards a modern and inclusive sharia economy & finance, there will be a showcase of sharia economic development in Indonesia with the characteristics/uniqueness in it. BI plans to conduct two flagship activities, which are the Sharia Economy International Festival and the Waqaf Core Principal Launch. In supporting flagship activities and the 2018 AM, there will also be conducted other small scale activities, one of which is the Sharia Economic Festival held in 2017 in 3 (three) cities: Makassar, Medan, and Bandung.
        </p>
        <p>
            Meanwhile, through the women empowerment theme, there will be showcased the development of the roles of women in economic development in Indonesia expected to be role models for other countries. One flagship activity is planned, which is the “Gender and Macroeconomics” Seminar in February 2018.
        </p>
        <p>
            Last, relevant to the outreach program, the main message to be conveyed is the showcase of Indonesian economic growth that is exhibited in the four aforementioned themes as well as explaining the roles of international organizations, especially IMF and the World Bank. Communication performed in the forms of discussion, FGD, or training will be directly communicated to various levels of stakeholders in various areas of Indonesia.
        </p>
    </div>
</section>

@stop
