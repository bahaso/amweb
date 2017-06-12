@extends( 'discovers._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Discover Indonesia', 
                'url' => route( 'f.discovers.indonesia' ) 
            ],
            [ 
                'label' => 'Tourism Package', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Tourism Package
	</h1>
	<div class="content">

		<p>
			Straddling the equator, situated between the continents of Asia and Australia and between the

			Pacific and the Indian Oceans, Indonesia has many magnificent islands waiting to be

			explored.
		</p>
		<p>
			{!! html_img( 'img/am2018/public/indonesia-map.png',
			[
				'w' => '100%',
				'h' => 'auto'
			]) !!}
		</p>
		<p>
			We are still working on preparing tourism package for you. Please be back soon, or you can visit

			wonderful Indonesia website for information about Indonesia tourism destinations.
		</p>
	</div>
</section>

@stop