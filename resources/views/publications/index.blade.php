@extends( 'galleries._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Media and Publications',
                'url' => route( 'f.news.index' ) 
            ],
            [ 
                'label' => 'Publications',
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
                @foreach( $lists as $ls )
                <tr>
                    <td>{{ $ls->date }}</td>
                    <td>
                        <a href="{{ route( 'f.publications.detail', [ $ls->id, str_slug( $ls->title_short ) ]) }}">
                            {{ $ls->title_short }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>

@stop