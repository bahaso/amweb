@extends( 'posts._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => $db_post_map->title, 
                'url' => route( 'f.posts.index', [ $db_post_map->id, $db_post_map->slug ] ) 
            ],
            [ 
                'label' => $curr_menu->title,
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
<!--     <h1 class="title fw600">
        Indonesia
    </h1> -->
    <div class="content">
        @if( $db_travel_image )
        <p>
            {!! html_img( $db_travel_image->original(),
            [
                'w' => '100%',
                'h' => 'auto'
            ]) !!}
        </p>
        @endif

        <div class="mix-color-title">
            <span class="mix-color-bar mobile-full"></span>
            <span class="mix-color-bar left"></span>
            <span class="mct-row fm-indonesiana">
                {{ $db_travel->title }}
            </span>
            <span class="mix-color-bar right"></span>
            <span class="mix-color-bar mobile-full"></span>
        </div>

        <div class="info-split-column">
            <div class="sc-col">
                <div class="sc-label big">Population</div>
                <div class="sc-value big">
                    {{ $db_travel->population }}
                </div>
            </div>
            <div class="sc-col right">
                <div class="sc-label big">Area</div>
                <div class="sc-value big">
                    {{ $db_travel->area }}
                </div>
            </div>
            <div class="sc-col heighten">
                <div class="sc-label">Languages</div>
                <div class="sc-value">
                    {{ $db_travel->language }}
                </div>
            </div>
            <div class="sc-col right">
                <div class="sc-label">Religion</div>
                <div class="sc-value">
                    {{ $db_travel->religion }}
                </div>
            </div>
            <div class="sc-col">
                <div class="sc-label">Government</div>
                <div class="sc-value">
                    {{ $db_travel->government }}
                </div>
            </div>
            <div class="sc-col right">
                <div class="sc-label">Currency</div>
                <div class="sc-value">
                    {{ $db_travel->currency }}
                </div>
            </div>
        </div>

        <div class="mix-bar-full"></div>
    
            {!! $db_travel->content !!}        

        <div class="mix-bar-full"></div>

    </div>
</section>

@stop