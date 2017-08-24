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
            </p>
        </div>
    </section>

@stop