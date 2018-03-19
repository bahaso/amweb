@extends( 'articles._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => $db_post_map->title, 
                'url' => route( 'f.articles.index', [ $db_post_map->id, $db_post_map->slug ] ) 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

    <div>
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mb16 text-center">{{ $faq->title }}</h4>
                <section class="wysiwyg">
                    <div class="content">
                        {!! $faq->summary !!}
                    </div>
                </section>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <ul class="accordion accordion-2">
                @foreach( $faq_tab as $ft )
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">{{ $ft->title }}</h4>
                        </div>
                        <div class="content">
                            {!! $ft->description !!}
                        </div>
                    </li>
                @endforeach
                </ul>
                <!--end of accordion-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
@stop