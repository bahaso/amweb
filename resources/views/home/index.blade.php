@extends('structure')
@section('content')

<section class="element-to-be-covered parallax" style = "height: 720px">
    <div class="background-image-holder">
        <img alt="Image" src="{{ asset('img/logo_am.jpeg') }}" />
    </div>
    
    <div class="container">
        <div class="row">
            ...
        </div>
    </div>
</section>


<section class="bg-secondary">
    <div class="container">
        <div class="col-md-9 col-md-push-3">
            <div class="row masonry-loader">
                <div class="col-sm-12 text-center">
                    <div class="spinner"></div>
                </div>
            </div>
            <div class="row masonry mb40">
                <div class="col-sm-6 post-snippet masonry-item">
                    <a href="#">
                        <img alt="Post Image" src="{{ asset('img/blog-single-3.jpg') }}" />
                    </a>
                    <div class="inner">
                        <a href="#">
                            <h5 class="mb0">A simple image post to start off an excellent masonry blog layout.</h5>
                            <span class="inline-block mb16">September 23, 2015</span>
                        </a>
                        <hr>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                        </p>
                        <a class="btn btn-sm" href="#">Read More</a>
                        <ul class="tags pull-right">
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of snippet-->
                <div class="col-sm-6 post-snippet masonry-item">
                    <iframe class="mb0" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/167666836&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                    <div class="inner">
                        <a href="#">
                            <h5 class="mb0">A lovely audio post added for good measure. Share the tunes!</h5>
                            <span class="inline-block mb16">September 21, 2015</span>
                        </a>
                        <hr>
                        <a class="btn btn-sm" href="#">Read More</a>
                        <ul class="tags pull-right">
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of snippet-->
                <div class="col-sm-6 post-snippet masonry-item">
                    <a href="#">
                        <img alt="Post Image" src="{{ asset('img/blog-single-2.jpg') }}" />
                    </a>
                    <div class="inner">
                        <a href="#">
                            <h5 class="mb0">A post that features a beautiful portrait sized image.</h5>
                            <span class="inline-block mb16">September 16, 2015</span>
                        </a>
                        <hr>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                        </p>
                        <a class="btn btn-sm" href="#">Read More</a>
                        <ul class="tags pull-right">
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of snippet-->
                <div class="col-sm-6 post-snippet masonry-item">
                    <div class="embed-video-container embed-responsive embed-responsive-16by9 mb0">
                        <iframe class="embed-responsive-item mb0" src="http://player.vimeo.com/video/25737856?badge=0&title=0&byline=0&title=0"></iframe>
                    </div>
                    <!--end of embed video container-->
                    <div class="inner">
                        <a href="#">
                            <h5 class="mb0">An embedded video for your enjoyment.</h5>
                            <span class="inline-block mb16">September 7, 2015</span>
                        </a>
                        <hr>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                        </p>
                        <a class="btn btn-sm" href="#">Read More</a>
                        <ul class="tags pull-right">
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-sm btn-icon" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of snippet-->
                <div class="col-sm-6 post-snippet masonry-item">
                    <a href="#">
                        <blockquote>
                            Here's a lovely quote post you can use to say something poignant or important.
                            <span class="author">Important Person - September 21, 2015</span>
                        </blockquote>
                    </a>
                </div>
                <!--end of snippet-->
            </div>
            <!--end of row-->
            <div class="row">
                <div class="text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of 9 col-->
        <div class="col-md-3 col-md-pull-9 hidden-sm">
            
            <div class="widget">
                <h6 class="title">Latest Updates</h6>
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
            <!--end of widget-->
        </div>
        <!--end of sidebar-->
    </div>
    <!--end of container-->
</section>

<section class="bg-secondary page-title page-title-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb100">INFORMATION</h4>
                <div class="tabbed-content button-tabs">
                    <ul class="tabs">
                        <li class="active">
                            <div class="tab-title">
                                <span>History</span>
                            </div>
                            <div class="tab-content">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="tab-title">
                                <span>Approach</span>
                            </div>
                            <div class="tab-content">
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="tab-title">
                                <span>Culture</span>
                            </div>
                            <div class="tab-content">
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="tab-title">
                                <span>Method</span>
                            </div>
                            <div class="tab-content">
                                <p>
                                    Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--end of button tabs-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@stop