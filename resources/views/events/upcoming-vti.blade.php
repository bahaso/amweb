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
                'label' =>  'Upcoming VTI Events',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <h1 class="title fw600">
            Upcoming Voyage to Indonesia Events
        </h1>
        <div class="content">
            <ul style="margin-left: 15px">
                <li>
                    <h4>2nd Annual Islamic Finance Conference, 23-24 August 2017 in Yogyakarta</h4>
                    <p>Socio-economic problems remain the most challenging issue faced by Muslim world, including Indonesia, during the last decades. The poor socio-economic performance of most Muslim-majority countries has raised a longstanding debate on whether Islam as the “religion of practice” has relationships with socioeconomic growth, or whether there are deeper problems, outside the Islamic values, contributing to lower education, poverty, poor health in the countries, although the Islamic economic principles have been introduced hundreds years ago. (Timmer & McClelland 2004).</p>
                    <p>The main objective of the conference is to promote discussion on the application of theory, model and instruments of Islamic finance to overcome socio-economic problems in developing countries including Indonesia. Furthermore, the conference aims to discuss a set of policies combined with the principles of Islamic finance that can be together tackling poverty and income inequality problems.</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>APEC Seminar on Disaster Risk Financing in Asia Pacific Region, October 2017 in Padang</h4>
                    <p>The severe impact of natural disasters has been widely acknowledged by global world, particularly in regions within the “Ring of Fire”, such as the Asia-Pacific. Large disaster events have caused major human, social, economic and financial impacts. APEC, under Finance Ministers Process (FMP), is one of very active organization which producing disaster related initiatives. Vietnam as APEC Chairman has set the APEC 2017 theme of Creating New Dynamism, Fostering Shared Future; and maintained the Disaster Risk Financing and Insurance (DRFI) as one of four main agendas. Meanwhile, the Indonesian Ministry of Finance as the fiscal authority puts high concern on the fiscal resilience on managing financial risk of disaster. Incorporating Disaster Risk Management (DRM)/DRFI into its fiscal sustainability framework is a necessity, taking into account the limited fiscal space.</p>
                    <p>Based on the need to further enhance its policy in disaster risk financing and to align the DRM into fiscal policy and development planning, Indonesia needs to review its related existing policies to determine the suitable policies in the short, medium and long run. Therefore, this seminar is aiming to provide foundation for Indonesia to implementing integrated DRM and fiscal policy in a holistic approach, with a view to reinventing the disaster risk management framework and its prevailing laws and regulations. </p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4 style="color:#87CEFA";">Sharia Economic Festival in 3 Cities (Makassar, Medan, Bandung), August – September 2017 and International Sharia Economic Festival, Surabaya – November 2017</h4>
                    <p style="color:#87CEFA";">Sharia Economic Festival carries the spirit of showcasing the development of sharia economy and finance in Indonesia. The events are held in 3 cities across Indonesia, such as Makassar (25th-27th August 2017), Medan (8th -10th September 2017), and Bandung (14th – 16th September 2017). These events also precedes the International Sharia Economic Festival in Surabaya (November 2017).</p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4 style="color:#87CEFA";">International Seminar on “National And Regional Balance Sheet: Toward An Integrated Macrofinancial System Stability”, 1st-2nd November 2017 in Bali</h4>
                    <p style="color:#87CEFA";">The two-day seminar will be conducted by Bank Indonesia, discussing on the importance of integrated sectoral balance sheet. The theme has been regarded an important issue as it provides powerful information to identify financial imbalances that could lead to financial crisis. The seminar will bring up the issue through 4 sessions, namely i) Seminar on Data Compilation; ii) Seminar on Data Analysis; iii) Sharing Session on NFABS Data Compilation; and iv) Sharing Session on NFABS Data Analysis.  </p>
                </li>
            </ul>
            <ul style="margin-left: 15px">
                <li>
                    <h4>Regional Seminar on Urbanization, December 2017 in Surabaya</h4>
                    <p>The level and growth of urbanization differ considerably by region. Among developing countries, Latin American countries have the highest proportion of their population living in urban areas. But East and South Asia are likely to have the fastest growth rates in the next 30 years including in Indonesia.</p>
                    <p>Experience suggests that if well managed, urban areas promote efficiency and productivity increases through agglomeration effects; foster innovation and the emergence of new ideas; provide job opportunities and the growth of the middle class.</p>
                    <p>However, Population growth, especially due to rural-to-urban migration (urbanization) has led to urban densification and urban sprawl. This condition presents a variety of very complex urban problems; include social, economic and environmental issues. Various problems that occur in urban areas because of those condition are the increasing rate of poor people, limited of the availability of employment rate, and increasing demand for housing.</p>
                    <p>This regional seminar aims to deliver the findings of the comprehensive study on Urbanization including best practise program of some regions in Indonesia. It will be a sharing experience and initiatives forum related to urbanization issues especially from other East and South Asia countries.</p>
                </li>
            </ul>
        </div>
    </section>
@stop

