@extends('structure')
@section('content')

<section class="element-to-be-covered parallax" style = "height: 720px">
    <div class="background-image-holder">
        <img alt="Image" src="{{ asset('img/logo_vti.jpeg') }}" />
    </div>
    
    <div class="container">
        <div class="row">
            ...
        </div>
    </div>
</section>

<section class="bg-secondary page-title page-title-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb100">{{ trans('about_vti.page_title') }}</h4>
                
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>  

<section class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                {{ trans('about_vti.page_description') }}
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>  

@stop