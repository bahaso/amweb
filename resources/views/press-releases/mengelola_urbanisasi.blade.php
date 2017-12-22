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
                'label' => 'Mengelola Urbanisasi untuk Menciptakan Pembangunan Kota yang Berkesinambungan',
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
                        Mengelola Urbanisasi untuk Menciptakan Pembangunan Kota yang Berkesinambungan
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
                        December 19, 2017
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
                        Fundamental ekonomi Indonesia tetap sehat. Pada kuartal III tahun 2017, ekonomi Indonesia tumbuh 5,06 persen.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/mengelola_urbanisasi.pdf' ) }}" class="txt-underline">
                            Press Release mengelola urbanisasi.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@stop