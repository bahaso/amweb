@extends( 'galleries._layout' )

@section( 'head_page_css' )
    @parent
    {!! html_css( 'gallery-custom.css', 'css/fo' ) !!}
@stop

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
                'label' => 'Photo Gallery',
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<div class="wysiwyg aligned">
    <div class="row mb30">
        @if( $galleries )
            @foreach( $galleries as $ga )
            <div class="col-sm-6 box-photos">
                <div class="image-caption mb-xs-32">
                    <a href="{{ route( 'f.galleries.detail',[ $ga->id, str_slug($ga->title) ] ) }}">
                        {!! html_img( $ga->coverThumb( '400x225' ), 
                            [
                                'w' => 400,
                                'h' => 225
                            ]
                        ) !!}

                        <div class="caption">
                            <p>
                               {{ $ga->title }}
                            </p>
                            <p>
                                {{ $total_photo[$ga->id] }} Photos | 52 Views
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>

@stop