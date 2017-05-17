@extends('structure')
@section('content')

@include('parallax-slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb16">About Worldbank</h2>
                <p class = "mb0">
                    WB was found on July 1944 (Bretton Woods Conference in 1st-22nd July 1944), and was officially established in 1 May 1945. WB Headquarter is located in Washington DC, and have more than 10.000 staffs in over 120 offices around the world.
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
            <img alt="image" class="background-image" src="{{ asset('img/world-bank-bg.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            WB is an international financial institution that provides lending to developing countries under capital injection program with a purpose to reduce poverty. All decisions have to be directed to promoting foreign investment, international trade, and facilitate capital investment.
        </p>
    </div>
</section>

<section class="image-square right">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/world-bank-logo.png') }}" />
        </div>
    </div>
    <div class="col-md-6 content">
        <p class="mb0">
            WB consists of 5 organizations, which are:<br>
            - The International Bank for Reconstruction and Development (IBRD) was found in 1945, aimed to faciilitate lending, development assistance for middle-income countries.<br><br>
            - The International Development Association (iDA) was found in 1960, aimed to facilitate soft credit, and development partnership for developing countries.<br><br>
            - The International Finance Corporation (IFC) was found in 1956, is the world’s biggest development institution that focuses on private sector.            
        </p>
    </div>
</section>

<section class="image-square left">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/logo-am-fix.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            - The Multilateral Investment Guarantee Agency (MIGA) was found in 1988, aimed to promote FDI towards developing countries to support the economic growth, reduce proverty, and raise the living standard.<br><br>
            - The International Centre for Settlement of Investment Disputes (ICSID) was found in 1965, aimed to facilitate arbitration as well as investment problems in member countries.
        </p>
    </div>
</section>

<section class="image-square right">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/world-bank-bg.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 content">
        <p class="mb0">
            On15 April 1954, Indonesia became the member of IBRD (according to Act No. 5 1954 on Indonesia’s Membership in IMF and IBRD), but due to political situation, Indonesia withdrew its membership on 17th August 1965. Indonesia became the member again in September 1966 as the transition from Orde Lama to Orde Baru took place.
        </p>
    </div>
</section>

@include('collaborator')

@stop