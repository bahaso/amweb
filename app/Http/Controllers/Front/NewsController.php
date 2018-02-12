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
		}else if($id == 3){		
			return $this->output( 'news.tax_system' );
		}else if($id == 4){		
			return $this->output( 'news.Infrastructure_project' );
		}else if($id == 5){
            return $this->output( 'news.mount-agung-alert-status-down-to-level-iii' );
        }else{
			return $this->output( 'news.detail' );
		}
	}
}