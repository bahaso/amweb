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
                'label' => 'Gallery', 
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
                            Voya To Indonesia-Promotion on the occasion of Indonesia's position as host country for the 2018 IMF-World Bank Annual Meetings in Bali
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
</div>

@stop