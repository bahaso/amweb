<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\BlankController;
use Illuminate\Http\Request;

class BaseController extends BlankController
{
	public function __construct( Request $r )
	{
		parent::__construct( $r );
	}

	protected function beforeOutput()
	{
		return [];
	}

}
