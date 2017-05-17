@extends( 'layouts.default.layout' )

@section( 'content' )

	@include( '_partials._navbar')

	<section class="image-square-title mb80">
		<div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
	                <h4 class="uppercase mb16 fw600 title">IMF - WB Annual Meeting 2018</h4>
	                <p class="lead">
	                    The 2018 Annual Meetings of the International Monetary Fund (IIMF) and the World Bank Group will take place in Bali Nusa Dua, Indonesia, in October 2018
	                </p>
	            </div>
	        </div>
        </div>
	</section>


	<section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/IMF-conference.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <p class="mb0 desc">
                IMF-WB Annual Meetings (AM) is The Meetings held by the Boards of Governors of the World Bank Group and International Monetary Fund (IMF) where the participants discuss a range of issues related to poverty reduction, international economic development and finance along with other global issues. The Meetings traditionally are held in Washington two years out of three and, in order to reflect the international character of the two institutions, every third year in a different member country.
            </p>
        </div>
    </section>
    <section class="image-square right">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/world-bank-logo.png', []) !!}
            </div>
        </div>
        <div class="col-md-6 content wysiwyg">
            <p class="mb0 desc">
                The Meetings comprises of several agendas, which are: i) IMF-WB Plenary Session; ii) International Monetary and Financial Committee (IMFC) Meeting; iii) World Bank Development Committee; iv) Meetings of Economic Cooperation (G-20, G-24, MENA, Commonwealth, BRICS, IIF, WEF, dsb); v) Meetings of Banking and other Real Sectors ; vi) Seminar and International Conference; vii) Press Conference.
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/logo-AM-fix.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content wysiwyg">
            <p class="mb0 desc">
               In October 2015, Indonesia has been selected as the host of IMF – World Bank Annual Meetings 2018. The Meetings brings together Central Bank Governors and Ministers of Finance from 189 countries along with prominent persons from private sector, academics, NGO, and media. In total, there will be approximately 15,000 participants. 
            </p>
        </div>
    </section>
    
    @include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop