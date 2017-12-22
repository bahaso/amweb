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
                'label' => 'Bali safe, Indonesia Ready To Host',
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
                        Bali Aman, Indonesia Siap Menjadi Tuan Rumah IMF-WBG Annual Meetings 2018
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
                        December 22, 2017
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
                        Denpasar, 22 Desember 2017 –  Bali tetap aman untuk menyelenggarakan Annual Meetings International Monetary Fund - World Bank Group 2018 (AM 2018) pada 8-14 Oktober 2018. Berdasarkan informasi dari otoritas kementerian dan lembaga terkait, Status Level IV (Awas) hanya berlaku pada radius 8 - 10 km dari Gunung Agung. Di luar area tersebut, semua aktivitas di wilayah Bali berjalan normal sehingga aman untuk aktivitas kunjungan wisatawan. Untuk kepentingan penyelenggaraan AM 2018, Panitia Nasional terus memonitor aktivitas Gunung Agung dan selalu berkomunikasi dengan Meetings Team Secretariat (MTS) International Monetary Fund - World Bank Group.
                        <br>
                        Panitia Nasional (PanNas) AM 2018 memastikan seluruh persiapan penyelenggaraan AM 2018 berjalan sesuai rencana dan target yang ditetapkan bersama dengan MTS. Untuk memastikan persiapan tersebut, MTS akan berkunjung ke Bali pada 29 Januari s.d. 9 Februari 2018 untuk melakukan pembahasan bersama Panitia Nasional terutama terkait aspek keamanan dan mitigasi risiko atas aktivitas Gunung Agung.
                        <br>
                        Menuju AM 2018, Indonesia telah melakukan berbagai persiapan, termasuk pembangunan infrastruktur di Bali. Dengan pembangunan underpass ke Bandara, Tanjung Benoa Cruise Terminal dan Tempat Pembuangan Akhir Suwung, AM 2018 diharapkan akan berjalan lancar dan nyaman. Dalam jangka panjang, infrastruktur yang baik akan memberikan dampak positif bagi Bali yang sumber utama perekonomiannya dari sektor pariwisata.
                        <br>
                        Perkembangan terkini Annual Meetings International Monetary Fund - World Bank Group 2018 (AM 2018) dapat dilihat dari situs resmi www.am2018bali.go.id yang akan memuat informasi terkini terkait penyelenggaraan AM 2018. Informasi detail juga tersedia melalui media sosial:
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
</section>

@stop