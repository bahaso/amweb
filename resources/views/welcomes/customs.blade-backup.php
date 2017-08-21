@extends( 'welcomes._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Welcome To Indonesia', 
                'url' => route( 'f.welcomes.visa' ) 
            ],
            [ 
                'label' => 'Customs', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Customs 
	</h1>
	<div class="content">
		<p class="no-mb">
			Maximum items allowed by customs when you visit Indonesia:
		</p>
		<ul>
			<li>1 liter of alcoholic beverages</li>
			<li>200 cigarettes OR 50 cigars OR 100 grams of tobacco</li>
			<li>Reasonable amount of perfume per adult, meaning if you arrive drenched in perfume the customs probably will not mind you carrying loads of bottles.</li>
			<li>Cameras, video cameras, portable radios, cassette recorders, binoculars and sport equipments are admitted provided they are taken out on departure. They must be declared to Customs.</li>
		</ul>

		<p class="no-mb">
			You are prohibited to carry:
		</p>
		<ul>
			<li>Firearms</li>
			<li>
				Narcotics drugs
			</li>
			<li>
				Pornography materials
			</li>
			<li>
				Chinese printing and medicines
			</li>
			<li>
				Transceivers and cordless telephone
			</li>
			<li>
				Films, pre-recorded video tapes, laser discs, VCDs, DVDs must be screened by Censor Board.
			</li>
			<li>
				Import or export of foreign currencies and travelers’ checks are allowed. However, the import and export of Indonesia currency, exceeding 100 million Rupiah is prohibited.
			</li>
		</ul>
		<p>
			Source: <a href="http://www.indonesia.travel/en/travel-guidance/visa-and-immigration">http://www.indonesia.travel/en/travel-guidance/visa-and-immigration</a>
		</p>

		<h2 class="sub-title">
			Customs Declaration
		</h2>
		<p>
			All goods brought by any person passing the border of Indonesia using any means of transport, are subject to inspection by Indonesian Customs and Excise officer.
		</p>
		<p>
			Every person passing the border of Indonesia using any means of transport must declare the goods they bring to Indonesia at the port of entry. Arriving passenger and crew must fill in the Customs Declaration Form and submit it to the Customs and Excise officer at the Customs Inspection Gate. Verbal declaration may be performed at certain ports designated by Director General of Customs and Excise of Indonesia.
		</p>
		<p>
			Please note that all hand-carried items MUST be inspected through a scanner at the Customs Inspection Gate.
		</p>
		<p>
			Please also be reminded that a random check and thorough physical examination may be conducted by the Customs and Excise officer at the port of entry to any passenger and crew, and their belonging.
		</p>

		<h3 class="in-title">
			Goods Subject to Import Duty, Import Related Taxes, and Excise
		</h3>
		<ul>
			<li>
				Passenger’s personal goods with customs value exceeding FOB USD 250.00 for each person or FOB USD 1,000.00 for a family. If the values of goods carried are more than aforementioned amount, the passenger shall pay import duty and other import levies for the difference.
			</li>
			<li>
				Excisable goods of adult passenger’s personal goods with amount exceeding 200 pieces of cigarettes, 25 pieces of cigars or 100 grams of minced tobacco and 1 liter of alcoholic beverages.
			</li>
			<li>
				Goods of crew of means of transport with customs value exceeding FOB USD 50.00 for each arrival.
			</li>
			<li>
				Excisable goods of crew of means of transport with amount exceeding 40 pieces of cigarettes, 10 pieces of cigars or 40 grams of minced tobacco and 350 milliliters of alcoholic beverages.
			</li>
		</ul>

		<p>
			If the values of goods carried by passenger or crew are more than the aforementioned number, the passenger shall pay import duty and other import levies for the difference. However, goods such as camera, video camera, radio cassette, binocular, laptop, or cellular phone, that will be used during stay in Indonesia and will be brought back when leaving for Indonesia will be exempted.
		</p>

		<h3 class="in-title">
			Goods Subject to Declare
		</h3>
		<ul>
			<li>
				Imported goods subject to import duty, import related taxes, and excise
			</li>
			<li>
				Animal, fish, and plant including their derivative products;
			</li>
			<li>
				Narcotics, psychotropic, drugs, fire arms, air guns, sharp weapons, ammunition, explosive material, pornographic goods/publication;
			</li>
			<li>
				Cinematographic movie, recorded video tape, video laser disc, or pornographic record;
			</li>
			<li>
				Bank notes, in rupiah or other currency with value of Rp. 100,000,000.00 (one hundred million rupiah) or more;
			</li>
			<li>
				Commercial goods.
			</li>
		</ul>

		<p>
			Goods subjected to import duty, import related taxes, and excise that do not have valid approval from authorized institutions in Indonesia may be confiscated, and the carrying person will be prosecuted according to Indonesian law.
		</p>
		<p>
			Concealment, evasion of goods from inspection, or giving false declaration to the Customs and Excise officials will be regarded as violations and be prosecuted according to Indonesian law/
		</p>
		<p>
			Source: <a href="https://www.embassyofindonesia.org/index.php/customs-declaration/">https://www.embassyofindonesia.org/index.php/customs-declaration/</a>
		</p>
	</div>
</section>

@stop
