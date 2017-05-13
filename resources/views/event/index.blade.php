@extends('structure')
@section('content')

<section class="page-title page-title-4 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="uppercase mb0">Event</h3>
            </div>
            <div class="col-md-6 text-right">
                <ol class="breadcrumb breadcrumb-2">
                    <li>
                        <a href="{{ URL::to('/') }}">Home</a>
                    </li>
                    <li class="active">Event</li>
                </ol>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@include('parallax');

<section class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row masonry-loader">
                    <div class="col-sm-12 text-center">
                        <div class="spinner"></div>
                    </div>
                </div>
                <div class="row masonry mb40">
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32">
                            <img alt="Captioned Image" src="img/home7.jpg">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="{{ URL::to('/event/detail') }}">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                </div>
                <!--end of row-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@include('countdown')
@include('collaborator')

@stop