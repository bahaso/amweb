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
                'label' => 'Indonesia\'s Leading Role', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Publications
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        Panel Discussion: Indonesia's Leading Role in Global Economy
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
                        May 15, 2017
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        BI
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Venue Map.pptx' ) }}" class="txt-underline">
                            VTI - Diskusi Penel Ekonomi di FE UI.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/Venue Map.pptx' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop