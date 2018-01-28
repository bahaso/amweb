<?php

namespace App\Http\Controllers\Front;

use App\Models\Faq;
use App\Models\Sponsor;

class FaqController extends BaseController
{
	public function index()
	{
		$queries = Faq::all();

        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first()->original();
        }

        $data = compact( 'queries', 'sponsors', 'sponsor_img' );

		return $this->output( 'faqs.index', $data );
	}
}