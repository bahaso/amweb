@extends( 'layouts.default.layout' )

@section( 'content' )

	@include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 'label' => 'Main Events' ]
        ]
    ])

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="mb64 mb-xs-32 fw600">Main Events</h3>
                </div>
            </div>
            <!--end of row-->
            <div class="row masonry">
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">August 3, 2015 in inspiration</span>
                        <h4 class="mb120">Building effective design systems</h4>
                        <a href="{{ route( 'f.events.detail', [ 1, 'topic' ] ) }}" class="mb0 right">
                            <h6 class="uppercase mb0 color-link fade-on-hover">Learn More
                                <i class="ti-arrow-right"></i>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">July 21, 2015 in design</span>
                        <h4 class="mb120">Selecting the perfect font for the job. Our top tips.</h4>
                        <a href="{{ route( 'f.events.detail', [ 1, 'topic' ] ) }}" class="mb0 right">
                            <h6 class="uppercase mb0 color-link fade-on-hover">Learn More
                                <i class="ti-arrow-right"></i>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">July 29, 2015 in design</span>
                        <h4 class="mb120">Achieving total visual harmony</h4>
                        <a href="{{ route( 'f.events.detail', [ 1, 'topic' ] ) }}" class="mb0 right">
                            <h6 class="uppercase mb0 color-link fade-on-hover">Learn More
                                <i class="ti-arrow-right"></i>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">July 14, 2015 in interface</span>
                        <h4 class="mb120">A closer look at case studies</h4>
                        <a href="{{ route( 'f.events.detail', [ 1, 'topic' ] ) }}" class="mb0 right">
                            <h6 class="uppercase mb0 color-link fade-on-hover">Learn More
                                <i class="ti-arrow-right"></i>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">June 25, 2015 in music</span>
                        <h4 class="mb120">The ultimate office mixtape, Foundry edition</h4>
                        <a href="{{ route( 'f.events.detail', [ 1, 'topic' ] ) }}" class="mb0 right">
                            <h6 class="uppercase mb0 color-link fade-on-hover">Learn More
                                <i class="ti-arrow-right"></i>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="masonry-item col-md-4 col-sm-6">
                    <div class="feature bg-secondary p32 pt40 pb40 mb0">
                        <span class="fade-1-4 mb16 display-block">June 17, 2015 in lifestyle</span>
                        <h4 class="mb120">A guide to post-week undwinding</h4>
                        <a href="{{ route( 'f.events.detail', [ 1, 'topic' ] ) }}" class="mb0 right">
                            <h6 class="uppercase mb0 color-link fade-on-hover">Learn More
                                <i class="ti-arrow-right"></i>
                            </h6>
                        </a>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

	@include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop