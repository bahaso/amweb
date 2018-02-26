<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Sponsor;

class NewsController extends BaseController
{
	public function index()
	{
		$queries = Post::where( 'category_type', '=', 'news')
			->where( 'publish_type', '=', 'publish')
			->orderBy( 'published_at', 'desc')
			->get();


		$data = compact( 'queries' ); 

		return $this->output( 'news.index', $data );
	}

	public function detail( $id, $slug )
	{
		// if($id == 1){
		// 	return $this->output( 'news.minister_finance' );
		// }else if($id == 2){
		// 	return $this->output( 'news.student_indonesia' );
		// }else if($id == 3){		
		// 	return $this->output( 'news.tax_system' );
		// }else if($id == 4){		
		// 	return $this->output( 'news.Infrastructure_project' );
		// }else{
		// 	return $this->output( 'news.detail' );
		// }
		$query = Post::find($id);

		$data = compact( 'query' );

		return $this->output( 'news.detail', $data );
	}
}