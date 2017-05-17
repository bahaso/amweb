<?php

namespace App\Http\Controllers\Front;

class GalleryController extends BaseController
{
	public function detail()
	{
		return $this->output( 'galleries.detail' );
	}
}