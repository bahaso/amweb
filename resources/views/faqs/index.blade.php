@extends( 'layouts.default.layout' )

@section( 'content' )
	@include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'About', 
                'url' => route( 'f.abouts.imf_world_bank' ) 
            ],
            [ 
                'label' => 'FAQ', 
            ]
        ]
    ])

	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="mb16">FAQ</h4>
                    <p class="lead mb64">
                        We'll do our best to answer.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <ul class="accordion accordion-2">
                        <li>
                            <div class="title">
                                <h4 class="inline-block mb0">Lorem ipsum dolor sit amet, consectetur</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4 class="inline-block mb0">Lorem ipsum dolor sit amet, consectetur</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4 class="inline-block mb0">Lorem ipsum dolor sit amet, consectetur</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4 class="inline-block mb0">Lorem ipsum dolor sit amet, consectetur</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <h4 class="inline-block mb0">Lorem ipsum dolor sit amet, consectetur</h4>
                            </div>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <!--end of accordion-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

	@include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop