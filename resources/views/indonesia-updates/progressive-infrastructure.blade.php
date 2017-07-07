@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url'   => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
                'url'   => route( 'f.news.index' )
            ],
            [
                'label' => 'Progressive Infrastructure Development'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Progressive Infrastructure Development: Strong Commitment on Acceleration of Infrastructure Provision
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/indonesia-updates-6.JPG',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            The government has enacted various reforms to accelerate infrastructure provision, they are i) fiscal reforms; ii) institutional reforms; iii) 
            regulatory reforms. As a result, Indonesia has made significant progress on infrastructure projects, such as roads (Trans-Sumatera Toll Road, Merah Putih Bridge, Ambon),
            dams (Jatigede Dam, Umbulan Drinking Water Provision System, East Java), Transportation (Jakarta MRT Project, Terminal 3 Ultimate Soekarno-Hatta, 
            New Tanjung Priok Port Project, and Nop Goliat Dekai, Papua).
        </p>
        <p class="no-mb">
            <a href="{{ asset( 'uploads/public/Indonesia-Updates-May-2017-Section-6.pdf' ) }}" class="fw400 link-txt fs14">
                Download Complete Report
            </a>
        </p>
    </div>
</section>

@stop