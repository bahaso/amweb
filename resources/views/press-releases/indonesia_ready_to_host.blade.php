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
                'label' => 'Press Releases', 
                'url' => route( 'f.press-releases.index' ) 
            ],
            [
                'label' => 'Indonesia Ready To Host Annual Meeting 2018',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        Indonesia Ready to Host 2018 Annual Meetings of the International Monetary Fund and World Bank Group: Voyage to Indonesia
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        Press Conference
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        October 12, 2017
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        Ministry of Finance, Bank of Indonesia
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                        Indonesia is ready to host the upcoming 2018 Annual Meetings of the International Monetary Fund and World Bank Group (2018 AM). Delegation of Republic of Indonesia represented by Coordinating Minister for Maritime Affairs, Central Bank Governor and Minister of Finance elaborate further Indonesia’s preparation towards the event which will take place in Nusa Dua, Bali.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Press-Release-Indonesia-Ready-to-Host-the-2018.pdf' ) }}" class="txt-underline">
                            Press Release Indonesia Ready to Host 2018 Annual Meetings.pdf
                        </a><br><br>
                        <a href="{{ asset( 'uploads/public/Siaran-Pers-Indonesia-Siap-Menjadi-Tuan-Rumah-IMF-WBG-Annual-Meetings-2018-Voyage-to-Indonesia.pdf' ) }}" class="txt-underline">
                            Siaran Pers - Indonesia Siap Menjadi Tuan Rumah IMF-WBG Annual Meetings 2018 - Voyage to Indonesia.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/Press-Release-Indonesia-Ready-to-Host-the-2018-AM.zip' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop