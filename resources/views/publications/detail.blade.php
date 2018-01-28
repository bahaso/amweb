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
                'url' => route( 'f.publications.index' ) 
            ],
            [
                'label' => 'Indonesia\'s Leading Role', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        {{ $query->title_short }}
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        {{ $query->title }}
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        {{ $query->event }}
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        {{ $query->date }}
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        {{ $query->source }}
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                        {!! $query->description !!}
                    </td>
                </tr>
                @if( $file )
                <tr>
                    <th>Attachment</td>
                    <td>
                        <a href="{{ $file->original() }}" class="txt-underline">
                            {{ $file->file_name }}
                        </a>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
        @if( $file )
        <a href="{{ $file->original() }}" class="pull-right fw400 link-txt fs14">
            Download Attachment
        </a>
        @endif
    </div>
</section>

@stop