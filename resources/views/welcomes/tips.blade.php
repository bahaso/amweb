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
		Essential Bali travel tips: what to know before you go
	</h1>
	<div class="content">
		<p>
			From navigating the crowds to being monkey-savvy, there are a few tricks to getting the best out of a trip to Bali. We’ve rounded up 15 top tips to bank for your next visit to the Island of the Gods.
		</p>

		<h3 class="in-title">
			Expect crowds
		</h3>
		<p>
			One of the most touristed islands on earth, Bali isn’t exactly an untouched paradise. 
			But while it can be difficult to escape the throngs of <span class="txt-underline">south Bali</span> and 
			<span class="txt-underline">Ubud</span>, determined solitude seekers 
			will be pleased to find loads of secluded corners beyond these primary tourist centres. Tip: head to the central mountains, 
			or Bali’s more chilled-out north and west coasts.
		</p>
		<h3 class="in-title">
			Choose your base carefully
		</h3>
		<p>
			It pays to put some thought into your Bali base, 
			as chaotic traffic and hot weather are likely to make you stick close to your hotel or guesthouse rather
			than wander far on foot or sit in stuffy taxis. If you’re looking for real R&R, <span class="txt-underline">Kuta</span> probably isn’t your thing. 
			If you want to shop up a storm and eat more than your body weight in fine food, a week on <span class="txt-underline">Nusa Lembongan</span> isn't likely
			to leave you fully satiated. 
		</p>
		<h3 class="in-title">
			Don’t fret about 'Bali belly'
		</h3>
		<p>
			Strict dietary habits are no longer required to prevent spending your Bali break within two steps of a toilet. Once upon a time, salads, cut fruit, ice cubes and most meats were on the danger list, but hygiene standards have improved markedly across the island, and many kitchens offer good quality organic produce. While dodgy prawns will always be out there, by staying hydrated, avoiding notorious local liquor arak and consuming street food with a degree of caution, the dreaded Bali belly should be kept at bay.
		</p>

		<h3 class="in-title">
			Dress for the occasion
		</h3>
		<p>
			Beachwear doesn’t always cut it in Bali – many higher-end bars, restaurants and clubs enforce a dress code. If you’re unsure, call ahead to save the potential embarrassment of being turned away.
		</p>

		<h3 class="in-title">
			Respect religious customs
		</h3>
		<p>
			Religion rules the roost in Bali. Don’t get your knickers in a knot when a street is blocked off for a ceremony or your driver pulls over mid-trip to make a blessing – this is all part of the magic of the island. Plan accordingly if your travel dates fall on <span class="txt-underline">Nyepi</span> when everything in Bali (even the airport) shuts down for the day, and always dress modestly (covering the shoulders and knees) and conduct yourself appropriately when visiting temples and holy sites.
		</p>

		<h3 class="in-title">
			Prepare for a mixed bag of price tags
		</h3>
		<p>
			It’s still possible to visit Bali on a shoestring by staying in guesthouses, 
			dining at <span class="txt-italic">warungs</span> and shopping at local markets, 
			but you can just as easily blow your life savings as drinks, meals, 
			spa treatments and room rates at high-end establishments are priced similarly to that in Australia, 
			the UK and the US. Look out for online discounts and happy hour deals.
		</p>

				<h3 class="in-title">
			Expect crowds
		</h3>
		<p>
			One of the most touristed islands on earth, Bali isn’t exactly an untouched paradise. 
			But while it can be difficult to escape the throngs of <span class="txt-underline">south Bali</span> and 
			<span class="txt-underline">Ubud</span>, determined solitude seekers 
			will be pleased to find loads of secluded corners beyond these primary tourist centres. Tip: head to the central mountains, 
			or Bali’s more chilled-out north and west coasts.
		</p>

		<h3 class="in-title">
			Be cautious of wild and stray animals
		</h3>
		<p>
			Give wild and stray animals a wide berth. They may look cute, but rabies and other diseases are serious risks in Bali and monkeys are notorious for their thieving ways. Bali’s stray dogs are numerous, and often in pretty bad shape. 
		</p>

		<h3 class="in-title">
			Avoid plastic water bottles
		</h3>
		<p>
			Bali’s heat and humidity calls for constant hydration, but consider the environment before purchasing another bottled drink. An estimated three million plastic bottles are discarded in Bali each month; help reduce this figure by investing in a stainless steel bottle that you can refill; most good cafes and restaurants have a water filter available that you can use for free or for a small fee. 
		</p>

		<h3 class="in-title">
			Learn some local lingo
		</h3>
		<p>
			A few basic words of Bahasa Indonesia will take you a long way in Bali. 
			Try <span class="txt-italic">selamat pagi</span> (good morning), <span class="txt-italic">tolong</span> (please) 
			and <span class="txt-italic">terima kasih</span> (thank you), for starters.
		</p>

		<h3 class="in-title">
			Remember that low season often means rainy season
		</h3>
		<p>
			Be mindful of Bali’s rainy season (January to April and October to November) when planning your trip. Discounts can be great, but if you end up spending your holiday cooped up indoors, you may be left wondering if making the trip was worth it. Fortunately, the rains are often limited to brief afternoon downpours, so your holiday isn't likely to be a total write-off.
		</p>

		<h3 class="in-title">
			Bargain respectfully
		</h3>
		<p>
			You can bargain for many items and services in Bali, but do so respectfully and with a smile on your face. You’ll know when the vendor has reached their limit, and at that point don’t push it. When in doubt, walk away – if the seller doesn’t come after you, you can be sure they aren’t prepared to drop their price any lower.
		</p>

		<h3 class="in-title">
			Get your head around the current visa situation
		</h3>
		<p>
			In early 2015, <span class="txt-underline">Indonesia</span> waived its standard 30-day tourist visa-on-arrival (VOA) system for 45 countries; 
			visitors from most other nations (including Australians) must purchase the VOA. While extending a 30-day visa is possible, it can be a tricky business. Speak to a reputable visa agent on the ground, or contact your nearest Indonesian consulate prior to departure. At the time of publication, 60-day visas could be arranged in advance, but not in-country.
		</p>

		<h3 class="in-title">
			Play by the rules
		</h3>
		<p>
			The Indonesian legal system may seem confusing and contradictory, but it's best not argue with police if you are accused of an infringement that may feel unjust, and pay ‘fines’ with good grace. 
		</p>

		<h3 class="in-title">
			Respect the ocean
		</h3>
		<p>
			Even if you’re an avid beach-goer and surf worshipper, Bali's powerful waves, strong currents and exposed rocks can be treacherous, so take care, and don't swim alone unless you are completely confident in doing so. Show equal respect for the beach by not leaving any garbage (including cigarette butts) behind – when the tide comes in, it'll be sucked into the ocean at great cost to the marine ecosystem.
		</p>

		<h3 class="in-title">
			Don’t stress
		</h3>
		<p>
			Bali is generally safer than the headlines suggest, but with close to four million tourists hitting its shores every year, it’s statistically natural that some travellers may have problems. Party safe, always wear a helmet when riding a bike or scooter, be respectful, and don’t do anything you wouldn’t do in your home country, and you're on track for the holiday of a lifetime.
		</p>

		<p>
			<span class="txt-italic">Written by Samantha Chalker, (Lonely Planet Writer), originally published in July 2009, and updated in August 2012 and July 2015.</span>
			<a href="https://www.lonelyplanet.com/travel-tips-and-articles/essential-bali-travel-tips-what-to-know-before-you-go/40625c8c-8a11-5710-a052-1479d277522a">https://www.lonelyplanet.com/travel-tips-and-articles/essential-bali-travel-tips-what-to-know-before-you-go/40625c8c-8a11-5710-a052-1479d277522a
			</a>
		</p>
	</div>

	<h1 class="title fw600">
		Indonesia Weather
	</h1>
	<div class="content">
		<p>
			Indonesia’s climate is relatively even year-round as the country lies along the equator. Indonesia has two seasons –a wet season and a dry season– with no extremes temperature between the two seasons. The average temperature in most of Indonesia region is between 20˚ - 36˚C depending on the region’s altitude.
		</p>
		<p>
			For most of Indonesia’s area, the dry season falls between April and October with the wet season between November and March. This cycle, however, is relatively unstable in the last few years due to climate change.
		</p>
		<p>
			Indonesia’s climate is almost entirely tropical, dominated by the Tropical rainforest climate found in every major island of Indonesia, followed by the Tropical monsoon climate that predominantly lies along Java’s coastal north, Sulawesi’s coastal south and east, and Bali, and finally the tropical Savana climate, can be found in isolated location in Central Java, lowland of East Java, coastal southern Papua and smaller islands to the east of Lombok. However, cooler climate types can be found in mountainous regions of Indonesia at 1,300 to 1,500 metres above sea level
		</p>
		<p class="no-mb">
			Further Information regarding Indonesia’s weather can be found at:
			<a href="https://www.accuweather.com/en/id/indonesia-weather">https://www.accuweather.com/en/id/indonesia-weather</a>
		</p>
	</div>
</section>

@stop
