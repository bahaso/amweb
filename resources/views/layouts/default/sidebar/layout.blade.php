@extends( 'layouts.default.layout' )

@section( 'content' )

    @yield( 'top_content' )

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3 mb-xs-24 rhs-content">
                @yield( 'rhs_content' )
            </div>
            <!--end of nine col-->
            <div class="col-md-3 col-md-pull-9 hidden-sm sidebar lhs-content">
            	@include( '_partials._sidebar' )
            </div>
            <!--end of sidebar-->
        </div>
        <!--end of container row-->
    </div>
    <!--end of container-->

    @include( '_partials._sponsors',
    [
        'class' => 'bg-secondary'
    ])

@stop