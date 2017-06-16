@extends( 'discovers._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Discover Indonesia', 
                'url' => route( 'f.discovers.indonesia' ) 
            ],
            [ 
                'label' => 'Indonesia in Brief', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Indonesia
    </h1>
    <div class="content">
        <p>
            {!! html_img( 'img/am2018/public/Indonesia.jpg',
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        <p>
            The Republic of Indonesia is the largest archipelago in the world comprising 13,466

            large and small tropical islands fringed with white sandy beaches, many still

            uninhabited and a number even still unnamed. Straddling the equator, situated between

            the continents of Asia and Australia and between the Pacific and the Indian Oceans, it is

            as wide as the United States from San Francisco to New York, equaling the distance

            between London and Moscow.  Indonesia has a total population of more than 215 million

            people from more than 200 ethnic groups. The national language is Bahasa Indonesia.
        </p>
        <p>
            Among the most well known islands are Sumatra, Java, Bali, Kalimantan (formerly

            Borneo), Sulawesi (formerly Celebes), the Maluku Islands (or better known as Moluccas,

            the original Spice Islands) and Papua. Then, there is Bali “the world&#39;s best island resort”

            with its enchanting culture, beaches, dynamic dances and music. But Indonesia still has

            many unexplored islands with grand mountain views, green rainforests to trek through,

            rolling waves to surf and deep blue pristine seas to dive in where one can swim with

            dugongs, dolphins and large mantarays.
        </p>
        <p>
            Because of her location, and geology, Indonesia is blessed with the most diverse

            landscape, from fertile ricelands on Java and Bali to the luxuriant rainforests of

            Sumatra, Kalimantan and Sulawesi, to the savannah grasslands of the Nusatenggara

            islands to snow-capped peaks of West Papua.
        </p>
        <p>
            Her wildlife ranges from the prehistoric giant Komodo lizard to the Orang Utan and the

            Java rhino, to the Sulawesi anoa dwarf buffalos, to birds with exquisite plumage like the

            cockatoo and the bird of paradise. This is also the habitat of the Rafflesia the world’s

            largest flower, wild orchids, an amazing variety of spices, and aromatic hardwood and a

            large variety of fruit trees. Underwater, scientists have found in North Sulawesi the

            prehistoric coelacanth fish, a “living fossil” fish, predating the dinosaurs living some 400

            million years ago, while whales migrate yearly through these waters from the South

            Pole. Here are hundreds of species of colourful coral and tropical fish to admire.
        </p>
        <p>
            Culturally, Indonesia fascinates with her rich diversity of ancient temples, music,

            ranging from the traditional to modern pop, dances, rituals and ways of life, changing

            from island to island, from region to region. Yet everywhere the visitor feels welcomed

            with that warm, gracious innate friendliness of the Indonesian people that is not easily

            forgotten.
        </p>
        <p>
           Facilities-wise Indonesia’s hotels are second to none. In fact, many of our luxurious and

            unique hotels have constantly been listed as some of the best in the world, located on

            white sandy beaches, overlooking green river valleys, or situated in the heart of busy

            capital Jakarta. While Indonesia’s cities like Jakarta, Bandung, Surabaya, or Makassar

            are a hive of activities for business and leisure and a paradise for shoppers, offering

            upscale boutiques selling top brand names, to local goods at road-side stalls. Here

            gourmets can treat themselves to the many regions’ delectable spicy cuisine or dine

            sumptuously at international restaurants. And for sheer relaxation, Indonesia Spas are

            second to none to reinvigorate both body and mind. 
        </p>
        <p>
            Convention centers are equipped with state-of- the-art facilities, as many top

            international conferences and exhibitions are held in Jakarta, Bali to Manado, ranging

            from the Global Climate Change Conference in Bali to the World Ocean Conference in

            Manado , to trade and investment exhibitions and tourism trade shows in many

            provincial capital cities.
        </p>
        <p>
            Jakarta, Bali, Medan, Padang, Bandung, Solo, Yogyakarta, Surabaya, Makassar are

            connected by direct international flights, and many regular and low cost carriers fly

            passengers to Indonesia’s towns or remote locations.
        </p>

        <p class="no-mb">   
            Source: <a href="http://www.indonesia.travel/en/facts/about-indonesia">http://www.indonesia.travel/en/facts/about-indonesia</a>
        </p> 
    </div>
</section>

@stop