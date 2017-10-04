<?php

namespace App\Libraries\XML;

use DOMDocument;

class DOMXML
{
    use Traits\DOMXMLItemTrait;

    /**
     * Root Element
     */
    private $node;

    /**
     * Constructor
     * @param string - xml
     */
    public function __construct( $root_node )
    {
        $this->_initXML( $root_node );
    }

    /**
     * Load XML
     * set node property
     * @return void
     */
    private function _initXML( $root_node )
    {
        $node = new DOMDocument();
        $node->loadXML( $root_node );

        $this->node = $node->documentElement;
    }

    /**
     * get root element
     * @return DOMElement
     */
    public function getNode()
    {
        return $this->node;
    }
}
