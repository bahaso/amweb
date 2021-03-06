@extends( 'layouts.default.layout' )

@section( 'content' )

	@include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 'label' => 'Voyage to Indonesia', 'url' => route( 'f.abouts.vti' ) ],
            [ 'label' => 'Seminar' ]
        ]
    ])

    <section>
        <div class="container">
            <div class="row mb64 mb-xs-24">
                <div class="col-sm-12 text-center">
                    <h3>Meet our delightful panel of speakers</h3>
                    <p class="lead">
                        A collective of the web's brightest minds gathered in one place to discuss emerging trends,
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row mb80 mb-xs-24">
                <div class="col-md-10 col-md-offset-1 p0">
                    <div class="col-sm-4 text-center mb40 mb-xs-24">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
			            	[
			            		'w' => 120,
			            		'h' => 120,
			            		'class' => 'mb10'
			            	]) !!}
                        <h5 class="mb0">Alice French</h5>
                        <h6 class="uppercase">CEO @ Foundry</h6>
                    </div>
                    <div class="col-sm-4 text-center mb40 mb-xs-24">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
			            	[
			            		'w' => 120,
			            		'h' => 120,
			            		'class' => 'mb10'
			            	]) !!}
                        <h5 class="mb0">Luke Hess</h5>
                        <h6 class="uppercase">CEO @ Swatch</h6>
                    </div>
                    <div class="col-sm-4 text-center mb40 mb-xs-24">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
			            	[
			            		'w' => 120,
			            		'h' => 120,
			            		'class' => 'mb10'
			            	]) !!}
                        <h5 class="mb0">Porter Ricks</h5>
                        <h6 class="uppercase">CTO @ Biokinetics</h6>
                    </div>
                    <div class="col-sm-4 text-center mb40 mb-xs-24">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
			            	[
			            		'w' => 120,
			            		'h' => 120,
			            		'class' => 'mb10'
			            	]) !!}
                        <h5 class="mb0">Jesse Tare</h5>
                        <h6 class="uppercase">Art Director @ MINT</h6>
                    </div>
                    <div class="col-sm-4 text-center mb40 mb-xs-24">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
			            	[
			            		'w' => 120,
			            		'h' => 120,
			            		'class' => 'mb10'
			            	]) !!}
                        <h5 class="mb0">Kane Thompson</h5>
                        <h6 class="uppercase">Designer @ Machine</h6>
                    </div>
                    <div class="col-sm-4 text-center mb40 mb-xs-24">
			            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
			            	[
			            		'w' => 120,
			            		'h' => 120,
			            		'class' => 'mb10'
			            	]) !!}
                        <h5 class="mb0">Grace Adler</h5>
                        <h6 class="uppercase">Designer @ Shopify</h6>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>


    <section class="bg-secondary">
        <div class="container">
            <div class="row mb64 mb-xs-24">
                <div class="col-sm-12 text-center">
                    <h3>EVENT SCHEDULE</h3>
                    <p class="lead">
                        Prepare for a full day of discussion from some of the web's best and brightest.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="tabbed-content button-tabs">
                        <ul class="tabs thirds mb64 mb-xs-24">
                            <li class="active">
                                <div class="tab-title">
                                    <span>Morning</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
								            	[
								            		'w' => 120,
								            		'h' => 120,
								            		'class' => 'mb24 pull-left'
								            	]) !!}
                                            <div class="pull-left p32 p0-xs pt24">
                                                <h6 class="uppercase mb8 number">9:30am - 10:30am</h6>
                                                <h4>Alice French - E-Commerce & Fashion</h4>
                                            </div>
                                        </div>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                        </p>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
								            	[
								            		'w' => 120,
								            		'h' => 120,
								            		'class' => 'mb24 pull-left'
								            	]) !!}
                                            <div class="pull-left p32 p0-xs pt24">
                                                <h6 class="uppercase mb8 number">11:00am - 12:00pm</h6>
                                                <h4>Luke Hess - Better Selling Technique</h4>
                                            </div>
                                        </div>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                        </p>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tab-title">
                                    <span>Afternoon</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
								            	[
								            		'w' => 120,
								            		'h' => 120,
								            		'class' => 'mb24 pull-left'
								            	]) !!}
                                            <div class="pull-left p32 p0-xs pt24">
                                                <h6 class="uppercase mb8 number">1:30pm - 02:30pm</h6>
                                                <h4>Porter Ricks - Abstract Angulr</h4>
                                            </div>
                                        </div>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda.
                                        </p>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
								            	[
								            		'w' => 120,
								            		'h' => 120,
								            		'class' => 'mb24 pull-left'
								            	]) !!}
                                            <div class="pull-left p32 p0-xs pt24">
                                                <h6 class="uppercase mb8 number">3:00pm - 4:00pm</h6>
                                                <h4>Jesse Tare - Producing Spacious Beats</h4>
                                            </div>
                                        </div>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                        </p>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tab-title">
                                    <span>Evening</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
								            	[
								            		'w' => 120,
								            		'h' => 120,
								            		'class' => 'mb24 pull-left'
								            	]) !!}
                                            <div class="pull-left p32 p0-xs pt24">
                                                <h6 class="uppercase mb8 number">5:30pm - 06:30pm</h6>
                                                <h4>Kane Thompson - Blasting Pesky Bugs</h4>
                                            </div>
                                        </div>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                        </p>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.png', 
								            	[
								            		'w' => 120,
								            		'h' => 120,
								            		'class' => 'mb24 pull-left'
								            	]) !!}
                                            <div class="pull-left p32 p0-xs pt24">
                                                <h6 class="uppercase mb8 number">7:00pm - 08:00pm</h6>
                                                <h4>Grace Adler - Tolerating Canned Laughter</h4>
                                            </div>
                                        </div>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda.
                                        </p>
                                        <hr class="mt40 mb40 mt-xs-0 mb-xs-24">
                                    </div>
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

	@include( '_partials._sponsors' )
@stop