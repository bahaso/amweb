<?php

namespace App\Http\Controllers\Front;

class NewsController extends BaseController
{
	public function index()
	{
		return $this->output( 'news.index' );
	}

	public function detail( $id, $slug )
	{
		return $this->output( 'news.detail' );
	}
}