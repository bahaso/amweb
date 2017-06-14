@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Publications', 
                'url' => route( 'f.publications.index' ) 
            ],
            [
                'label' => 'International Seminar Global Economic Outlook in ASEAN Perspective', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        International Seminar Global Economic Outlook in ASEAN Perspective
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        The Role of Central Banks in ASEAN Economic Integration, Deputy Governor Mathee
                        Supapongse, Bank of Thailand
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        International Seminar: Global Economic Outlook in ASEAN Perspectives, Bank Indonesia,
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        28 April 2017
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
                        As a part of Voyage to Indonesia, International Seminar: Global Economic Outlook in

                        ASEAN Perspectives at Bank Indonesia Jakarta in 28th April 2017The seminar invited

                        prominent economist from domestic and international. One of the keynote speakers is

                        Prof. Maurice Obstfeld, Economic Counsellor and Director of the IMF’s Research

                        Department. Also acting as keynote speakers are 5 Deputy Governor of Central Banks

                        from ASEAN countries, Perry Warjiyo from Bank Indonesia, Diwa C. Guinigundo from

                        Bangko Sentral ng Pilipinas, Ong Chong Tee from Monetary Authority of Singapore,

                        Sukhdave Singh from Bank Negara Malaysia, and Mathee Supapongse from Bank of

                        Thailand. Other representatives from Central Bank in ASEAN, international financial

                        institution both from Asia and Indonesia, along with academics and government

                        institution were also attending the seminar.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@stop