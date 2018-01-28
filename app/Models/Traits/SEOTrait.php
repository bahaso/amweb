<?php

namespace App\Models\Traits;

use App\Models\SEO;

trait SEOTrait
{
	/**
     * @return MorphOne
     */
    public function seo()
    {
    	return $this->morphOne( SEO::class, 'seo' );
    }

    public function getDefaultSEOTitle()
    {
    	return $this->name;
    }

	public function storeSEO( $inputs )
	{
		extract( $inputs );

		$curr = $this->seo;
		if( !$curr )
		{
			$curr = new SEO;
		}

		$title = empty( $seo_title )? $this->getDefaultSEOTitle() : $seo_title;

		$curr->title 		= $title;
		$curr->keywords 	= $seo_keywords;
		$curr->description 	= $seo_description;
		$curr->robot_index 	= $seo_index;
		$curr->robot_follow = $seo_robot;
		$curr->seo_id 		= $this->id;
		$curr->seo_type 	= static::class;
		$curr->save();
	}
}