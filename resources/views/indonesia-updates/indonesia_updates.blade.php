@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url'   => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
                'url'   => route( 'f.news.index' )
            ],
            [
                'label' => 'Indonesia Updates'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )


<section class="wysiwyg">
    <h1 class="title fw600">
        Institutional and Government Effectiveness: Accelerated Reforms Agenda with Institutional Improvement
    </h1>
    <div class="content">
        <p class="no-mb">
            Indonesia is committed to accelerate its reform agenda as is shown by its institutional improvement. There are, at least, six points that underpin the statement above, which are
        </p>
        <ul style="list-style-type:none;">
            <li>
                (i) Positive global perception
            </li>
            <li>
                (ii) Investment grade status
            </li>
            <li>
                (iii) Indonesia as the investment destination
            </li>
            <li>
                (iv) National strategic development plan
            </li>
            <li>
                (v) Economic policy
            </li>
            <li>
                (vi) Investment achievement in 2016.
            </li>
        </ul>
        <p class="no-mb">
            <a href="#" class="txt-underline">
                Download document
            </a>
        </p>
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">Positive Global Perception</h4>
                    </div>
                    <div class="content no-list">
                        <p class="no-mb">
                           Indonesia receives positive global perception as is shown by four indicators below, which are: 
                        </p>

                        <ul>
                            <li>
                                1) Ease of Doing Business
                                <p>
                                    {!! html_img( 'img/am2018/public/Slide1.JPG',
                                    [
                                        'w' => '100%',
                                        'h' => 'auto',
                                    ]) !!}
                                </p>
                            </li>
                            <li>2) Corruption Perception Index
                                <p>
                                    {!! html_img( 'img/am2018/public/Slide2.JPG',
                                    [
                                        'w' => '100%',
                                        'h' => 'auto',
                                    ]) !!}
                                </p>
                            </li>
                            <li>3) Global Competitiveness Index
                                <p>
                                    {!! html_img( 'img/am2018/public/Slide3.JPG',
                                    [
                                        'w' => '100%',
                                        'h' => 'auto',
                                    ]) !!}
                                </p>
                            </li>
                            <li>4) World Governance Indicators
                                <p>
                                    {!! html_img( 'img/am2018/public/Slide4.JPG',
                                    [
                                        'w' => '100%',
                                        'h' => 'auto',
                                    ]) !!}
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Investment Grade Status From Rating Agencies</h4>
                    </div>
                    <div class="content">
                        <p>
                            Indonesia has received investment grade status from world’s most respected rating agencies, such as JCRA, Fitch, Moody’s, R&I. Recently, Indonesia successfully received investment grade status from S&P.
                        </p>
                        <p>
                            {!! html_img( 'img/am2018/public/Slide5.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p>
                            Here are the details of Indonesia’s investment grade status
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/ri-logo.jpg',
                            [
                                'w' => '54',
                                'h' => '41',
                            ]) !!}
                        </p>
                        <p class="no-mb txt-bold">
                            April 2017, BBB-, Outlook Revised to Positive 
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/b-positive.jpg',
                            [
                                'w' => '100',
                                'h' => '32',
                            ]) !!}
                        </p>
                        <p class="txt-italic">
                            “Indonesia's macroeconomics stability has been maintained for several years. Its external position is also improving, fiscal deficits have been reined in and government debt is low. In light of such factors, coupled with improved policy management, R&I has changed the rating outlook to Positive.’
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/jcr-logo.jpg',
                            [
                                'w' => '53',
                                'h' => '44',
                            ]) !!}
                        </p>
                        <p class="no-mb txt-bold">
                           March 2017, BBB-, Outlook Revised to Positive 
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/b-positive.jpg',
                            [
                                'w' => '100',
                                'h' => '32',
                            ]) !!}
                        </p>
                        <p class="txt-italic">
                            “JCR has changed the rating outlook from Stable to Positive, based on the recent improvement on the investment climate promoted by a series of Economic Policy Packages & the containment of private external debt brought by Bank Indonesia’s prudential regulations on external borrowing.”
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/moody-logo.jpg',
                            [
                                'w' => '94',
                                'h' => '40',
                            ]) !!}
                        </p>
                        <p class="no-mb txt-bold">
                            Feb 2017, Baa3, Outlook Revised to Positive
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/ba3-positive.jpg',
                            [
                                'w' => '100',
                                'h' => '38',
                            ]) !!}
                        </p>
                        <p class="txt-italic">
                            “We changed the outlook on Indonesia's sovereign rating to positive from stable to reflect emerging signs of a reduction in structural constraints, including its level of external vulnerability and the strength of its institutions.“
                        </p>

                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/sp-global-logo.jpg',
                            [
                                'w' => '89',
                                'h' => '51',
                            ]) !!}
                        </p>
                        <p class="no-mb txt-bold">
                            May 2017, BBB-, Rating Upgraded
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/b-stable.jpg',
                            [
                                'w' => '100',
                                'h' => '38',
                            ]) !!}
                        </p>
                        <p class="txt-italic">
                            “We raising the long-term sovereign credit to BBB- as the Indonesian authorities have taken effective expenditure and revenue measures to stabilize the public finances despite the terms of trade shock.”
                        </p>

                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/fitch-ratings-logo.jpg',
                            [
                                'w' => '109',
                                'h' => '36',
                            ]) !!}
                        </p>
                        <p class="no-mb txt-bold">
                            Des 2016, BBB-, Outlook Revised to Positive 
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/ba3-positive.jpg',
                            [
                                'w' => '100',
                                'h' => '38',
                            ]) !!}
                        </p>
                        <p class="txt-italic">
                            “Key drivers of the Positive Outlook are the build-up of a track record of macroeconomic stability in the past few years, and a strong structural reform drive since September 2015.”
                        </p>

                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Indonesia Remains the Investment Destination of Choice</h4>
                    </div>
                    <div class="content">
                        <p class="no-mb">
                            According to several reports, Indonesia has become one of the most attractive investment destinations in the region.
                        </p>
                        <p>
                            {!! html_img( 'img/am2018/public/Slide6.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p>
                            {!! html_img( 'img/am2018/public/Slide7.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p>
                            {!! html_img( 'img/am2018/public/Slide8.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p>
                            {!! html_img( 'img/am2018/public/Slide9.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">National Strategic Development Plan (Nawa Cita)</h4>
                    </div>
                    <div class="content">
                        <p>
                            Joko Widodo’s administration designs a national strategic development plan, called “Nawa Cita”. In essence, “it is a 9-priority-agenda that shows the government’s vision of Indonesia as politically sovereign, economically independent, as well as think globally, and act locally.”  Here are the key takeaways from Nawa Cita in terms of economic development.
                        </p>
                        <p>
                              “Jalan Perubahan untuk Indonesia yang Berdaulat, Mandiri, dan Berkepribadian”. 
                              May 2014, accessed through 
                              <a href="http://kpu.go.id/koleksigambar/VISI_MISI_Jokowi-JK.pdf">http://kpu.go.id/koleksigambar/VISI_MISI_Jokowi-JK.pdf</a>
                              on 16th June 2017 4.55 PM.
                        </p>
                        <p>
                            {!! html_img( 'img/am2018/public/Slide10.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Economic Policy</h4>
                    </div>
                    <div class="content no-list">
                        <p class="no-mb txt-bold">
                            Economic Policy Packages
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/Slide11.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p>
                            Source: Coordinating Ministry for Economic Affairs
                        </p>
                        <p class="no-mb txt-bold">
                            Thematic Policy Issues on Deregulation
                        </p>    
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/Slide12.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p>
                            Source: Coordinating Ministry for Economic Affairs
                        </p>
                        <p class="no-mb txt-bold">
                            Progress of the Economic Policy Packages
                        </p>
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/Slide13.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p class="no-mb">
                            Source: Coordinating Ministry for Economic Affairs
                            <ul>
                                <li>
                                    - Initially, there are 215 regulations which need to be deregulated
                                </li>
                                <li>
                                    - Based on the further assessment, 11 regulations has been revoked from deregulation process
                                </li>
                                <li>
                                    - Total regulation subject to be deregulated: 204 regulations
                                </li>
                                <li>
                                    - As of February 6nd, 2017, deregulation of 203 regulations are finished (99%), comprising 49 regulations at Presidential level and 154 regulations at Ministrial/Institutional level
                                </li>
                                <li>
                                    - Unfinished regulations: Proposed Policy on E-commerce Roadmap
                                </li>
                            </ul>
                        </p>
                        <p>
                            <span class="txt-bold">Other Progress on Economic Policy Packages</span>
                            <ul>
                                <li>
                                    <span class="txt-bold">
                                        1.  Fair, Simplified & Projectable Wage System
                                    </span>
                                    <p>
                                        14 Provinces have set 2016 Minimum Wage System in accordance to the Government Regulation (GR) No. 78/2015 (Kepulauan Riau, Kalimantan Barat, Nusa Tenggara Barat, Sumatera Barat, Jambi, Aceh, Kalimantan Selatan, Banten, Gorontalo, Nusa Tenggara Timur, Jawa Barat, Bali, Sumatera Utara, and Bangka Belitung)
                                    </p>
                                </li>
                                <li>
                                    <span class="txt-bold">
                                        2.  Development of Spesial Economic Zone (SEZ)
                                    </span>
                                    <p class="no-mb">-   Total value of facilities and incentives for SEZs amounted IDR 33.8 trillion (as of September 2016)</p>
                                    <p>-   18 companies benefitted from the simplification of fiscal incentive process with average processing time of 13.4 days (previously 2 years)</p>
                                </li>
                                <li>
                                    <span class="txt-bold">
                                        3.  Export-Oriented Business Credit (KURBE)
                                    </span>
                                    <p>
                                        State-owned train manufacturer PT Industri Kereta Api (INKA) in Madiun, East Java, has begun its first passenger train exports by shipping 15 train wagon to Bangladesh.
                                    </p>
                                </li>
                                <li>
                                    <span class="txt-bold">
                                        4.  Deregulation on Logistics Sector
                                    </span>
                                    <p>
                                        North Sulawesi has sucessfully exported coconut product through SOEs’ joint program
                                    </p>
                                </li>
                            </ul>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Investment Achievement in 2016</h4>
                    </div>
                    <div class="content">
                        <p class="no-mb">
                            {!! html_img( 'img/am2018/public/Slide14.JPG',
                            [
                                'w' => '100%',
                                'h' => 'auto',
                            ]) !!}
                        </p>
                        <p class="txt-bold" style="text-align:center;">
                            Source: Investment Coordinating Board (BKPM)
                        </p>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>
    </div>
</section>

@stop