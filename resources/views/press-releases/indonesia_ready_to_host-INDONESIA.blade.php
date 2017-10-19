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
                'label' => 'Indonesia Siap Menjadi Tuan Rumah IMF-WBG Annual Meetings 2018',
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
                        Indonesia Siap Menjadi Tuan Rumah IMF-WBG Annual Meetings 2018: Voyage to Indonesia
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
                        August 25, 2017
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
                        Indonesia siap menjadi Tuan Rumah Annual Meetings International Monetary Fund - World Bank Group 2018 (AM 2018).
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
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