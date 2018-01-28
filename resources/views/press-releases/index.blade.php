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
                    @foreach( $lists as $ls )
                    <tr>
                        <td>{{ $ls->date }}</td>
                        <td>
                            <a href="{{ route( 'f.press-releases.detail', [ $ls->id, str_slug($ls->title_short) ]) }}">
                                {{ $ls->title_short }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
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
