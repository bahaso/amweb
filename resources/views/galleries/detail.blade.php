@extends( 'layouts.default.layout' )

@section( 'content' )

    @include( '_partials._navbar',
    [
        'navs' =>
        [
            [ 'label' => 'Media and Publication', 'url' => route( 'f.galleries.detail' )],
            [ 'label' => 'Gallery' ]
        ]
    ])

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="uppercase mb16 fw600">Gallery</h4>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="image-slider slider-thumb-controls controls-inside">
                        <ul class="slides">
                            <li>
                                {!! html_img( 'img/cover12.jpg', []) !!}
                            </li>
                            <li>
                                {!! html_img( 'img/cover15.jpg', []) !!}
                            </li>
                            <li>
                                {!! html_img( 'img/cover16.jpg', []) !!}
                            </li>
                            <li>
                                {!! html_img( 'img/cover14.jpg', []) !!}
                            </li>
                        </ul>
                    </div>
                    <!--end of image slider-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="uppercase mb16">Gallery</h4>
                    <p class="lead mb64">
                        A simple lightbox grid with square thumbnails.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="lightbox-grid square-thumbs" data-gallery-title="Gallery">
                        <ul>
                            <li>
                                <a href="img/cover1.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/cover1.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/home12.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/home12.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/home14.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/home14.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}mg/home14.jpg" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/home17.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/home17.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/cover5.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/cover5.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/cover6.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/cover6.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/cover7.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/cover7.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/cover8.jpg" data-lightbox="true">
                                    <div class="background-image-holder">
                                        {!! html_img( 'img/cover8.jpg',
                                            [
                                                'class' => 'background-image'
                                            ]) !!}
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end of lightbox gallery-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="uppercase mb16">Instagram Grid</h4>
                    <p class="lead mb64">
                        Can be connected with Instagram Account.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="instafeed grid-gallery" data-user-name="mrareweb">
                        <ul></ul>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    @include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop