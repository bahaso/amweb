<?php

namespace App\Http\Controllers\Front;

use App\Models\PressRelease;
use App\Models\Sponsor;

class PressReleaseController extends BaseController
{
	public function index()
	{
		$lists = PressRelease::whereCategory('press-release')->orderBy('date', 'desc')->get();

		$data = compact( 'lists' );

		return $this->output( 'press-releases.index', $data );
	}

	public function detail( $id, $slug )
	{
		// if($id == 1){
		// 	return $this->output( 'press-releases.international_tax' );
		// }else if($id == 2){
		// 	return $this->output( 'press-releases.indonesia_tuan' );
		// }else if($id == 3) {
  //           return $this->output('press-releases.indonesia_imf');
  //       }else if($id == 4){
  //               return $this->output( 'press-releases.indonesia_ready_to_host' );
		// }else if($id == 5){
  //           return $this->output( 'press-releases.indonesia_ready_to_host-INDONESIA' );
		// }else if($id == 6){
		// 	return $this->output( 'press-releases.conference_IIW' );
  //       }else{
		// 	return $this->output( 'press-releases.detail' );
		// }

		$query = PressRelease::find($id);
		$file = $query->file('pressfile')->first();

		$data = compact( 'query', 'file' );

		return $this->output( 'press-releases.detail', $data );
	}
}
