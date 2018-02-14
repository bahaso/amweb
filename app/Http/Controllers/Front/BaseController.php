<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\BlankController;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Sponsor;
use App\Models\Menu;

class BaseController extends BlankController
{
	public function __construct( Request $r )
	{
		parent::__construct( $r );
	}

	protected function beforeOutput()
	{
        //sponsors
        $sponsors = Sponsor::get();
        $sponsor_img = [];
        foreach( $sponsors as $s )
        {
            $sponsor_img[$s->id] = $s->file( 'img_sponsor' )->first();
        }

        //get menu list and children menu
        $menu_parents = Menu::where( 'nest_depth', '=', 0)->orderBy('nest_left', 'asc')->get();

        $menu_childs = [];

        foreach( $menu_parents as $mp )
        {
        	$menu_childs[ $mp->id ] = Menu::where( 'parent_id', '=', $mp->id )->where( 'nest_depth', '=', 1)->orderBy('nest_left', 'asc')->get();
        }

		return [
			'sponsors' => $sponsors,
			'sponsor_img' => $sponsor_img,
			'menu_parents' => $menu_parents,
			'menu_childs' => $menu_childs
		];
	}

}
