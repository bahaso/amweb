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
			return $this->output( 'indonesia-updates.institutional-and-governance' );
		}else if($id == 2){
			return $this->output( 'indonesia-updates.economic-factor' );
		}else if($id == 3){
			return $this->output( 'indonesia-updates.external-factor' );
		}else if($id == 4){
			return $this->output( 'indonesia-updates.fiscal-performance' );
		}else if($id == 5){
			return $this->output( 'indonesia-updates.monetary-and-financial' );
		}else if($id == 6){
			return $this->output( 'indonesia-updates.progressive-infrastructure' );
		}else{
			return $this->output( 'news.detail' );
		}
	}
}