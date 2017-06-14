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
                'label' => 'Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings'
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings
    </h1>
    <div class="content">
        {!! html_img( 'img/am2018/public/minister-of-finance.jpg',
        [
            'w' => '100%',
            'h' => 'auto'
        ]) !!}
        <p>
            Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings on Saturday (16/04)
        </p>
        <p>
            Washington D.C., 17/04/16 – Minister of Finance Bambang P.S. Brodjonegoro, as Chairman of Development Commitee (DC), chaired the meeting of Joint Ministerial Commitee of the Boards of Governors of the Bank and The Fund on the Transfer of Real Resources to Developing Countries on Saturday April 16, 2016 in the Preston Auditorium, Main Complex of the World Bank, Washington D.C. USA.
        </p>
        <p>
            In his speech, the minister conveys the DC’s goal that is monitoring the possible risk and damage as well as seeking the latest economic development of emerging countries. “We are mandated by WBG (World Bank Group) dan IMF (International Monetary Fund) to monitor the risk and damage that may occur as well as to seek the latest economic development of emerging countries,” he said.
        </p>
        <p>
            For information, DC is the Joint Ministerial Committee of the Boards of Governors of the World Bank. Indonesia, through its Minister of Finance, managed to be the first Indonesian chairman of DC. He was selected from among the committee’s members based on individual capacity. The term of office for Chairman at least two years with the possibility of an extension to three years based on the approval of the Board of Governors of the member countries.  (ark)
        </p>
        <p>
            Source: <a href="https://kemenkeu.go.id/">www.kemenkeu.go.id</a>
        </p>
    </div>
</section>


@stop