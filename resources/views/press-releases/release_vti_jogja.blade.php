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
                'label' => 'Release VTI Yoygyakarta',
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
                        Seminar Internasional: Inequality & the Role of Technology in Shaping The Future Work
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
                        January 23, 2018
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
                        Pada hari ini, 23 Januari 2018, bertempat di Hotem Tentrem Yogyakarta, Kementerian Keuangan berkerjasama Bank Indonesia menyelenggarakan seminar international yang mengakat tema "Iequality & the Role of Technology in Shaping the Future of Work".
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Press-Release-rilis-VTI-jogja-230118.pdf' ) }}" class="txt-underline">
                            Release VTI Jogjakarta.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
</section>

@stop