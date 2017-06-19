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
                'label' => 'Focus Group Discussion on The Rising of A New World Order', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Focus Group Discussion on The Rising of A New World Order
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        Focus Group Discussion on The Rising of A New World Order: Indonesia’s
                        Challenges and Response
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
                        March 30, 2017
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
                        <a href="{{ asset( 'uploads/public/Focus-Group-Discussion.pdf' ) }}" class="txt-underline">
                            Focus Group Discussion on The Rising of A New World Order.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ asset( 'uploads/public/Focus-Group-Discussion.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop