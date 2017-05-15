@extends('structure')
@section('content')

@include('parallax')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb16">International Monetary Fund</h2>
                <p class = "mb0">
                    IMF was found in July 1945 during Bretton Woods Conference, New Hampshire, US, where 45 government representatives agreed on an economic cooperation framework that was designed to prevent 1930's Great Depression from happening again. IMF Headquarter is located in Washington DC, US.
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
            <img alt="image" class="background-image" src="{{ asset('img/small1.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            IMF comprises of 189 member countries, in which each of the members is obliged to contribute financially that will further determine quota and voting rights in IMF. Each member is entitled to certain quota that reflect their relative positions to the other members. IMF also collects financial resources from its members that can be lended to member that is going through balance of payment difficulty.
        </p>
    </div>
</section>

<section class="image-square right">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/small2.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 content">
        <p class="mb0">
            IMF is an international organization that aims to:<br>
            - Endorse international cooperation and maintain financial stability<br>
            - Facilitate international trade<br>
            - Stimulate the sustainable economic growth as well as workforce absorption<br>
            - Reduce poverty in the world
            </ul>
        </p>
    </div>
</section>

<section class="image-square left">
    <div class="col-md-6 image">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{ asset('img/small1.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            Indonesia's membership in IMF, the process wasn't directly from Indonesia's membership in UN - 28<sup>th</sup> September 1950. On 10<sup>th</sup> September 1952, Board of Governors of the IMF and IBRD (World Bank) agred on resolution of terms and conditions upon Indonesia's membership. Indonesia accepted it and signed in mid 1953 (officially became the member), it was then legalized through Act No. 5 1954 on Indoneia's Membership in IMF and IBRD (UU No 5 Tahun 1954 tentang Keanggotaan RI dari IMF dan IBRD).
        </p>
    </div>
</section>

@stop