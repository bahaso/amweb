@extends( 'galleries._layout' )

@section( 'head_page_css' )
    @parent
    {!! html_css( 'gallery-custom.css', 'css/fo' ) !!}
@stop

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
                'label' => 'Photo Gallery',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail',[ 6, 'indonesia-infrastructure-finance-forum'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/IIF-forum/LWP_5572.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                           Indonesia Infrastructure Finance Forum, 25 Juli 2017, Fairmont hotel - Jakarta. 
                        </p>
                        <p>
                            13 Photos | 52 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail',[ 5, 'imf-tax-Conference'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/imf-tax-conference/05R9823.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                           Joint IMF-Indonesia High-Level Conference, International Taxation in Asia
                        </p>
                        <p>
                            10 Photos | 72 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail', [ 1, 'land-of-the-gods']) }}">
                    {!! html_img( 'img/am2018/public/upload/land-gods/land-gods-5.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Also known as the Land of the Gods Gallery
                        </p>
                        <p>
                            12 Photos | 23 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail', [ 2, 'medan'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/medan/medan-3.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Medan is best known as the gateway Gallery
                        </p>
                        <p>
                            3 Photos | 17 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail',[ 3, 'voya-to-indonesia'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/voya-indonesia/voya-1.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Voyage To Indonesia-Promotion on the occasion of Indonesia's position as host country for the 2018
                        </p>
                        <p>
                            4 Photos | 20 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail', [ 4, 'yogyakarta'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/yogyakarta/yogya-2.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Yogyakarta, together with its twin city Surakarta Gallery
                        </p>
                        <p>
                            3 Photos | 19 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail',[ 7, 'Building-bonds-accross-asia'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/building_bonds_across_asia/bond-1.JPG',
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Building Bonds across Asia, Europe, and Beyond. Preston Auditorium WB - IMF- WBG Annual Meetings 2017
                        </p>
                        <p>
                            15 Photos | 20 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail', [ 8, 'cnn_debate_on_the_global'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/cnn_debate_on_the_global/cnn-1.JPG',
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            CNN Debate on the Global Economy How to Strengthen Global Economy - IMF - WBG Annual Meetings 2017
                        </p>
                        <p>
                            29 Photos | 19 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail',[ 9, 'global_press_briefing_vti'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/global_press_briefing_vti/gp-vti-1.JPG',
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Global Press Briefing Voyage to Indonesia 12 Oct 2017 - IMF - WBG Annual Meetings 2017
                        </p>
                        <p>
                            45 Photos | 20 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail', [ 10, 'high_level_special_session'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/high_level_special_session/hlss-1.JPG',
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            High Level Special Session on Collaborative Behaviors between the Water and Health and Nutrition Sectors to Reduce Childhood Stunting - IMF - WBG Annual Meetings 2017
                        </p>
                        <p>
                            16 Photos | 19 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail',[ 11, 'indonesia_USINDO_gala_dinner'] ) }}">
                    {!! html_img( 'img/am2018/public/upload/indonesia_USINDO_gala_dinner/indonesia_USINDO_gd-1.JPG',
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Indonesia-USINDO Gala Dinner. IMF - WBG Annual Meetings 2017
                        </p>
                        <p>
                            9 Photos | 20 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
</div>

@stop