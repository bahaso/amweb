<?php

namespace App\Libraries\XML;

use DOMElement;

class DOMXMLItem
{
    use Traits\DOMXMLItemTrait;

    /**
     * @var DOMElement
     */
    private $node;

    /**
     * @param DOMElement $el
     */
    public function __construct( DOMElement $el )
    {
        return $this->node = $el;
    }

    /**
     * element getter, function must be "getNode()" as also used in trait
     * @return DOMElement
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Get element value
     * @return string
     */
    public function getValue()
    {
        return $this->getNode()->nodeValue;
    }

    /**
     * Get attribute value
     * @param  string $attr
     * @return string
     */
    public function getAttribute( $attr )
    {
        return $this->getNode()->getAttribute( $attr );
    }

    /**
     * get image url of a product node
     * @param  string     $img_attr
     * @return Collection
     */
    public function getImageUrls( $img_attr = 'relative_url' )
    {
        $imgs = [];

        $root_img = $this->getTags( 'Images' )->first();
        foreach( $root_img->getTags( 'Image' ) as $img )
        {
            $imgs[] = $img->getAttribute( $img_attr );
        }

        return collect( $imgs );
    }

    /**
     * Get first image url of a product node
     * @param  string $img_attr
     * @return string
     */
    public function getImageUrl( $img_attr = 'relative_url' )
    {
        $image_urls = $this->getImageUrls( $img_attr );
        return $image_urls->first();
    }
}
