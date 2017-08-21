@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Publications',
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Publications', 
                'url' => route( 'f.publications.index' ) 
            ],
            [
                'label' => 'Economic Panel Discussion-Indonesia\'s Leading Role in Global Economy', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Economic Panel Discussion-Indonesia’s Leading Role in Global Economy
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        Emerging Market, Developments and Prospects, Papa M. Bagnick N’Diaye (Deputy
                        Division Chief in the IMF Strategy, Policy, and Review Department, Washington DC)
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        Panel Discussion: Indonesia’s Leading Role in the Global Economy, Outreach
                        Faculty of Economics and Business University of Indonesia, Depok, West Java
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        15 May 2017
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        Bank of Indonesia
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                       As a part of Voyage to Indonesia, Panel Discussion: Indonesia’s Leading Role in the

                        Global Economy was held at the Faculty of Economics and Business, University of

                        Indonesia in 15th May 2017. This event aims to convey recent updates on global

                        economy as well as Indonesian economy, especially regarding the IMF economic

                        asssessment which is written in IMF Article IV, along with information of IMF-WB

                        AM 2018. Invited as the speakers are: Peter Jacobs (Director/Head of Task Force IMF-

                        WB AM 2018 – Bank Indonesia), Papa M. Bagnick N’Diaye (Deputy Division Chief in

                        the IMF Strategy, Policy, and Review Department, Washington DC) and John G.

                        Nelmes (IMF Representative Indonesia). Acting as moderator, Fithra Faisal Hastiadi,

                        Ph.D. (Lecturers in FEB UI).
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Economic-Panel-Discussion-Indonesia.pdf' ) }}" class="txt-underline">
                            Economic Panel Discussion-Indonesia’s Leading Role in Global Economy.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/Economic-Panel-Discussion-Indonesia.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop