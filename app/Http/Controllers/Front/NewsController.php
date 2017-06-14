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
		if($id == 1){
			return $this->output( 'news.minister_finance' );
		}else if($id == 2){
			return $this->output( 'news.student_indonesia' );
		}else{
			return $this->output( 'news.detail' );
		}
	}
}