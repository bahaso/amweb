<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\BlankController;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Sponsor;

class BaseController extends BlankController
{
	public function __construct( Request $r )
	{
		parent::__construct( $r );
	}

	protected function beforeOutput()
	{
		//get article about
		$art_about = Post::where('category_type', '=', 'about')
			->whereParentId(NULL)
			->get();

		$art_event = Post::where('category_type', '=', 'events')
			->whereParentId(NULL)
			->get();

		$art_travel = Post::where('category_type', '=', 'travel-information')
			->whereParentId(NULL)
			->get();	

        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

		return [
			'art_about' => $art_about,
			'art_event' => $art_event,
			'art_travel' => $art_travel,
			'sponsors' => $sponsors,
			'sponsor_img' => $sponsor_img
		];
	}

}
