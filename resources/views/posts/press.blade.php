@extends( 'posts._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => $curr_menu->title, 
                'url' => route( 'f.posts.index', [ $curr_menu->id, $db_post_map->slug ] ) 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600 no-mb">
        {{ $record->title_short }}
    </h1>
    <div class="content">
        <table class="table am2018 hr">
            <tbody>
                <tr>
                    <th width="20%">Title</td>
                    <td>
                        {{ $record->title }}
                    </td>
                </tr>
                <tr>
                    <th>Event</td>
                    <td>
                        {{ $record->event }}
                    </td>
                </tr>
                <tr>
                    <th>Date</td>
                    <td>
                        {{ $record->date }}
                    </td>
                </tr>
                <tr>
                    <th>Source</td>
                    <td>
                        {{ $record->source }}
                    </td>
                </tr>
                <tr>
                    <th>Description</td>
                    <td>
                        {!! $record->description !!}
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