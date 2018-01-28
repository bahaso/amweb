<?php

namespace App\Models;

class Post extends BaseModel
{
	protected $table = 'rainlab_blog_posts';

	use Traits\StandardTrait,
		Traits\FileTrait;

	public function scopeJoinCategoryMaps( $q )
	{
		return $q->join( 'rainlab_blog_posts_categories as rmap', 'rmap.post_id', '=', 'rainlab_blog_posts.id' );
	}	

}

