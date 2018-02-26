<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\PostCategoryMap;
use App\Models\PostCategory;
use App\Models\Sponsor;

use file;

class GalleryController extends BaseController
{
	public function index()
	{
		$galleries = Post::where( 'category_type', '=', 'photo-gallery')
			->where( 'publish_type', '=', 'publish')
			->orderBy( 'published_at', 'desc')
			->get();

		$total_photo = [];
		foreach( $galleries as $ga )
		{
			$total_photo[$ga->id ] = $ga->files( 'featured_images' )->count();
		}

		$data = compact( 'galleries', 'total_photo' );

		return $this->output( 'galleries.index', $data );
	}

	public function detail($id, $slug)
	{
		// if($id == 1){
		// 	return $this->output( 'galleries.land_gods' );
		// }else if($id == 2){
		// 	return $this->output( 'galleries.medan' );
		// }else if($id == 3){
		// 	return $this->output( 'galleries.voya_indonesia' );
		// }else if($id == 4){
		// 	return $this->output( 'galleries.yogyakarta' );
		// }else if($id == 5){
		// 	return $this->output( 'galleries.imf_tax' );
		// }else if($id == 6) {
  //           return $this->output('galleries.indonesia_infrastructure_forum');
  //       }else if($id == 7){
  //           return $this->output( 'galleries.building_bonds_across_asia' );
		// }else if($id == 8){
  //           return $this->output( 'galleries.cnn_debate_on_the_global' );
  //       }else if($id == 9){
  //           return $this->output( 'galleries.global_press_briefing_vti' );
  //       }else if($id == 10){
  //           return $this->output( 'galleries.high_level_special_session' );
  //       }else if($id == 11){
  //           return $this->output( 'galleries.indonesia_USINDO_gala_dinner' );
  //       }else{
		// 	return $this->output( 'galleries.detail' );
		// }

		$query = Post::find($id);

		$photos = $query->files( 'featured_images' )->get();

		$data = compact( 'query', 'photos' );

		return $this->output( 'galleries.detail', $data );
	}
}