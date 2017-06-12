<?php

namespace App\Http\Controllers\Front;

class PressReleaseController extends BaseController
{
	public function index()
	{
		return $this->output( 'press-releases.index' );
	}

	public function detail( $id, $slug )
	{
		return $this->output( 'press-releases.detail' );
	}
}