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

	public function destination()
	{
		return $this->output( 'discovers.destination' );
	}

	public function tourism()
	{
		return $this->output( 'discovers.tourism' );
	}

	public function wonderful_indonesia()
	{
		return $this->output( 'discovers.wonderful-indonesia' );
	}
}