<?php

namespace App\Libraries\XML\Traits;

use App\Libraries\XML\DOMXMLItem;

trait DOMXMLItemTrait
{
    /**
     * tag getter
     * @param  string $property - can be in format of tag
     * @return mixed
     */
    public function getTags( $tag_name )
    {
        $tags = $this->getNode()->getElementsByTagName( $tag_name );

        $res = [];
        foreach( $tags as $t )
        {
            $res[] = new DOMXMLItem( $t );
        }
        return collect( $res );
    }

    /**
     * @param  string $tag_name
     * @return mixed
     */
    public function getImmediateTags( $tag_name )
    {
        $res = [];
        foreach( $this->getNode()->childNodes as $c )
        {
            if( $c->tagName == $tag_name )
            {
                $res[] = new DOMXMLItem( $c );
            }
        }

        return collect( $res );
    }
}
