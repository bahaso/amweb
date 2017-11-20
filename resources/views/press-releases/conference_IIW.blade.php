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
                'label' => 'Conference Pers IIW',
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
                        INDONESIA INFRASTRUCTURE WEEK 2017
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
                        November 6, 2017
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        Kementerian PPN/BAPPENAS
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                        BRINGING TOGETHER THE PUBLIC AND PRIVATE SECTOR IN SUPPORT OF INDONESIA’S CRITICAL INFRASTRUCTURE DEVELOPMENT
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Press-Release_Konferensi Pers_IIW.pdf' ) }}" class="txt-underline">
                            Press Release Conference IIW.pdf
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
