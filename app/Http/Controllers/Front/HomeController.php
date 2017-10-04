<?php

namespace App\Http\Controllers\Front;

use App\Libraries\Simplify\ITXConnection;
use App\Libraries\XML\DOMXML;

class HomeController extends BaseController
{
	public function index()
	{
		// $this->testITXQuery();
		return $this->output( 'home.index' );
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
