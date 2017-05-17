<?php

namespace App\Http\Controllers\Front;

class EventController extends BaseController
{
	public function index()
	{
		return $this->output( 'events.index' );
	}

	public function detail()
	{
		return $this->output( 'events.detail' );
	}
}