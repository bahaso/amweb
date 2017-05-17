@extends('structure')
@section('content')

@include('parallax-slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase mb16">IMF - WB Annual Meeting 2018</h2>
                <p class = "mb0">
                    The 2018 Annual Meetings of the International Monetary Fund (IMF) and the World Bank Group will take place in Bali Nusa Dua, Indonesia, in October 2018.
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
            <img alt="image" class="background-image" src="{{ asset('img/imf1.jpg') }}" />
        </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
        <p class="mb0">
            IMF-WB Annual Meetings (AM) is The Meetings held by the Boards of Governors of the World Bank Group and International Monetary Fund (IMF) where the participants discuss a range of issues related to poverty reduction, international economic development and finance along with other global issues. The Meetings traditionally are held in Washington two years out of three and, in order to reflect the international character of the two institutions, every third year in a different member country.
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
            The Meetings comprises of several agendas, which are: i) IMF-WB Plenary Session; ii) International Monetary and Financial Committee (IMFC) Meeting; iii) World Bank Development Committee; iv) Meetings of Economic Cooperation (G-20, G-24, MENA, Commonwealth, BRICS, IIF, WEF, dsb); v) Meetings of Banking and other Real Sectors ; vi) Seminar and International Conference; vii) Press Conference.
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
            In October 2015, Indonesia has been selected as the host of IMF – World Bank Annual Meetings 2018. The Meetings brings together Central Bank Governors and Ministers of Finance from 189 countries along with prominent persons from private sector, academics, NGO, and media. In total, there will be approximately 15,000 participants.
        </p>
    </div>
</section>

@include('collaborator')

@stop