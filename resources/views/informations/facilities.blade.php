@extends( 'informations._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Information', 
                'url' => route( 'f.informations.hotel' ) 
            ],
            [ 
                'label' => 'Other Facilities', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Other Supporting Facilities
	</h1>
	<div class="content">
		<p>
			{!! html_img( 'img/am2018/public/facility-medical.jpg',
			[
				'w' => '100%',
				'h' => 'auto'
			]) !!}
		</p>
		<h2 class="sub-title">
			Medical Services
		</h2>
		<p>
			The ITDC has an international-standard hospital - the BIMC HOSPITAL Nusa Dua - for use in the event of emergency. 
			The designated hospital has an excellent emergency department staffed 24 hours per day by emergency doctors. 
			Should evacuation be necessary, BIMC HOSPITAL can handle all arrangements. 
			It is fully equipped and prepared to take care of even the most severe medical conditions. 
			<a href="#">Please call BIMC Siloam Nusa Dua Telp. 
			+62 361 3000 911 to contact the clinic.</a>
		</p>
		
		<h2 class="sub-title">
			Convenience Stores
		</h2>
		<p>
			{!! html_img( 'img/am2018/public/facility-store.jpg',
			[
				'w' => '401',
				'h' => '262',
				'style' => 'float:left;margin:0 15px 15px 0;'
			]) !!}

			Convenience stores are available both inside and outside of the ITDC. The ITDC also has an outdoor mall, an up-market all-in-one shopping haven in the midst of the luxurious resort compound. Alternatively, facing the main entrance gate on Jalan bypass Ngurah Rai and the back entrance gate on Jalan Pantai Mengiat, participants can venture out to art shops managed by local people.
			About the inside shopping mall can be
			<a href="https://www.itdc.co.id/the-nusa-dua/attractions/shop/bali-collection/">found here</a>.

		</p>

		<h2 class="sub-title">
			Catering Services
		</h2>
		<p>
			{!! html_img( 'img/am2018/public/facility-cater.jpg',
			[
				'w' => '397',
				'h' => '327',
				'style' => 'float:left;margin:0 15px 15px 0;'
			]) !!}
			Catering services tailored to the needs of delegates are available. Bali will offer international and local cuisine coupled with international chefs. 
		</p>
		
		<h2 class="sub-title">
			Business Centres
		</h2>
		<p>
			All hotels will provide business centres depending on their working hours. For free business and secretarial needs, all participants can use secretarial support facilities.
		</p>
	</div>
</section>

@stop