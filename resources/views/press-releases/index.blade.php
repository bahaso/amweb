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
                'label' => 'Press Release', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Press Releases
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
                    <td>July 12-13, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [1, 'international-taxation-in-asia' ]) }}">
                            International Taxation in Asia: Issues and the Way Forward
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Juni 13, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [2, 'indonesia-menjadi-tuan-rumah' ]) }}">
                            Indonesia Menjadi Tuan Rumah Pertemuan Ekonomi dan Keuangan Terbesar di Dunia: IMF-World Bank Annual Meetings 2018
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>April 17, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [3, 'indonesia-in-IMF-WB-2017' ]) }}">
                            Indonesia in IMF-WB Spring Meetings 2017
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>

@stop