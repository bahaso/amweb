@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Public', 
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Publication', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        Publications
    </h1>
    <div class="content">
        <table class="table am2018">
            <thead>
                <tr>
                    <th width="20%">Date</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>June 15, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [1, 'panel-discussions' ]) }}">
                            Panel Discussion: Indonesia's Leading Role in Global Economy
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>May 15, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [1, 'panel-discussions' ]) }}">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore 
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>May 15, 2017</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [1, 'panel-discussions' ]) }}">
                            Panel Discussion: INdonesia's Leading Role in Global Economy
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</section>

@stop