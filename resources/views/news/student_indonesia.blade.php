@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url'   => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'News', 
                'url'   => route( 'f.news.index' )
            ],
            [
                'label' => 'Students in Indonesia Know That For Better Basic Services, Their Country Needs More Revenue'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Students in Indonesia Know That For Better Basic Services, Their Country Needs More Revenue
    </h1>
    <div class="content">
        <p>
            <span class="txt-bold">Jakarta, Indonesia, June 6, 2017</span> – “I want my future children to have better health and education services,” says Erikson Wijaya, a student from South Sulawesi who is in his final year at the Jenderal Soedirman University in Purwokerto, Central Java. “And good public financial management can help.” 
        </p>
        <p>
            Erikson was one of the runners-up in a student essay competition about public financial management jointly organized by the World Bank and the University of Indonesia. Over 70 senior undergraduate students submitted essays for the competition.
        </p>
        <p>
            “The competition was an opportunity to share my ideas about an important issue that I like, which is taxes,” said Erikson on why he participated in the competition. “And public finance is important because it also affects my life.”
        </p>
        <p>
            The essays submitted demonstrate that Indonesia’s current and future leaders understand the importance of raising more revenue. All of the top three essays explored the question of how Indonesia can raise more government revenue equitably and efficiently to deliver more and better basic services. Other essays focused on public service delivery, and relationships between local governments and citizens.
        </p>
        <p>
            Fellow runner-up, Faisal Lutfi from the University of Jember, wrote his essay on how small and medium enterprises (SMEs) can contribute to Indonesia’s development by paying taxes.
        </p>
        <p>
            “I know SMEs can contribute more because I own one of them. I pay my university tuition with the money I make in my small business selling moon cakes,” said Lutfi proudly.
        </p>
        <p>
            Finance Minister Sri Mulyani Indrawati presented the award to the winner of the competition.
        </p>
        <p>
             “I feel that this kind of knowledge exchange especially by students is very important for them because they should know not only the budget as a fiscal instrument, but most importantly, this is money that belongs to the people of Indonesia,” said Minister Indrawati.  
        </p>
        <p>
            First prize winner, Adinda Rizky Herdianti from the University of Indonesia, wrote about taxes using a behavioral approach.
        </p>
        <p>
            “Public financial management affects the lives of so many people, yet it is often discussed in ways that are difficult for the general public to understand. A behavioral economics approach can help public management be better related to the public,” said Adinda, explaining the rationale for her essay.
        </p>
        <p>
            " I feel that this kind of knowledge exchange especially by students is very important for them because they should know not only the budget as a fiscal instrument, but most importantly, this is money that belongs to the people of Indonesia "
        </p>
        <h3 class="txt-bold">
            Sri Mulyani Indrawati 
        </h3>
        <p class="no-mb">
            Minister of Finance 
        </p>
        {!! html_img( 'img/am2018/public/sri-mulyani.jpg',
        [
            'w' => '100%',
            'h' => 'auto',
            'style' => 'margin-bottom:20px;'
        ]) !!}
        <p>
            Minister Indrawati was joined by the World Bank Country Director for Indonesia, Rodrigo A. Chaves; Ambassador of Canada to Indonesia, Peter MacArthur; Ambassador of the European Union to Indonesia and Brunei Darussalam, Vincent Guérend; Ambassador of Switzerland to Indonesia, Yvonne Baumann; and Muhammad Anis, Rector of the University of Indonesia. Each of whom presented awards to the two runners-up, and three honorable mentions who traveled from across the archipelago from East Nusa Tenggara, Kalimantan, Sumatra and East Java to Jakarta to attend the award ceremony hosted by the Ministry of Finance.
        </p>
        <p>
            The Ministry of Finance also sees sound public financial management as a foundation of good governance that ultimately supports the welfare of Indonesians. The Minister hopes that students can remain interested and help oversee the management of public finances by questioning why collecting revenues is important, and how best to manage public spending.
        </p>
        <p>
            The competition is part of the Public Financial Management Multi-Donor Trust Fund program supported by the Government of Canada, the European Union, and the Government of Switzerland.  The program has sustained a longstanding partnership with the Ministry of Finance to improve public financial management in Indonesia
        </p>
        <p>
            Source: <a href="http://www.worldbank.org/" target="_blank">http://www.worldbank.org</a>
        </p>
    </div>
</section>


@stop