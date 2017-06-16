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
                'label' => 'JOINT IMF-INDONESIA HIGH-LEVEL CONFERENCE', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Joint IMF-Indonesia High-Level Conference
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        Joint IMF-Indonesia High-Level Conference, International Taxation In Asia: Issues
                        And The Way Forward
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        -
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        JULY 12–13, 2017
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        Ministry of Finance
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                        Strengthening tax systems has emerged as a key development priority for the

                        implementation of the 2030 Sustainable Development Goals (SDG). It is recognized that

                        strong tax systems are key for enhancing state building; it is not just how much revenue is

                        raised that matters for development and growth, but also how it is raised.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/JOINT IMF-INDONESIA HIGH-LEVEL CONFERENCE 12-13 July 2017.pdf' ) }}" class="txt-underline">
                            JOINT IMF-INDONESIA HIGH-LEVEL CONFERENCE 12-13 July 2017
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/JOINT IMF-INDONESIA HIGH-LEVEL CONFERENCE 12-13 July 2017.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop