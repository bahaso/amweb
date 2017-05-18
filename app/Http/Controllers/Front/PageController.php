<?php

namespace App\Http\Controllers\Front;

class PageController extends BaseController
{
	public function index($navigation = null, $slug = null)
	{
		$nav_slug = str_slug($navigation);

		if($nav_slug == 'about')
		{
			$route = route( 'f.abouts.imf');
		
		}else if( $nav_slug == 'events' ){
			$route = route( 'f.events.index');
		
		}else if( $nav_slug == 'registration' )
		{
			$route = route( 'f.registration.index');

		}else if( $nav_slug == 'discover-indonesia' )
		{
			$route = route( 'f.discover.index');

		}else if( $nav_slug == 'media-and-public' )
		{
			$route = route( 'f.media.index');

		}else if( $nav_slug == 'information' ){
			$route = route( 'f.information.index');
		}



		$data = compact('navigation', 'slug', 'route');
		return $this->output( 'pages.content', $data );
	}
}