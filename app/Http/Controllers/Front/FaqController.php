<?php

namespace App\Http\Controllers\Front;

class FaqController extends BaseController
{
	public function index()
	{
		return $this->output( 'faqs.index' );
	}
}