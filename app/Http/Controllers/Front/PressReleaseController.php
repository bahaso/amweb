<?php

namespace App\Http\Controllers\Front;

class PressReleaseController extends BaseController
{
	public function index()
	{
		return $this->output( 'press-releases.index' );
	}

	public function detail( $id, $slug )
	{
		if($id == 1){
			return $this->output( 'press-releases.indonesia_imf' );
		}else if($id == 2){
			return $this->output( 'press-releases.indonesia_tuan' );
		}else{
			return $this->output( 'press-releases.detail' );
		}
	}
}