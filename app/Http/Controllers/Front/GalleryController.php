<?php

namespace App\Http\Controllers\Front;

class GalleryController extends BaseController
{
	public function index()
	{
		return $this->output( 'galleries.index' );
	}

	public function detail()
	{
		return $this->output( 'galleries.detail' );
	}
}