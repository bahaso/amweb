@extends( 'events._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Events', 
                'url' => route( 'f.events.index' ) 
            ],
            [ 
                'label' => 'Side Events', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <section class="wysiwyg">
        <h1 class="title fw600">
            Host Country Hospitality During the Annual Meetings
        </h1>
        <div class="content">
            <p>The host country will welcome all Annual Meetings participants with a program of events, seminars, exhibitions, performances, and activities designed to spotlight the people, heritage, cultural diversity, art, products, and economic development of Indonesia. The detail of hospitality program will be announced in the early 2018. Please follow us for further updates.
                 <br> The Hospitality Program consists of the following activities scheduled during the Meetings:</p>

            <ul>
                <li>
                    <b>Exhibition Featuring Local Products and Crafts</b>
                    <p>Learn about the vast array of Indonesia’s trade partners and export products, especially sustainable and ethically-produced items such as food products, consumer goods, and digital market innovations. An opportunity for investors to meet and exchange ideas.</p>
                </li>
                <li>
                    <b>Indonesia Infrastructure Expo</b>
                    <p>An introduction into the vision and progress of Indonesia’s infrastructure development.</p>
                </li>
                <li>
                    <b> Investment Forum</b>
                    <p>For those wanting a detailed look at Indonesia’s investment climate and future outlook.</p>
                </li>
                <li>
                   <b>Featured Tourism Destinations</b>
                    <p>Promoting selectedFor those making plans to explore Bali and beyond, tourism experts will be on hand to provide guidance and suggestions.</p>
                </li>
                <li>
                    <b>Cultural Program and Art Exhibitions</b>
                    <p>Learn more about the rich, cultural heritage of the country and its people through traditional dance performances, art, photography, music, and other activities.</p>
                </li>
                <li>
                    <b>“Taste of Indonesia” Food Hall and Marketplace</b>
                    <p>Experience the traditions and variety of Indonesia’s culinary legacy and take home something to remember your visit.</p>
                </li>
            </ul>
        </div>
    </section>

@stop