@extends( 'welcomes._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Welcome To Indonesia', 
                'url' => route( 'f.welcomes.visa' ) 
            ],
            [ 
                'label' => 'Customs', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Customs 
	</h1>
	<div class="content">
		<p>
			General customs procedure go to:<br>
			<a target="_blank" href="http://www.imigrasi.go.id/index.php/en/public-services/visit-visa">
				http://www.imigrasi.go.id/index.php/en/public-services/visit-visa</a>
		</p>
		<p>
			Information regarding visa application forthis events will be provided in early 2018.
		</p>
	</div>
</section>

@stop
