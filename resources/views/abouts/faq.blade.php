@extends( 'abouts._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' =>
        [
            [
                'label' => 'About',
                'url' => route( 'f.abouts.faq' )
            ],
            [
                'label' => 'FAQ',
            ]
        ],
        'no_label' => true

    ])
@stop


@section( 'rhs_content' )

    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4 class="mb16">Frequently Asked Questions (FAQ)</h4>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <ul class="accordion accordion-2">
                @foreach( $queries as $q )
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0 custom-faq-title">{{ $q->title }}</h4>
                        </div>
                        <div class="content">
                            {!! $q->description !!}
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