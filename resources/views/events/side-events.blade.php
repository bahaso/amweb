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
            Side/Parallel Events on IMF-WBG AM 2018
        </h1>
        <div class="content">
            <p>In order to optimize its position as the host country of the 2018 IMF-WBG Annual Meetings,
                the Government of Indonesia initiates a series of activities during the Annual Meetings on 8-
                14 October 2018. The activities are referred to as side/parallel events.</p>

            <p>The side/parallel events are aimet at showcasing Indonesia economic development as well
                as signature products and cultural diversity. These events will be in the form of exhibitions,
                seminars, and art/cultural performances.
            </p>

            <p>
                The side/parellel events consists of the following activities (with its respective objective) that
                will be held in conjunction with the Annual Meetings 2018:
            </p>

            <ul>
                <li>Trade and Local Products Expo
                    Introducing selected Indonesia’s export products that are relevant with IMF/WB
                    development mission such as sustainable and ethical products, food products, digital
                    platform trading, and consumer goods start-up)
                </li>
                <li>
                    Indonesia Infrastructure Expo
                    Introducing vision and progress of Indonesia’s infrastructure development
                </li>
                <li>
                    Investment Forum
                    Showcasing Indonesia’s investment climate
                </li>
                <li>
                    Tourism Destinations Promotion
                    Promoting selected tourism destinations in Indonesia
                </li>
                <li>
                    Culture and Art Shows
                    Introducing selected Indonesia cultural activities
                </li>
                <li>
                    2018 AM Official Merchandise and Food Festival
                    Introducing selected Indonesia’s culinary and memorabilia of IMF-WB AM 2018
                </li>
                <li>
                    Fintech, Digital Economy, Sharia Economic Forum
                    Discussing progress, challenges, and opportunities of financial technology, digital
                    economy and Sharia/Islamic economy in Indonesia and/or the region
                </li>
                <li>
                    Indonesian Food Hall and General Merchandises
                    Introducing Indonesia culinary and art products
                </li>
            </ul>
        </div>
    </section>

@stop