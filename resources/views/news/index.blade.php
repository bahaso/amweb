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

<!--         <div class="featured-wrapper">
            <a href="{{ route( 'f.news.detail', [ 1, 'title' ]) }}">
            <div class="featured-news">
                <div class="cover-img">
                    {!! html_img( 'img/am2018/public/full-image.jpg',
                    [
                        'w' => '100%',
                        'h' => 'auto'
                    ]) !!}
                </div>
                <div class="col-md-6 txt-featured">
                    <h3 class="title">
                        Global Economic Growth Is Set To Stenghthen As Outlook Brightens
                    </h3>
                    <p class="txt no-mb">
                        The June Global Economic Prospects forecasts global economic growth to strengthen in 2017, supported byu a pickup in manufacturing and trade, rising confidence, benign financing conditions.
                    </p>
                </div>
            </div>
            </a>
        </div> -->

        <div class="featured-wrapper">
            <a href="{{ route( 'f.news.detail', [ 1, 'minister-of-finance' ]) }}">
            <div class="featured-news">
                <div class="cover-img">
                    {!! html_img( 'img/am2018/public/minister-of-finance.jpg',
                    [
                        'w' => '100%',
                        'h' => 'auto'
                    ]) !!}
                </div>
                <div class="col-md-6 txt-featured">
                    <h3 class="title">
                        Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings
                    </h3>
                    <p class="txt no-mb">
                        Washington D.C., 17/04/16 – Minister of Finance Bambang P.S. Brodjonegoro, as Chairman of Development Commitee (DC), chaired the meeting of Joint Ministerial Commitee of the Boards of Governors of the Bank and The Fund on the Transfer of Real Resources to Developing Countries on Saturday April 16, 2016 in the Preston Auditorium, Main Complex of the World Bank, Washington D.C. USA.
                    </p>
                </div>
            </div>
            </a>
        </div>

<!--         <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 1, 'title' ]) }}">
                <time datetime="2015/07/08 08:05">Kamis, Juni 8, 2017 - 08:05</time>
                <h2 class="title">
                    Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings
                </h2>
                <p class="txt">
                    Washington D.C., 17/04/16 – Minister of Finance Bambang P.S. Brodjonegoro, as Chairman of Development Commitee (DC), chaired the meeting of Joint Ministerial Commitee of the Boards of Governors of the Bank and The Fund on the Transfer of Real Resources to Developing Countries on Saturday April 16, 2016 in the Preston Auditorium, Main Complex of the World Bank, Washington D.C. USA.
                </p>
            </a>
        </div> -->

        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 2, 'students-in-indonesia' ]) }}">
                <time datetime="2015/07/08 08:05">Kamis, Juni 8, 2017 - 08:05</time>
                <h2 class="title">
                    Students in Indonesia Know That For Better Basic Services, Their Country Needs More Revenue
                </h2>
                <p class="txt">
                    Jakarta, Indonesia, June 6, 2017 – “I want my future children to have better health and education services,” says Erikson Wijaya, a student from South Sulawesi who is in his final year at the Jenderal Soedirman University in Purwokerto, Central Java. “And good public financial management can help.” 
                </p>
            </a>
        </div>

    </div>
</section>

@stop