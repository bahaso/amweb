<?php

namespace App\Models\Traits;

use App\Models\File;

trait FileTrait
{
    protected $file_cover_name = 'featured_images';

	/**
     * @return MorphMany
     */
    public function files( $field = 'image' )
    {
        return $this->morphMany( File::class, 'attachment' )
                    ->whereField( $field )
        			// ->orderBy( 'is_featured', 'desc' )
                    ->orderBy( 'sort_order', 'asc' );
    }

    /**
     * @return MorphOne
     */
    public function cover()
    {
    	return $this->morphOne( File::class, 'attachment' )
                    ->whereField( $this->file_cover_name );
    }

    /**
     * @return MorphOne
     */
    public function file( $field = 'featured_images' )
    {
        return $this->morphOne( File::class, 'attachment' )
                    ->whereField( $field );
    }

    public function coverId()
    {
        return $this->cover? $this->cover->id : null;
    }

    /**
     * @param  string $size
     * @param  array  $configs
     * @return string         
     */
    public function coverThumb( $size, $configs = [] )
    {
    	$cover = $this->cover;
    	if( $cover )
    	{
    		return $cover->thumb( $size, $configs );
    	}

    	return '';
    }

    public function coverOriginal()
    {
        $cover = $this->cover;
        if( $cover )
        {
            return $cover->original();
        }

        return '';
    }

    public function coverRaw()
    {
        $cover = $this->cover;
        if( $cover )
        {
            return $cover->raw();
        }

        return '';
    }

    public function coverTitle()
    {
        $cover = $this->cover;
        if( $cover )
        {
            return $cover->getTitle();
        }

        return '';
    }

    public function coverDescription()
    {
        $cover = $this->cover;
        if( $cover )
        {
            return $cover->getDescription();
        }

        return '';
    }

    public function coverWidth()
    {
        return $this->cover? $this->cover->width : 0;
    }

    public function coverHeight()
    {
        return $this->cover? $this->cover->height : 0;
    }

    public function thumb( $field, $size, $configs = [] )
    {
        if( $file = $this->file( $field )->first() )
        {
            return $file->thumb( $size, $configs );
        }
        
        return null;
    }

    public function fileId( $field )
    {
        $file = $this->file( $field )->first();

        return $file? $file->id : null;
    }
}