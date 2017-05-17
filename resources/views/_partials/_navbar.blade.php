@if( isset( $navs ))
@php $len   = count( $navs ) @endphp
@php $last  = array_last( $navs ) @endphp
<section class="page-title page-title-4 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="uppercase mb0">
                    <i class="ti-menu-alt"></i>{{ array_get( $last, 'label' ) }}</h3>
            </div>
            <div class="col-md-6 text-right">
                <ol class="breadcrumb breadcrumb-2">

                        <li>
                            <a href="{{ route( 'f.home' ) }}">Home</a>
                        </li>

                        @foreach( $navs as $i=>$n )
                        @if( $i == $len - 1 )
                        <li class="active">{{ array_get( $n, 'label' ) }}</li>

                        @else
                        <li class="{{ html_class_last( $i, $len, 'active' ) }}">
                            <a href="index.html">{{ array_get( $n, 'label' ) }}</a>
                        </li>

                        @endif
                        @endforeach
                </ol>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endif