@extends('structure')
@section('content')

@include('parallax-slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb16">About VTI</h2>
                <p class = "mb0">
                    Voyage To Indonesia
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section class="image-square left">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/logo-am-fix.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            Every three consecutive years, International Monetary Fund (IMF) and World Bank Group (WB) conduct an annual meeting located outside the Headquarters in Washington DC. In 2015, Indonesia has been appointed to be the host country of 2018 Annual Meeting. Naturally, Ministry of Finance and Bank Indonesia (Indonesian Central Bank) become the core organizing committee of the biggest international conference which would be held in Nusa Dua, Bali.
        </p>
    </div>
</section>

<section class="image-square right">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/Borobudur.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 content">
        <p class="mb0">
            Indonesia would like to leverage this opportunity to deliver a bigger impact for national and international interest by show casing Indonesia’s achievement in social and economy, as well as cultural richness, tourism and magnificent natural scenery. Before hosting 2018 Annual Meeting, Indonesia organizes a prelude event, aiming to develop public enthusiasm, in domestic, regional, and international scale. The series of event called “Voyage to Indonesia” or VTI.
        </p>
    </div>
</section>

<section class="image-square left">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/vti3.jpeg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            Some of the main activities of VTI for global community are exhibitions in IMF-WB Spring Annual Meeting 2017 and IMF-WB Fall Annual Meeting 2017 in Washington DC. Besides that, there are also cross-channel 
        </p>
    </div>
</section>

@include('collaborator')

@stop