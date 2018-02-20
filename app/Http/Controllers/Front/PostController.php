<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\PostMap;
use App\Models\PostTravel;
use App\Models\PostDiscover;
use App\Models\PostDiscoverTab;
use App\Models\PostDiscoverTabContent;
use App\Models\PostDiscoverExtra;
use App\Models\Menu;
use App\Models\Faq;
use App\Models\FaqTab;

class PostController extends BaseController
{
	public function index( $id=null )
	{
        $curr_menu = Menu::find($id);

        if( empty($id) || empty($curr_menu->post_map_id) )
        {
            return abort(404);
        }

        $db_post_map = PostMap::find( $curr_menu->post_map_id );

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
        $data = compact( 'db_post_map', 'parent_menu', 'child_menu', 'curr_menu' );

        if( $db_post_map->post_type == 'faqs' )
        {
            $data['faq']     = Faq::find( $db_post_map->post_id );
            $data['faq_tab'] = FaqTab::whereFaqId( $db_post_map->post_id)->get();

            return $this->output( 'posts.faqs', $data );
        }
        else if( $db_post_map->post_type == 'travel' )
        {
            $db_travel = PostTravel::find( $db_post_map->post_id );

            $data['db_travel'] = $db_travel;
            $data['db_travel_image'] = $db_travel->file( 'travelImage' )->first();

            return $this->output( 'posts.travel', $data );
        }
        else if( $db_post_map->post_type == 'discover' )
        {
            $data['db_discover']            = PostDiscover::find( $db_post_map->post_id );
            
            /**
             * set up discover tab
             */
            $data['db_discover_tab']        = PostDiscoverTab::whereDiscoverId( $data['db_discover']->id )->get();
            $tab_image = [];
            $tab_child = [];
            $tab_child_image = [];


            foreach( $data['db_discover_tab'] as $dt )
            {
                $tab_image[ $dt->id ] = $dt->file( 'discoverTabImage' )->first();

                /**
                 * set up discover tab content
                 */
                $tab_child[ $dt->id ] = PostDiscoverTabContent::whereDiscoverTabId( $dt->id )->get();

                foreach( $tab_child[ $dt->id ] as $tc )
                {
                    $tab_child_image[ $tc->id ] = $tc->file( 'tabContentImage' )->first();
                }

            }

            /**
             * set up discover extra
             */
            $data[ 'db_discover_extra' ] = PostDiscoverExtra::whereDiscoverId( $data['db_discover']->id )->get();
            $extra_image = [];

            foreach( $data['db_discover_extra'] as $de )
            {
                $extra_image[ $de->id] = $de->file( 'discoverExtraImage' )->first();
            }

            $data['db_discover_tabImage']   = $tab_image;
            $data['tab_child']              = $tab_child;
            $data['tab_child_image']        = $tab_child_image;
            $data['extra_image']        = $extra_image;

            return $this->output( 'posts.discover', $data );
        }
        else
        {
            $db_post = Post::find( $db_post_map->post_id );

            $data['db_post'] = $db_post;

            return $this->output( 'posts.index', $data );
        }
	}
}