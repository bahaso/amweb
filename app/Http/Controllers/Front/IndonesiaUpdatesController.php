<?php

namespace App\Http\Controllers\Front;

class IndonesiaUpdatesController extends BaseController
{
	public function index()
	{
		return $this->output( 'indonesia-updates.index' );
	}

	public function detail( $id, $slug )
	{
		if($id == 1){
			return $this->output( 'indonesia-updates.indonesia_updates' );
		}else{
			return $this->output( 'news.detail' );
		}
	}
}