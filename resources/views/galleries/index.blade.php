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
                <a href="{{ route( 'f.galleries.detail' ) }}">
                    {!! html_img( 'img/am2018/public/aabbcc.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Visit Bali, Indonesia for sun, sea, and nightlife. Take a banana boat trip or dance until dawn.
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
                <a href="{{ route( 'f.galleries.detail' ) }}">
                    {!! html_img( 'img/am2018/public/facility-cater.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Visit Bali, Indonesia for sun, sea, and nightlife. Take a banana boat trip or dance until dawn.
                        </p>
                        <p>
                            12 Photos | 23 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail' ) }}">
                    {!! html_img( 'img/am2018/public/borobudur.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Visit Bali, Indonesia for sun, sea, and nightlife. Take a banana boat trip or dance until dawn.
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
                <a href="{{ route( 'f.galleries.detail' ) }}">
                    {!! html_img( 'img/am2018/public/facility-medical.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Visit Bali, Indonesia for sun, sea, and nightlife. Take a banana boat trip or dance until dawn.
                        </p>
                        <p>
                            12 Photos | 23 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row mb30">
        <div class="col-sm-6">
            <div class="image-caption mb-xs-32">
                <a href="{{ route( 'f.galleries.detail' ) }}">
                    {!! html_img( 'img/am2018/public/aabbcc.jpg', 
                    [
                        'w' => 400,
                        'h' => 225
                    ]) !!}
                    <div class="caption">
                        <p>
                            Visit Bali, Indonesia for sun, sea, and nightlife. Take a banana boat trip or dance until dawn.
                        </p>
                        <p>
                            12 Photos | 23 Views
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@stop