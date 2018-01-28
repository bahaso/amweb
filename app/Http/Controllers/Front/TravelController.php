<?php

namespace App\Http\Controllers\Front;

use App\Repositories\ITX\ITXInterface;
use App\Repositories\ITX\ITXEntityInterface;
use Illuminate\Http\Request;

use App\Models\Post;

class TravelController extends BaseController
{
    public function detail( $id, $slug=null )
    {
        $curr_article = Post::find( $id );

        //set side bar navigation and child
        $side_nav = Post::whereCategoryType('travel-information')
            ->whereParentId(NULL)
            ->get();

        $side_nav_child = [];

        foreach( $side_nav as $sn )
        {
            $side_nav_child[ $sn->id ] = Post::whereParentId( $sn->id )->get();
        }

        $data = compact( 
            'curr_article', 
            'side_nav',
            'side_nav_child'
        );

        return $this->output('travels.detail', $data);
    }

    public function indonesia()
    {
        //set side bar navigation and child
        $side_nav = Post::whereCategoryType('travel-information')
            ->whereParentId(NULL)
            ->get();

        $side_nav_child = [];

        foreach( $side_nav as $sn )
        {
            $side_nav_child[ $sn->id ] = Post::whereParentId( $sn->id )->get();
        }

        $data = compact( 
            'side_nav',
            'side_nav_child'
        );

        return $this->output( 'travels.indonesia', $data );
    }
}
