<?php

namespace App\Http\Controllers\Front;

use App\Models\PostMap;

class ArticleController extends BaseController
{
    use Traits\PostTrait;

	public function index( $id=null )
	{
        $db_post_map = PostMap::find( $id );

        if( empty($id) || empty($db_post_map) )
        {
            return abort(404);
        }

        /**
         * set display DATA
         * @var [type]
         */
        $data = compact( 'db_post_map' );

        return $this->postMapOutput( $db_post_map, $data, 'articles' );
	}
}