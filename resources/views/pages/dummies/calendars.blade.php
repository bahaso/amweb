@extends( 'layouts.default.sidebar.layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 'label' => 'About', 'url' => route( 'f.abouts.imf' ) ],
            [ 'label' => 'Events' ]
        ]
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		About International Monetary Fund
	</h1>
	<div class="content">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

        <h3 style="font-weight:600;font-size:25px;">
            Jadwal Program Voyage To Indonesia
        </h3>

        <div class="event-legend">
            <div class="row">
                <div class="col-sm-3">
                    <div class="tag bg-tag-1"></div>
                    <div class="lbl">Local Workshop and Seminar</div>
                </div>
                <div class="col-sm-3">
                    <div class="tag bg-tag-2"></div>
                    <div class="lbl">FGD</div>
                </div>
                <div class="col-sm-3">
                    <div class="tag bg-tag-3"></div>
                    <div class="lbl">International Events/Meeting</div>
                </div>
                <div class="col-sm-3">
                    <div class="tag bg-tag-4"></div>
                    <div class="lbl">Launching Event</div>
                </div>
            </div>
        </div>

		<div class="faq events">
			<ul class="accordion accordion-2 row">
                <li class="col-sm-6 odd">
                    <div class="title">
                        <h4 class="inline-block mb0">January</h4>
                    </div>
                    <div class="content">
                        <ul class="event-tags">
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-2">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                            <div class="item bg-tag-3">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                            <div class="item bg-tag-4">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-2">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                        </ul>
                    </div>
                </li>
                <li class="col-sm-6 even">
                    <div class="title">
                        <h4 class="inline-block mb0">February</h4>
                    </div>
                    <div class="content">
                        <ul class="event-tags">
                            <div class="item bg-tag-4">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-2">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                        </ul>
                    </div>
                </li>
                <li class="col-sm-6 odd">
                    <div class="title">
                        <h4 class="inline-block mb0">March</h4>
                    </div>
                    <div class="content">
                        <ul class="event-tags">
                            <div class="item bg-tag-4">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-2">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                        </ul>
                    </div>
                </li>
                <li class="col-sm-6 even">
                    <div class="title">
                        <h4 class="inline-block mb0">April</h4>
                    </div>
                    <div class="content">
                        <ul class="event-tags">
                            <div class="item bg-tag-4">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-1">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                            </div>
                            <div class="item bg-tag-2">
                                <div class="inner">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </div>
                            </div>
                        </ul>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
		</div>



        <p class="no-mb">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
	</div>
</section>

@stop