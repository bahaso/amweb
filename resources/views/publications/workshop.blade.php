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
                'label' => 'Workshop on Improving Local Efficiency and Transparency', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Workshop on Improving Local Efficiency and Transparency
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        Workshop on Improving Local Efficiency and Transparency in order to Improving the

                        Quality of Public Service and Attracting Investment into the Region
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
                        21 February 2017
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
                        -
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Workshop-on-Improving.pdf' ) }}" class="txt-underline">
                           Workshop on Improving Local Efficiency and Transparency.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ asset( 'uploads/public/Workshop-on-Improving.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop