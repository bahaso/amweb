<?php

namespace App\Http\Controllers\Front;

class WelcomeController extends BaseController
{
	public function visa()
	{
		return $this->output( 'welcomes.visa' );
	}
	public function tourism()
	{
		return $this->output( 'welcomes.visa-tourism' );
	}
	public function customs()
	{
		return $this->output( 'welcomes.customs' );
	}
	public function tips()
	{
		return $this->output( 'welcomes.tips' );
	}
}