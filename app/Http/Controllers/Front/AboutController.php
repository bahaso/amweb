<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Faq;

class AboutController extends BaseController
{
	public function index(){

		$article = Post::all();

        //set side bar navigation and child
        $side_nav = Post::whereCategoryType('about')
        	->whereParentId(NULL)
        	->get();

        $side_nav_child = [];

        foreach( $side_nav as $sn )
        {
        	$side_nav_child[ $sn->id ] = Post::whereParentId( $sn->id )->get();
        }

        $data = compact( 
        	'article', 
        	'side_nav',
        	'side_nav_child'
    	);

		return $this->output( 'abouts.index', $data );
	}

    public function faq(){

        $queries = Faq::all();

        //set side bar navigation and child
        $side_nav = Post::whereCategoryType('about')
            ->whereParentId(NULL)
            ->get();

        $side_nav_child = [];

        foreach( $side_nav as $sn )
        {
            $side_nav_child[ $sn->id ] = Post::whereParentId( $sn->id )->get();
        }

        $data = compact( 
            'queries',
            'side_nav',
            'side_nav_child'
         );

        return $this->output( 'abouts.faq', $data );
    }

	function detail( $id, $slug=null ){

		$curr_article = Post::find( $id );

        //set side bar navigation and child
        $side_nav = Post::whereCategoryType('about')
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

		return $this->output( 'abouts.detail', $data );
	}

	public function vti()
	{
		return $this->output( 'abouts.vti' );
	}

	public function imf()
	{
		return $this->output( 'abouts.imf' );
	}

	public function imfWorldBank()
	{
		return $this->output( 'abouts.imf-world-bank' );
	}

	public function worldBank()
	{
		return $this->output( 'abouts.world-bank' );
	}

	public function am2018()
	{
		return $this->output( 'abouts.am2018' );
	}
}