<?php

namespace App\Http\Controllers\Front;

use App\Models\Publication;
use App\Models\Sponsor;

class PublicationController extends BaseController
{
	public function index()
	{
		$lists = Publication::whereCategory('publication')->orderBy('date', 'desc')->get();

		//sponsors
		$sponsors = Sponsor::get();
		$sponsor_img = [];
		foreach( $sponsors as $s )
		{
			$sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
		}

		$data = compact( 'lists', 'sponsors', 'sponsor_img' );
		return $this->output( 'publications.index', $data );
	}

	public function detail( $id, $slug )
	{

		// if($id == 1){
		// 	return $this->output( 'publications.economic_panel' );
		// }else if($id == 2){
		// 	return $this->output( 'publications.focus_group' );
		// }else if($id == 3){
		// 	return $this->output( 'publications.international_seminar' );
		// }else if($id == 4){
		// 	return $this->output( 'publications.joint_imf' );
		// }else if($id == 5){
		// 	return $this->output( 'publications.workshop' );
		// }else{
		// 	return $this->output( 'publications.detail' );
		// }

		$query = Publication::find($id);
		$file = $query->file('datafile')->first();

		//sponsors
		$sponsors = Sponsor::get();
		$sponsor_img = [];
		foreach( $sponsors as $s )
		{
			$sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
		}

		$data = compact( 'query', 'file', 'sponsors', 'sponsor_img' );

		return $this->output( 'publications.detail', $data );
	}
}