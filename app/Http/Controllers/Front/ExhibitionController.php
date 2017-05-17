<?php

namespace App\Http\Controllers\Front;

class ExhibitionController extends BaseController
{
	public function detail()
	{
		return $this->output( 'exhibitions.detail' );
	}

	public function seminar()
	{
		return $this->output( 'exhibitions.seminar' );
	}
}