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

	public function programVTI()
	{
		return $this->output( 'events.program-vti' );
	}

	public function mainEvents()
	{
		return $this->output( 'events.main-events' );
	}

	public function sideEvents()
	{
		return $this->output( 'events.side-events' );
	}
}