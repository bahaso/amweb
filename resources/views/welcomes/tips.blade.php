@extends( 'welcomes._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Travel Information',
                'url' => route( 'f.welcomes.visa' ) 
            ],
            [ 
                'label' => 'Travel Tips', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Essential Travel Tips: What to Know Before You Go
	</h1>
	<div class="content">
		<p>
			From navigating the crowds to being monkey-savvy, there are a few tricks to getting the best out of a trip to Bali. We’ve rounded up 15 top tips to bank for your next visit to the Island of the Gods.
		</p>

		<h3 class="in-title">
			Language
		</h3>
		<p>We recommend learning a few phrases in Bahasa Indonesia.<br>
		Selamat pagi (good morning)<br>
		Tolong (please)<br>
			Terima kasih (thank you)<br></p>
		{{--<p>
			One of the most touristed islands on earth, Bali isn’t exactly an untouched paradise. 
			But while it can be difficult to escape the throngs of <span class="txt-underline">south Bali</span> and 
			<span class="txt-underline">Ubud</span>, determined solitude seekers 
			will be pleased to find loads of secluded corners beyond these primary tourist centres. Tip: head to the central mountains, 
			or Bali’s more chilled-out north and west coasts.
		</p>--}}
		<h3 class="in-title">
			General Information
		</h3>
		<p>
			Office hours for most businesses are from 8 AM to 4 PM, or 9 AM to 5 PM, usually Monday through Friday (with some open on Saturday as well). Government offices are closed on Saturdays. Standard banking hours are from 8 AM to 3 PM, Monday to Friday.
		</p>
		<h3 class="in-title">
			Currency
		</h3>
		<p>
			The Indonesian currency is Indonesia Rupiah (IDR). Money exchange facilities are widely available and information on the daily exchange rate can be found <a href="http://www.bi.go.id/en/moneter/informasi-kurs/transaksi-bi/Default.aspx" target="_blank">online</a>. It is recommended to exchange money at commercial banks or registered money changers. Credit cards are widely accepted in hotels, restaurants, and most shops/vendors. Most ATMs will take non-Indonesian cards, although out-of-network fees will apply. Most ATMs dispense Rupiah only, and it comes in either Rp 50,000 and 100,000 notes.
		</p>

		<h3 class="in-title">
			Electricity
		</h3>
		<p>
			Electric power supply is 220 volts in all regions (110-volt electronic equipment will need a converter and an adaptor). Sockets fit two pin, rounded-tip plugs (technically known as Type C, E, and F). (ADD PHOTO) Some hotels are outfitted with multiple sockets but it is best to travel with an adaptor.
		</p>

		<h3 class="in-title">
			Internet/WiFi
		</h3>
		<p>
			All hotels and most restaurants provide internet connections or free WiFi.
		</p>

		<h3 class="in-title">
			Embassies/Consulates
		</h3>
		<p>
			For a list of consulates in Bali and their contact details please refer to <a href="http://www.balitourismboard.org/consulates_in_bali.html" target="_blank">http://www.balitourismboard.org/consulates_in_bali.html</a>.
		</p>

		<h3 class="in-title">
			Shopping
		</h3>
		<p>
			In traditional markets and individual stalls, it is an acceptable custom to negotiate the final price with the vendor if the price is not clearly marked on the item. But always do so respectfully and pleasantly. In larger stores or chains, the price is fixed.
		</p>

		<h3 class="in-title">
			Transportation
		</h3>
		<p>
			Taxis are widely available in and around the Nusa Dua area and can be arranged through hotels, the meetings venues, or directly with local taxi companies.
		</p>

		<h3 class="in-title">
			Weather
		</h3>
		<p>
			Indonesia has two seasons, wet and dry, with no temperature extremes between the two seasons. For most of the country, the dry season falls between April and October and the wet season between November and March. However, this cycle can be unpredictable.<br>
			<br>Although cooler climate types can be found in mountainous regions of Indonesia at 1,300 to 1,500 meters above sea level, Indonesia’s climate is almost entirely tropical, dominated by the tropical rainforest climate found in every major island of Indonesia, followed by the tropical monsoon climate in other areas, and finally the tropical savanna climate which can be found in isolated locations. Overall, the average temperature in most regions is between 20˚-36˚C depending on the region’s altitude.<br>
			<br>For more information regarding Indonesia’s weather, please refer to: <a href="https://www.accuweather.com/en/id/indonesia-weather" target="_blank">https://www.accuweather.com/en/id/indonesia-weather</a>.
		</p>
	</div>
</section>

@stop
