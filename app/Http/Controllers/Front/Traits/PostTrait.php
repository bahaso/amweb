<?php

namespace App\Http\Controllers\Front\Traits;

use App\Models\Post;
use App\Models\PostTravel;
use App\Models\PostDiscover;
use App\Models\PostDiscoverTab;
use App\Models\PostDiscoverTabContent;
use App\Models\PostDiscoverExtra;
use App\Models\Faq;
use App\Models\FaqTab;
use App\Models\PressRelease;
use App\Models\Publication;

trait PostTrait
{

	public function postMapOutput( $db_post_map, $data, $folder )
	{
        if( $db_post_map->post_type == 'photo-gallery' )
        {
            $record = Post::find($db_post_map->post_id);
            $photos = $record->files( 'featured_images' )->get();

            $data['record'] = $record;
            $data['photos'] = $photos;

            return $this->output( $folder.'.photo', $data );
        }
        else if( $db_post_map->post_type == 'publication' )
        {
            $record = Publication::find( $db_post_map->post_id );
            $file = $record->file('datafile')->first();

            $data['record'] = $record;
            $data['file']   = $file;

            return $this->output( $folder.'.publication', $data );
        }
        else if( $db_post_map->post_type == 'press-release' )
        {
            $record = PressRelease::find( $db_post_map->post_id );
            $file = $record->file('pressfile')->first();

            $data['record'] = $record;
            $data['file']   = $file;

            return $this->output( $folder.'.press', $data );
        }
        else if( $db_post_map->post_type == 'faqs' )
        {
            $data['faq']     = Faq::find( $db_post_map->post_id );
            $data['faq_tab'] = FaqTab::whereFaqId( $db_post_map->post_id)->get();

            return $this->output( $folder.'.faqs', $data );
        }
        else if( $db_post_map->post_type == 'travel' )
        {
            $db_travel = PostTravel::find( $db_post_map->post_id );

            $data['db_travel'] = $db_travel;
            $data['db_travel_image'] = $db_travel->file( 'travelImage' )->first();

            return $this->output( $folder.'.travel', $data );
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

            return $this->output( $folder.'.discover', $data );
        }
        else
        {
            $db_post = Post::find( $db_post_map->post_id );

            $data['db_post'] = $db_post;

            return $this->output( $folder.'.index', $data );
        }

	}
}