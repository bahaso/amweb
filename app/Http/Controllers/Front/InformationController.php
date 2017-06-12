<?php

namespace App\Http\Controllers\Front;

class InformationController extends BaseController
{

	public function hotel()
	{
		return $this->output( 'informations.hotel' );
	}
	public function transportation()
	{
		return $this->output( 'informations.transportation' );
	}
	public function facilities()
	{
		return $this->output( 'informations.facilities' );
	}
		public function weather()
	{
		return $this->output( 'informations.weather' );
	}
}