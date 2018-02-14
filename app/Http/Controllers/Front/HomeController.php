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

			if( $slider[$s->id] )
			{
				$slider[$s->id] = $slider[$s->id]->original();
			}
		}

		//get news articles
		$post_news = Post::whereCategoryType( 'news' )->get();

		$data = compact( 'slideshow', 'slider', 'post_news' );

		return $this->output( 'home.index', $data );

		// $test = Attachment::get();
		// dd( $test );
		// $first = $test->first();
		// dd( $first->coverThumb( '220x212' ) );
		// dd( $first->file( 'featured_images' )->first()->original() );
		// dd( $first->coverOriginal() );
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
