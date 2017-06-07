<?php

namespace App\Http\Controllers\Front;

class AboutController extends BaseController
{
	public function vti()
	{
		return $this->output( 'abouts.vti' );
	}

	public function imf()
	{
		return $this->output( 'abouts.imf' );
	}

	public function imfWorldBank()
	{
		return $this->output( 'abouts.imf-world-bank' );
	}

	public function worldBank()
	{
		return $this->output( 'abouts.world-bank' );
	}

	public function am2018()
	{
		return $this->output( 'abouts.am2018' );
	}
}