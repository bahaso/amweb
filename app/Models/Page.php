<?php

namespace App\Models;

use App\Services\Back\FormService;
use Illuminate\Database\Eloquent\Builder;

class Page extends BaseModel
{
	use Traits\StandardTrait,
		Traits\RouteTrait,
		Traits\SEOTrait;

	public static $TYPE_TEXT     = 'text';
    public static $TYPE_TEXTAREA = 'textarea';
    public static $TYPE_EDITOR   = 'editor';
    public static $TYPE_IMAGE    = 'image';

	/**
     * @var array
     */
    protected $url_pattern = [
        'b.edit'    => 'b.pages.form',
        'b.store'   => 'b.pages.store',
        'b.delete'  => 'b.pages.delete',
    ];

    /**
     * @var array
     */
    protected $url_pattern_params = [
        'b.edit'    => [ 'id' ],
        'b.store'   => [ 'id' ],
        'b.delete'  => [ 'id' ],
    ];

    public function getContents()
    {
    	$return = json_decode( $this->contents );
        if( !$return ) return [];

        return $return;
    }

    public function get( $key )
    {
        $fields = $this->getContents();

        foreach( $fields as $f )
        {
            if( $f->key == $key ) 
            {
                switch( $f->type )
                {
                    case self::$TYPE_IMAGE:
                        return $this->file( $key )->first();
                        break;
                    default:
                        return $f->value;
                } 
            };
        }

        return null;
    }
}