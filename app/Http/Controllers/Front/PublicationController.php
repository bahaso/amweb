<?php

namespace App\Http\Controllers\Front;

class PublicationController extends BaseController
{
	public function index()
	{
		return $this->output( 'publications.index' );
	}

	public function detail( $id, $slug )
	{
		return $this->output( 'publications.detail' );
	}
}