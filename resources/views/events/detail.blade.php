@extends( 'layouts.default.layout' )

@section( 'content' )
	@include( '_partials._navbar' )


    <section>
        <div class="container">
            <div class="row mb64 mb-xs-24">
                <div class="col-sm-12 text-center">
                    <h3>Strap yourself in for ideas</h3>
                    <p class="lead">
                        Prepare for a full day of discussion from some of the web's best and brightest.
                    </p>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="">
                    <div class="tabbed-content button-tabs">
                        <ul class="tabs thirds mb64 mb-xs-24">
                            <li class="active">
                                <div class="tab-title">
                                    <span>Morning</span>
                                </div>
                                <div class="tab-content text-left">
                                    <div>
                                        <div class="overflow-hidden">
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
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
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
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
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
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
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
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
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
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
								            {!! html_img( 'img/am2018/public/penari-bali-lowres.jpg', 
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

	@include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])

@stop