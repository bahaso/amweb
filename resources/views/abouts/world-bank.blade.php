@extends( 'layouts.default.layout' )

@section( 'content' )

	@include( '_partials._navbar')

	<section class="image-square-title mb80">
		<div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
	                <h4 class="uppercase mb16 fw600 title">About Worldbank</h4>
	                <p class="lead">
	                    WB was found on July 1944 (Bretton Woods Conference in 1st-22nd July 1944), and was officially established in 1 May 1945. WB Headquarter is located in Washington DC, and have more than 10.000 staffs in over 120 offices around the world.
	                </p>
	            </div>
	        </div>
        </div>
	</section>


	<section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/world-bank-20140807.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <p class="mb0 desc">
                WB is an international financial institution that provides lending to developing countries under capital injection program with a purpose to reduce poverty. All decisions have to be directed to promoting foreign investment, international trade, and facilitate capital investment.
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
                WB consists of 5 organizations, which are:
                <ul>
                    <li>The International Bank for Reconstruction and Development (IBRD) was found in 1945, aimed to faciilitate lending, development assistance for middle-income countries.</li>
                    <li>The International Development Association (iDA) was found in 1960, aimed to facilitate soft credit, and development partnership for developing countries.</li>
                    <li>The International Finance Corporation (IFC) was found in 1956, is the world’s biggest development institution that focuses on private sector.</li>
                </ul>
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
				{!! html_img( 'img/am2018/public/logo-imf.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content wysiwyg">
            <p class="mb0 desc">
                <ul>
                    <li>The Multilateral Investment Guarantee Agency (MIGA) was found in 1988, aimed to promote FDI towards developing countries to support the economic growth, reduce proverty, and raise the living standard.</li>
                    <li>The International Centre for Settlement of Investment Disputes (ICSID) was found in 1965, aimed to facilitate arbitration as well as investment problems in member countries.</li>
                </ul>
            </p>
        </div>
    </section>
    <section class="image-square right">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                {!! html_img( 'img/am2018/public/world-bank-20140807.jpg', []) !!}
            </div>
        </div>
        <div class="col-md-6 content">
            <p class="mb0 desc">
                On 15 April 1954, Indonesia became the member of IBRD (according to Act No. 5 1954 on Indonesia’s Membership in IMF and IBRD), but due to political situation, Indonesia withdrew its membership on 17th August 1965. Indonesia became the member again in September 1966 as the transition from Orde Lama to Orde Baru took place.
            </p>
        </div>
    </section>
    
    @include( '_partials._sponsors', [ 'class' => 'bg-secondary' ])
@stop