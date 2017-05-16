@extends('structure')
@section('content')

@include('parallax')

<section class="bg-secondary">
    <div class="container">
        <div class = "row">
            <div class = "col-md-3">   
                <img alt="Image" src="{{ asset('img/logo_vti_pad.png') }}" draggable="false" class = "img-placeholder">
            </div>
            <div class = "col-md-9 feature bordered">
                <h4 class="uppercase mb100">Voyage To Indonesia</h4>
                <p>
                    "Voyage To Indonesia" (VTI) is the big theme of IMF - WB Annual Meetings 2018 preparation, taken form the essence of 'voyage' as a hourney toward new place and discovery. The objective is to leverage the benefits of the event for national interest and International community.
                </p>
                <a class="btn btn-sm" href="#">Read More</a>
            </div>
        </div>

        <div class = "row">
            <div class="col-md-9 col-md-push-3">
                <div class="row masonry-loader">
                    <div class="col-sm-12 text-center">
                        <div class="spinner"></div>
                    </div>
                </div>
                <div class="row masonry mb40">
                    <div class="col-sm-6 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32 img-home">
                            <img alt="Captioned Image" src="img/home_1.jpg" class = "img-home">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-6 post-snippet masonry-item">
                        <div class="image-caption cast-shadow mb-xs-32 ">
                            <img alt="Captioned Image" src="img/home_2.jpg" class = "img-home">
                            <div class="caption text-center">
                                <p>
                                    <a class="btn btn-md btn-filled" href="#">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of snippet-->
                </div>
                <!--end of row-->
            </div>
            <!--end of 9 col-->
            <div class="col-md-3 col-md-pull-9 hidden-sm">
                <div class="widget">
                    <h6 class="title">Recent Posts</h6>
                    <hr>
                    <ul class="link-list recent-posts">
                        <li>
                            <a href="#">A simple image post for starters</a>
                            <span class="date">September 23, 2015</span>
                        </li>
                        <li>
                            <a href="#">An audio post for good measure</a>
                            <span class="date">September 19, 2015</span>
                        </li>
                        <li>
                            <a href="#">A thoguhtful blockquote post on life</a>
                            <span class="date">September 07, 2015</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of sidebar-->
        </div>
    </div>
    <!--end of container-->
</section>

@include('countdown')
@include('collaborator')

@stop