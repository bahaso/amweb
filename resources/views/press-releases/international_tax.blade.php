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
                'label' => 'Press Releases', 
                'url' => route( 'f.press-releases.index' ) 
            ],
            [
                'label' => 'International Taxation in Asia', 
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
                        International Taxation in Asia: Issues and the Way Forward
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                       Joint IMF-Indonesia High-Level Conference
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        12-13 July 2017
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
                        Minister of Finance of the Republic of Indonesia Sri Mulyani Indrawati opened the Joint
                        IMF-Indonesia High-Level Conference which is held on 12-13 July 2017 in Mulia Hotel, Jakarta. The
                        conference themed “International Taxation in Asia: Issues and The Way Forward” is attended by
                        Deputy Managing Director of IMF, Minister of Finance of Malaysia, Deputy Prime Minister and
                        Minister of Strategy and Finance of Korea, Member of Lilley from Australian Parliament, several high
                        level officials from Asian countries, and experts for international taxation from around the world.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Press-Release-Taxation.pdf' ) }}" class="txt-underline">
                            Press Release International Taxation in Asia
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/Press-Release-Taxation.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop