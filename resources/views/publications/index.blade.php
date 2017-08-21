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
        <table class="table am2018">
            <thead>
                <tr>
                    <th width="20%">Date</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>February 21, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [5, 'workshop-on-improving' ]) }}">
                            Workshop on Improving Local Efficiency and Transparency
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>March 30, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [2, 'focus-group-discussion' ]) }}">
                            Focus Group Discussion on The Rising of A New World Order
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>April 28, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [3, 'international-seminar-global' ]) }}">
                            International Seminar Global Economic Outlook in ASEAN Perspective
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>May 15, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [1, 'economic-panel-discussion-indonesia' ]) }}">
                            Economic Panel Discussion-Indonesia’s Leading Role in Global Economy
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>July 12-13, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [4, 'joint-imf-indonesia' ]) }}">
                            Joint IMF-Indonesia High-Level Conference
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
</section>

@stop