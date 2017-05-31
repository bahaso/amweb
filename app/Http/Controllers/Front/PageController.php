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
		}
		else if( $nav_slug == 'events' )
		{
			$route = route( 'f.events.index');
		}
		else if( $nav_slug == 'registration' )
		{
			$route = route( 'f.registration.index');
		}
		else if( $nav_slug == 'discover-indonesia' )
		{
			$route = route( 'f.discover.index');
		}
		else if( $nav_slug == 'media-and-public' )
		{
			$route = route( 'f.media.index');
		}
		else if( $nav_slug == 'information' )
		{
			$route = route( 'f.information.index');
		}
		else if( $nav_slug == 'coming-to-indonesia' )
		{
			$route = route( 'f.coming.index' );
		}



		$data = compact('navigation', 'slug', 'route');
		return $this->output( 'pages.content', $data );
	}

	/**
	 * DUMMIES
	 */
	public function noImages()
	{
		return $this->output( 'pages.dummies.no-images' );
	}

	public function oneImage()
	{
		return $this->output( 'pages.dummies.one-image' );
	}

	public function fullImage()
	{
		return $this->output( 'pages.dummies.full-image' );
	}

	public function multipleImages()
	{
		return $this->output( 'pages.dummies.multiple-images' );
	}

	public function subheading()
	{
		return $this->output( 'pages.dummies.subheading' );
	}

	public function calendars()
	{
		return $this->output( 'pages.dummies.calendars' );
	}
}