@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Publications',
                'url'   => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
                'url'   => route( 'f.news.index' )
            ],
            [
                'label' => 'The Importance of Strengthening the Tax System'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        The Importance of Strengthening the Tax System
    </h1>
    <div class="content">
        <p>
            Minister of Finance, Sri Mulyani Indrawati, opens a Joint IMF – Indonesia High-Level Conference, in
            Mulia Hotel on July 12-13, 2017. The Minister explains that this conference is not only important for
            Indonesia, but also for other countries around the world.
        </p>
        {!! html_img( 'img/am2018/public/C10T1516.jpg',
        [
            'w' => '100%',
            'h' => 'auto',
            'style' => 'margin-bottom:20px;'
        ]) !!}
        <p>
            According to her, the strengthening of the tax system is very important to improve economic development.
        </p>
        <p>
            “Good income policy, as well as good international cooperation with tax organizations could create a
            sustainable source of income in order to meet the needs of the people. With a stable income, the
            government could achieve the 2030 Sustainable Development Goals.” Said the Minister, in the event
            themed “International Taxation in Asia: Issues and The Way Forward.”
        </p>
        <p>
            Moreover, the Minister explains that strengthening the mobilization of domestic resources would not
            only increase national income but also a good design in the national tax system could improve
            inclusiveness, stimulate good governance, create investments, create jobs and an equitable prosperity,
            as well as improve social justice.
        </p>
        <p>
            The Minister also stated that the conference is a forum for policy makers to discuss a number of
            problems including the importance of international tax reform. The globalization era has created the
            need for new rules and cooperation in facing international tax problems, like digital business activities
            that allow companies to change place of origin and manipulate tax.
        </p>
        <p>
            “The presence of gaps in the domestic tax system has created a chance for companies and high-income
            individuals to abuse it. This is not good for our national income. It also destroys the sense of justice. This
            is a main concern of mine since I came back to Indonesia, and is the concern of G20 leaders as well.
        </p>
    </div>
</section>


@stop