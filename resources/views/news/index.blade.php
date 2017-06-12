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

        <div class="featured-wrapper">
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
        </div>

        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 1, 'title' ]) }}">
                <time datetime="2015/07/08 08:05">Kamis, Juni 8, 2017 - 08:05</time>
                <h2 class="title">
                    Global Economic Growth is Set to Strengthen as Outlook Brightens
                </h2>
                <p class="txt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
            </a>
        </div>

        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 1, 'title' ]) }}">
                <time datetime="2015/07/08 08:05">Kamis, Juni 8, 2017 - 08:05</time>
                <h2 class="title">
                    Global Economic Growth is Set to Strengthen as Outlook Brightens
                </h2>
                <p class="txt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
            </a>
        </div>

        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 1, 'title' ]) }}">
                <time datetime="2015/07/08 08:05">Kamis, Juni 8, 2017 - 08:05</time>
                <h2 class="title">
                    Global Economic Growth is Set to Strengthen as Outlook Brightens
                </h2>
                <p class="txt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
            </a>
        </div>

        <div class="news-item">
            <a href="{{ route( 'f.news.detail', [ 1, 'title' ]) }}">
                <time datetime="2015/07/08 08:05">Kamis, Juni 8, 2017 - 08:05</time>
                <h2 class="title">
                    Global Economic Growth is Set to Strengthen as Outlook Brightens
                </h2>
                <p class="txt">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
            </a>
        </div>

    </div>
</section>

@stop