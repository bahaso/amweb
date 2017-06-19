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
                'label' => 'Indonesia in IMF-WB Spring Meetings 2017', 
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
                        Indonesia in IMF-WB Spring Meetings 2017
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        IMF-WB Spring Meetings 2017
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        April 17, 2017
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
                        Minister of Finance of Republic of Indonesia (RI), Sri Mulyani Indrawati will depart

                        to Washington DC, US in April, 18 2017 for attending IMF – WB 2017 Spring

                        Meetings. The event is going to be commenced in April, 19 to April, 24 2017. There

                        will be many prominent figures participate, such as ministers of finance and

                        central bank governors from all over the world, members of international civil

                        society, academia, and private sectors. Minister of Finance of RI will enact as WB-

                        IMF Development Committee Chair / DC Chair and serve as a member of G-20

                        countries as well as one of World Bank and IMF member countries.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Press-Release-IMF.pdf' ) }}" class="txt-underline">
                            Press Release IMF-World Bank Spring Meetings 2017.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/Press-Release-IMF.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop