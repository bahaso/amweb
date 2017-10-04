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
     * @return Collection
     */
    public function getImageUrls()
    {
        $imgs = [];

        $root_img = $this->getTags( 'Images' )->first();
        foreach( $root_img->getTags( 'Image' ) as $img )
        {
            $imgs[] = $img->getAttribute( 'relative_url' );
        }

        return collect( $imgs );
    }

    /**
     * Get first image url of a product node
     * @return string
     */
    public function getImageUrl()
    {
        $image_urls = $this->getImageUrls();
        return $image_urls->first();
    }
}
