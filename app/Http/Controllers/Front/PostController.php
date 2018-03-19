<?php

namespace App\Http\Controllers\Front;

use App\Models\Menu;
use App\Models\PostMap;

class PostController extends BaseController
{
    use Traits\PostTrait;

	public function index( $id=null )
	{
        $curr_menu = Menu::find($id);

        if( empty($id) || empty($curr_menu->post_map_id) )
        {
            return abort(404);
        }

        /**
         * find side menu based on ID 
         */
        if( $curr_menu->nest_depth == 0 )
        {
            $parent_menu = Menu::where( 'parent_id', '=', $id )->orderBy('nest_left', 'asc')->get(); 
        }
        else if( $curr_menu->nest_depth == 1 )
        {
            $parent_menu = Menu::where( 'parent_id', '=', $curr_menu->parent_id )->orderBy('nest_left', 'asc')->get(); 
        }
        else
        {
            $to_curr_menu = Menu::where( 'id', '=', $curr_menu->parent_id )->first();
            $parent_menu = Menu::where( 'parent_id', '=', $to_curr_menu->parent_id )->orderBy('nest_left', 'asc')->get(); 
        }  

        /**
         * set child menu
         * @var array
         */
        $child_menu = [];
        foreach( $parent_menu as $pm )
        {
            $child_menu[$pm->id] = Menu::where( 'parent_id', '=', $pm->id)->orderBy('nest_left', 'asc')->get();
        }

        /**
         * set display DATA
         * @var [type]
         */
        $db_post_map = PostMap::find( $curr_menu->post_map_id );

        $data = compact( 'db_post_map', 'parent_menu', 'child_menu', 'curr_menu' );

        return $this->postMapOutput( $db_post_map, $data, 'posts' );
	}
}