<?php

if( !function_exists( 'html_css' ) )
{
	/**
	 * @param  string $filename
	 * @param  string $path
	 * @return string
	 */
	function html_css( $filename, $path = 'css/f' )
	{
		return '<link rel="stylesheet" href="'.asset($path . '/' . $filename).'"/>';
	}
}

if( !function_exists( 'html_js' ) )
{
	/**
	 * @param  string  $path
	 * @param  array   $attrs
	 * @param  boolean $escape
	 * @return string       
	 */
	function html_js( $filename, $path = 'js/f', $attrs = [], $escape = false )
	{
		$extras = '';
		if( $attrs )
		{
			foreach( $attrs as $k=>$a )
			{
				$extras .= " $k";
				if( !empty( $a ))
				{
					$extras .= "='$a'";
				}
			}
		}

		$html = '<script src="%s" %s></script>';
		if( $escape ) $html = addslashes($html);

		$str =  sprintf( $html, asset($path . '/' . $filename ), $extras );

		return $str;
	}
}

if ( !function_exists( 'html_link' ) )
{
	/**
	 * Generate anchor link tag
	 * @param  string $label
	 * @param  string $uri  
	 * @param  string $target
	 * @return string       
	 */
	function html_link( $label, $uri, $target="_self" )
	{
		if( !empty( $label ) )
		{
			return sprintf( '<a href="%s" target="%s">%s</a>', $uri, $target, $label );
		}

		return '';
	}
}

if ( !function_exists( 'html_embed_css' ) )
{
	/**
	 * Return css file content as string
	 * @param  string
	 * @param  string
	 * @return string
	 */
	function html_embed_css( $filename, $path = 'css/f' )
	{
		$path = rtrim( $path, '/' );
		$css  = File::get( "$path/$filename" );

		return sprintf( '<style type="text/css">%s</style>', $css );
	}
}

if ( !function_exists( 'html_embed_js' ) )
{
	/**
	 * Return js file content as string
	 * @param  string
	 * @param  string
	 * @return string
	 */
	function html_embed_js( $filename, $path = 'js/f' )
	{
		$path = rtrim( $path, '/' );
		$css  = File::get( "$path/$filename" );

		return sprintf( '<script type="text/javascript">%s</script>', $css );
	}
}

if( !function_exists( 'html_img' ) )
{
	/**
	 * @param  string $filename
	 * @param  array  $configs
	 * @return string
	 */
	function html_img( $filename, $configs = [] )
	{
		extract( $configs );

		if( !isset( $w )) $w = '';
		if( !isset( $h )) $h = '';

		if( !isset( $alt )) $alt = '';
		if( !isset( $title )) $title = $alt;

		if( !isset( $id )) $id = '';
		if( !isset( $class )) $class = '';

		if( !isset( $filename )) 
		{
			$rand = rand( 1, 16 ); //placekitten generate random numbered 1-16 kitten
			$filename = "http://placekitten.com/$w/$h?image=$rand";
			// $filename = "https://placeimg.com/$w/$h/tech?image=$rand";
		}
		else
		{
			if( empty( $raw ) ) $filename = asset( $filename );
		}

		$attrs = '';
		if( isset( $style )) $attrs .= sprintf( ' style="%s"', $style );


		return sprintf( '<img id="%s" class="%s" src="%s" width="%s" height="%s" alt="%s" title="%s" %s />' , 
			$id, $class, $filename, $w, $h, $alt, $title, $attrs  );
	}
}

if( !function_exists( 'html_img_site' ) )
{
	/**
	 * @param  string $filename
	 * @param  array  $configs
	 * @return string
	 */
	function html_img_site( $filename, $configs = [] )
	{
		extract( $configs );

		if( !isset( $dir )) $dir = 'f';
		if( !isset( $path ))  $path  = 'images';

		return html_img( "$path/$dir/$filename", $configs );
	}
}

if( !function_exists( 'html_bg_img' ) )
{
	/**
	 * @param  string  $filename
	 * @param  integer $w
	 * @param  integer $h
	 * @return string          
	 */
	function html_bg_img( $filename, $w = null, $h = null )
	{
		if( !isset( $filename ))
		{
			$rand = rand( 1, 16 );
			$filename = "http://placekitten.com/$w/$h?image=$rand";
			// $filename = "https://placeimg.com/$w/$h/tech?image=$rand";
		}

		return sprintf( "background-image:url(%s)", $filename );
	}
}

if ( !function_exists( 'html_placeholder' ) )
{
	/**
	 * @param  integer
	 * @param  integer
	 * @param  boolean
	 * @return string
	 */
	function html_placeholder( $w, $h, $is_ads = false )
	{
		$html = '<a href="#"><img src="http://placehold.it/%sx%s" width="%s" height="%s" class="st-img-holder" /></a>';

		if( $is_ads )
		{
			$html = "<div class=\"ads ads-${w}x${h}\">$html</div>";
		}

		// http://placehold.it/%sx%s
		return sprintf( $html, $w, $h, $w, $h );
	}
}

if ( !function_exists( 'html_class_last' ) )
{
	/**
	 * @param  integer $iteration
	 * @param  integer $length   
	 * @return string           
	 */
	function html_class_last( $iteration, $length, $class = 'last' )
	{
		if( $iteration == $length - 1 )
		{
			return $class;
		}

		return '';
	}
}

if ( !function_exists( 'html_class_active' ) )
{
	function html_class_active( $active, $string )
	{
		if( $active == $string ) return 'active';
		return '';
	}
}

if ( !function_exists( 'html_class_first' ) )
{
	/**
	 * @param  integer $iteration
	 * @return string           
	 */
	function html_class_first( $iteration )
	{
		if( $iteration == 0 )
		{
			return 'first';
		}

		return '';
	}
}

if ( !function_exists( 'html_class_cond' ) )
{
	/**
	 * @param  boolean $cond 
	 * @param  string  $class
	 * @return string       
	 */
	function html_class_cond( $cond, $class )
	{
		if( !empty( $cond ) ) return $class;
		return '';
	}
}

if ( !function_exists( 'html_time' ) )
{
	/**
	 * @param  string $label
	 * @param  string $time   
	 * @param  array  $configs   
	 * @return string           
	 */
	function html_time( $label, $time, $configs = [] )
	{
		extract( $configs );

		if( !isset( $class )) $class = "";

		return sprintf( '<time itemprop="datePublished" datetime="%s" class="%s">%s</time>',
			$time, $class, $label );
	}
}

if ( !function_exists( 'html_num_format' ) )
{
	/**
	 * @param  integer $num
	 * @return string           
	 */
	function html_num_format( $num )
	{
		return number_format( $num, 0, '', '.' );
	}
}

if ( !function_exists( 'html_date_format' ) )
{
	/**
	 * @param  integer $num
	 * @return string           
	 */
	function html_date_format( $val, $format = 'Y-m-d' )
	{
		return Date( $format, strtotime( $val ));
	}
}