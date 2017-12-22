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
                    <td>December 22, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [7, 'bali-safe-indonesia-ready-to-host' ]) }}">
                            Bali Aman, Indonesia Siap Menjadi Tuan Rumah IMF-WBG Annual Meetings 2018
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>November 6, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [6, 'indonesia-ready-to-host' ]) }}">
                            Indonesia Infrastructure Week 2017: Bringing Together The Public and Private Sector in Support of Indonesia's Critical Infrastructure Development
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>October 12, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [4, 'indonesia-ready-to-host' ]) }}">
                            Indonesia Ready to Host 2018 Annual Meetings of the International Monetary Fund and World Bank Group: Voyage to Indonesia
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>August 25, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [5, 'indonesia-ready-to-host-INDONESIA' ]) }}">
                            Indonesia Siap Menjadi Tuan Rumah IMF-WBG Annual Meetings 2018: Voyage to Indonesia
                        </a>
                    </td>
                </tr>
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
                            Indonesia Menjadi Tuan Rumah Pertemuan Ekonomi dan Keuangan Terbesar di Dunia: IMF-World
                            Bank Group Annual Meetings 2018
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>April 17, 2017</td>
                    <td>
                        <a href="{{ route( 'f.press-releases.detail', [3, 'indonesia-in-IMF-WBG-2017' ]) }}">
                            Indonesia in IMF-WBG Spring Meetings 2017
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

        <h1 class="title fw600 no-mb">
            Media Contact
        </h1>
        <div class="content">
            <div class="row" style="font-size: 13px">
                <div class="col-sm-6">
                    <b>Nufransa Wira Sakti</b><br>
                    Head of Communication and Information Services Bureau, Ministry of Finance of Indonesia<br />
                    Email : nufransa.sakti@kemenkeu.go.id<br/>
                    Phone : +62-21-3500849<br/>
                    Address : Juanda I Building, 11th floor, Dr. Wahidin Raya St No.1, Jakarta Pusat 10710<br/>
                </div>
                <div class="col-sm-6">
                    <b>Andiwiana Septonarwanto</b><br>
                    Director of Communication Department, Bank of Indonesia<br/>
                    Email : dkom@bi.go.id<br/>
                    Phone : +62-21-1500131<br/>
                    Address : MH Thamrin St No.2, Jakarta Pusat 10350<br/>
                </div>
            </div>
        </div>
    </section>

@stop
