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
                'label' => 'Indonesia Menjadi Tuan Rumah Pertemuan Ekonomi dan Keuangan', 
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
                        Indonesia Menjadi Tuan Rumah Pertemuan Ekonomi dan Keuangan Terbesar di
                        Dunia: IMF-World Bank Annual Meetings 2018
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                       Persiapan IMF-WB Annual Meetings 2018 Bali
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        Juni 13, 2017
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
                        Indonesia mendapat kepercayaan menjadi tuan rumah pertemuan paling besar
                        dan berpengaruh di bidang ekonomi dan keuangan di dunia, yaitu Pertemuan
                        Tahunan Dana Moneter Internasional dan Bank Dunia Tahun 2018 atau IMF-World
                        Bank Annual Meetings 2018 (AM 2018) di Nusa Dua - Bali, pada tanggal 12-14
                        Oktober 2018.
                    </td>
                </tr>
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ asset( 'uploads/public/Press-Release-Rakor-Panitia-Nasional.pdf' ) }}" class="txt-underline">
                            Press Release Rakor Panitia Nasional 13 Juni 2017.pdf
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ asset( 'uploads/public/Press-Release-Rakor-Panitia-Nasional.pdf' ) }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
    </div>
</section>

@stop