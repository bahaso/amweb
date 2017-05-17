<?php

namespace App\Http\Controllers\Front;

class DiscoverController extends BaseController
{
	public function indonesia()
	{
		return $this->output( 'discovers.indonesia' );
	}

	public function bali()
	{
		return $this->output( 'discovers.bali' );
	}
}