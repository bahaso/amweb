@extends( 'galleries._layout' )

@section( 'foot_vendor_js' )
    @parent
    {!! html_js( 'featured-news.js' ) !!}
@stop

@section( 'head_page_css' )
    @parent
    {!! html_css( 'news-index.css', 'css/fo' ) !!}
@stop

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
                'label' => 'News', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        News
    </h1>
    <div class="content">
        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 1, 'minister-of-finance' ]) }}">
                <h2 class="title">
                    Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings
                </h2>
                <p class="txt">
                    Washington D.C., 17/04/16 – Minister of Finance Bambang P.S. Brodjonegoro, as Chairman of Development Commitee (DC), chaired the meeting of Joint Ministerial Commitee of the Boards of Governors of the Bank and The Fund on the Transfer of Real Resources to Developing Countries on Saturday April 16...
                </p>
            </a>
        </div>
        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 2, 'students-in-indonesia' ]) }}">
                <h2 class="title">
                    Students in Indonesia Know That For Better Basic Services, Their Country Needs More Revenue
                </h2>
                <p class="txt">
                    Jakarta, Indonesia, June 6, 2017 – “I want my future children to have better health and education services,” says Erikson Wijaya, a student from South Sulawesi who is in his final year at the Jenderal Soedirman University in Purwokerto, Central Java...
                </p>
            </a>
        </div>
    </div>
</section>

@stop