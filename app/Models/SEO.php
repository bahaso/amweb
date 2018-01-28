<?php

namespace App\Models;

class SEO extends BaseModel
{
	protected $table = 'seos';

	/**
	 * @var string
	 */
	protected $setting_slug = 'store';

	/**
	 * @return morphTo
	 */
	public function item()
	{
		return $this->morphTo( 'seo' );
	}

	/**
	 * @return string
	 */
	protected function getMetaTitle()
	{
		return sprintf( '<title>%s</title>', $this->getTitle() );
	}

	/**
	 * @param  string $name   
	 * @param  string $content
	 * @return string         
	 */
	protected function metaHTML( $name, $content )
	{
		return sprintf( '<meta name="%s" content="%s" />', $name, $content );
	}

	/**
	 * @param  string $rel 
	 * @param  string $href
	 * @return string      
	 */
	protected function linkHTML( $rel, $href )
	{
		return sprintf( '<link rel="%s" href="%s" />', $rel, $href );
	}

	/**
	 * @param  string 	$attrs    
	 * @param  string 	$key      
	 * @param  function $html_func
	 * @return string           
	 */
	protected function getMetaHTML( $attrs, $key, $html_func )
	{
		if ( !empty( $this->$key ) )
		{
			$attrs = array_replace( $attrs, $this->$key );
		}

		$html = '';
		foreach( $attrs as $key => $val )
		{
			if( empty( $val ) ) continue;

			$html .= $html_func( $key, $val );
		}

		return $html;
	}

	/**
	 * @return string
	 */
	protected function getMeta()
	{
		$metas = 
		[
			'description' 	=> $this->getDescription(),
			'keywords'		=> $this->getKeywords()
		];

		return $this->getMetaHTML( $metas, 'meta',
		function( $key, $val )
		{
			return $this->metaHTML( $key, $val );
		});
	}

	/**
	 * @return string
	 */
	protected function getOgMeta()
	{
		$ogs = 
		[
			'type'			=> 'website',
			'title' 		=> $this->getTitle(),
			'description' 	=> $this->getDescription(),
			'url'			=> $this->getCanonicalUrl(),
			'image'			=> $this->getCoverImage(),
		];

		return $this->getMetaHTML( $ogs, 'og',
		function( $key, $val )
		{
			return sprintf( '<meta property="og:%s" content="%s" />', $key, $val );
		});
	}

	/**
	 * @return string
	 */
	protected function getTwitterMeta()
	{
		$tws =
		[
			'card'			=> 'summary',
			'title' 		=> $this->getTitle(),
			'description' 	=> $this->getDescription(),
			'image'			=> $this->getCoverImage(),
			'site'			=> $this->getTwitterSite(),
			'creator'		=> $this->getCreatorSite()
		];

		return $this->getMetaHTML( $tws, 'tw',
		function( $key, $val )
		{
			return $this->metaHTML( "twitter:${key}", $val );
		});
	}

	/**
	 * @return string
	 */
	protected function getLink()
	{
		$link = 
		[
			'canonical' => $this->getCanonicalUrl()
		];

		return $this->getMetaHTML( [], 'link',
		function( $key, $val )
		{
			return $this->linkHTML( $key, $val );
		});
	}

	/**
	 * @return string
	 */
	protected function getTwitterSite()
	{
		$setting = $this->getSetting();
		return $setting->get('twitter_username');
	}

	/**
	 * @return string
	 */
	protected function getCreatorSite()
	{
		$setting = $this->getSetting();
		return $setting->get( 'twitter_username' );
	}

	/**
	 * @return Setting
	 */
	protected function getSetting()
	{
		return Setting::findOrNew( $this->setting_slug );
	}

	/**
	 * @return string
	 */
	protected function getTitle()
	{
		if( empty( $this->title ) )
		{
			$setting = $this->getSetting();

			$site_name = $setting->get( 'website_name' );
			$site_line = $setting->get( 'website_tagline' );

			if( !empty( $site_name ) && 
				!empty( $site_line ) )
			{
				return sprintf( '%s - %s', 
								$setting->get( 'website_name'), 
								$setting->get( 'website_tagline') );	
			}
		}

		else return $this->title;
	}

	/**
	 * @return string
	 */
	protected function getKeywords()
	{
		return $this->keywords;
	}

	/**
	 * @return string
	 */
	protected function getDescription()
	{
		return $this->description;
	}

	/**
	 * @return string
	 */
	protected function getCanonicalUrl()
	{
		if( $url = array_get( $this->link, 'canonical' ) )
		{
			return $url;
		}

		return '';
	}

	/**
	 * @return string
	 */
	protected function getCoverImage()
	{
		$obj = $this->item;

		if( $obj &&
			$obj->cover )
		{
			return $obj->coverOriginal();
		}

		return '';
	}

	/**
	 * @return string
	 */
	protected function getRobots()
	{
		$follow = $this->robot_follow? $this->robot_follow : 'follow';
		$index  = $this->robot_index? $this->robot_index : 'index';

		return $this->metaHTML( 'robots', "${index}, ${follow}" );
	}

	/**
	 * @return string
	 */
	public function render()
	{
		return

		$this->getMetaTitle().
		$this->getMeta().
		$this->getOgMeta().
		$this->getTwitterMeta().
		$this->getRobots().
		$this->getLink();
	}

	/**
	 * @param void
	 */
	public function setAttributes( $attrs )
	{
		/**
		 * Before Set Properties
		 */
		if( array_get( $attrs, 'setting_slug' ) )
		{
			$this->setting_slug = array_pull( $attrs, 'setting_slug' );
		}

		/**
		 * Set Properties
		 */
		foreach( $attrs as $k=>$a )
		{
			$this->$k = $a;
		}

		/**
		 * After Set Properties
		 */
		if( $url = array_get( $attrs, 'url' ) )
		{
			if( empty( $this->link ) ) $this->link = [];

			$this->link = array_replace(
							[
								'canonical' => $url
							], $this->link );
		}

		unset( $this->url );
	}
}