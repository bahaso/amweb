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
                'label' => 'Now is the Best time for Indonesia to Accelerate Infrastructure Project'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Now is the Best time for Indonesia to Accelerate Infrastructure Project
    </h1>
    <div class="content">
        {!! html_img( 'img/am2018/public/LWP_5689.jpg',
        [
            'w' => '100%',
            'h' => 'auto',
            'style' => 'margin-bottom:20px;'
        ]) !!}
        <p class="no-mb txt-bold">
            Jakarta, 25 th July 2017
        </p>
        <p>
            The Ministry of Finance, along with PT. Sarana Multi Infrastruktur (PT SMI), PT Penjaminan Infrrastruktur
            (PT PII) and PT Indonesia Infrastructure Finance (PT IIF) held the Indonesia Infrastructure Finance Forum
            2017 in Fairmont Hotel, Jakarta.
        </p>
        <p>
            Indonesia is ranked number 1 in a survey by Organization for Economic Cooperation and development
            (OECD) in terms of Trust and Confidence in National Government, said Minister of Finance Sri Mulyani.
            She also stated that the level of public trust is important for the Government to insure the public that it
            has the integrity, as well as the ability to undertake its responsibilities.
        </p>
        <p>
            “The public trust of the government in 2016 reached 80%. This number is above the average compared
            to other OECD countriees such as the US, UK, Germany, and France. We have also beat Switzerland,
            which many has believed that it is unbeatable.”
        </p>
        <p>
            Moreover, the Minister explain that Indonesia is left behind in term of the construction of
            Infrastructure. This happens because since the 1998 crisis, Indonesia have been trying to stabilize the
            economy, gain back the people’s trust, as well as consolidating the economy. Right now, the debt to
            GDP ratio is low, so it is the perfect opportunity for Indonesia to start building Infrastructure.
        </p>
        <p>
            “To catch-up with Infrastructure is not an easy task because if we overdo it we could destroy much
            progress. This is why the role of the private sector is so important” the Minister stated.
        </p>
        <p>
            The Minister added that Indonesia will blend several financing schemes together so that the
            Government could gain a more sustainable financing of Infrastructures.
        </p>
    </div>
</section>


@stop