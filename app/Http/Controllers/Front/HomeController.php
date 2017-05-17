<?php

namespace App\Http\Controllers\Front;

class HomeController extends BaseController
{
	public function index()
	{
		return $this->output( 'home.index' );
	}
}