<?php

namespace App\Http\Controllers\Front;

use App\Libraries\Simplify\ITXConnection;
use App\Libraries\XML\DOMXML;

use App\Models\Post;
use App\Models\Attachment;
use App\Models\Slide;
use App\Models\Sponsor;

class HomeController extends BaseController
{
	public function index()
	{
		// $this->testITXQuery();

		//main slideshow 
		$slideshow = Slide::get();
		$slider = [];
		foreach( $slideshow as $s )
		{
			$slider[$s->id] = $s->file( 'img_slide' )->first();
		}

		//get news articles
		$post_news = Post::whereCategoryType( 'news' )->wherePublishType( 'publish' )->get();

		$data = compact( 'slideshow', 'slider', 'post_news' );

		return $this->output( 'home.index', $data );
	}

	public function testITXQuery()
	{
		$connection = new ITXConnection;
		$search_content = $connection->getLocationSearchContent( 'jakarta' );

		$dom = new DOMXML( $search_content );

		foreach( $dom->getTags( 'Product' ) as $product )
		{
			echo $product->getAttribute( 'name' );
			echo $product->getTags( 'Description' )->first()->getValue();
			echo print_r( $product->getImageUrls() );
			echo $product->getImageUrl();
			echo '<br/>';
		}
	}
}
