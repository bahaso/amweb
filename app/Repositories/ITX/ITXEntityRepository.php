<?php

namespace App\Repositories\ITX;

use App\Libraries\XML\DOMXML;
use Cache;

class ITXEntityRepository extends ITXRepository
{
    protected function locationEntityId( $location )
    {
        $ids =
        [
            'bali'       => '70f6e2a5-09a5-4a62-b4ba-3286756ce4e8',
            'lombok'     => 'acac43d6-bc04-468b-a59c-7b074c4a7d60',
            'toraja'     => 'b89f47ce-3a99-4630-9140-b10a266e7e84',
            'komodo'     => 'c296c16d-434f-4ccf-a968-05f9354d7eb8',
            'toba'       => 'f856a86b-c586-4902-a631-ab28d2f73f64',
            'yogya'      => '7bc7e475-fa5f-4d4b-8f8d-add1a4e0affc'
        ];

        return $ids[ $location ];
    }

    protected function searchDOMXMLEntities( $location, $at_date )
    {
        $conn = $this->conn;
        $id   = $this->locationEntityId( $location );

        $search_content = $conn->getLocationEntitySearchContent( $id, $at_date );
        $dom = new DOMXML( $search_content );

        return $dom;
    }

    protected function searchParentEntities( $location, $at_date )
    {
        return Cache::remember( "ITX:ENTITY:PACKAGES:PARENTS:${location}_${at_date}", cache_long_ttl(), function() use ( $location, $at_date )
        {
            $dom = $this->searchDOMXMLEntities( $location, $at_date );

            $data = [];

            $parents = $dom->getTags( 'Parents' )->first();
            foreach( $parents->getTags( 'ParentEntity') as $p )
            {
                $id = $p->getAttribute( 'Id' );

                $dom_phone = $p->getTags( 'MainPhone' )->first();
                if( $dom_phone )
                {
                    $phone = $dom_phone->getAttribute( 'FullPhoneNumberLocalised' );
                    $phone_area     = $dom_phone->getAttribute( 'AreaCode' );
                    $phone_number   = $dom_phone->getAttribute( 'Number' );
                    $phone_country  = $dom_phone->getAttribute( 'CountryCode' );
                }
                else {
                    $phone =
                    $phone_area =
                    $phone_number =
                    $phone_country = '';
                }

                $dom_address = $p->getTags( 'PhysicalAddress' )->first();
                if( $dom_address )
                {
                    $line2 = $dom_address->getAttribute( 'Line2' );
                    $line3 = $dom_address->getAttribute( 'Line3' );

                    $address = $dom_address->getAttribute( 'Line1' );
                    if( $line2 )
                    {
                        $address .= " ${line2}";
                    }

                    if( $line3 )
                    {
                        $address .= " ${line3}";
                    }

                    $address .= sprintf( ' %s, %s',
                                $dom_address->getAttribute( 'PostCode' ),
                                $dom_address->getAttribute( 'City' ));

                }else $address = '';

                $data[ $id ] =
                [
                    'code'      => $p->getAttribute( 'Code' ),
                    'name'      => $p->getAttribute( 'Name' ),
                    'email'     => $p->getAttribute( 'PublicEmail' ),
                    'phone'     =>
                    [
                        'full'      => $phone,
                        'area'      => $phone_area,
                        'number'    => $phone_number,
                        'country'   => $phone_country
                    ],
                    'address'   => $address
                ];
            }

            return $data;
        });
    }

    protected function makeEntityData( $e, $merchant_info )
    {
        $name      = $e->getAttribute( 'Name' );

        $description = $e->getTags( 'LongDescription' )->first();
        $description = $description? $description->getValue() : '';

        return
        [
            'parent_id'     => $e->getAttribute( 'ParentId' ),
            'name'          => ucwords(strtolower( $name )),
            'code'          => array_get( $merchant_info, 'code' ),
            'images'        => $e->getImageUrls( 'Url' ),
            'description'   => $description,
            'merchant'      => $merchant_info
        ];
    }

    public function packages( $locations, $at_date = null )
    {
        if( empty( $at_date ))
        {
            $at_date = Date( "Y-m-d" );
        }

        $locations_str = strtoupper( implode( $locations, '.'));

        return Cache::remember( "ITX:ENTITY:PACKAGES:LOCATION_LIST:${locations_str}_${at_date}", cache_long_ttl(), function() use ( $locations, $at_date )
        {
            $conn = $this->conn;
            $data = [];

            foreach( $locations as $loc )
            {
                $dom = $this->searchDOMXMLEntities( $loc, $at_date );

                $entities = $dom->getTags( 'Entities' )->first();
                foreach( $entities->getImmediateTags( 'Entity' ) as $e )
                {
                    $parent_id = $e->getAttribute( 'ParentId' );

                    $id   = $e->getAttribute( 'Id' );
                    $name = $e->getAttribute( 'Name' );

                    $defined_id = $id;

                    /**
                     * Business Detail
                     */
                    $parents = $this->searchParentEntities( $loc, $at_date );
                    $parent  = array_get( $parents, $parent_id );

                    if( !empty( $parent ))
                    {
                        $merchant_info =
                            [
                                'code' => array_get( $parent, 'code' ),
                                'name' => array_get( $parent, 'name' ),
                                'address' =>
                                [
                                    array_get( $parent, 'address' ),
                                    ''
                                ],
                                'phone' =>
                                [
                                    'country_code'  => array_get( $parent, 'phone.country' ),
                                    'area_code'     => array_get( $parent, 'phone.area' ),
                                    'number'        => array_get( $parent, 'phone.number' )
                                ],
                                'website' => '',
                                'email'   => array_get( $parent, 'email' )
                            ];
                    }
                    else
                    {
                        $merchant_info =
                            [
                                'code'      => '',
                                'name'      => '',
                                'address'   => '',
                                'phone'     => [
                                    'country_code' => '',
                                    'area_code'    => '',
                                    'number'       => ''
                                ],
                                'website' => '',
                                'email'   => ''
                            ];
                    }

                    /**
                     * Entity Product Detail
                     */
                    $data[ $loc ][ $defined_id ] = $this->makeEntityData( $e, $merchant_info );

                    /**
                     * Children
                     */
                    $dom_children = $e->getTags( 'Children' )->first();
                    $children = [];

                    foreach( $dom_children->getImmediateTags( 'Entity') as $e )
                    {
                        $cid = $e->getAttribute( 'Id' );

                        $children[ $cid ] = $this->makeEntityData( $e, $merchant_info );
                    }

                    $data[ $loc ][ $defined_id ][ 'children' ] = $children;
                }
            }

            return $data;
        });
    }

    public function packagesDetail( $location, $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        Cache::forget("ITX:ENTITY:PACKAGES:DETAIL:${location}:${at_date}:${adult_count}");
        return Cache::remember( "ITX:ENTITY:PACKAGES:DETAIL:${location}:${at_date}:${adult_count}", cache_long_ttl(), function()
            use ( $location, $industry_category, $industry_category_group, $at_date, $adult_count )
        {
            $avails  = $this->packagesAvails( $location, $industry_category, $industry_category_group, $at_date, $adult_count );
            $avails  = reset( $avails ); //get first value

            $searchs = $this->packages([ $location ], $at_date );
            $searchs = reset( $searchs ); //get first value

            $data = [];
            if( !empty( $avails ))
            {
                foreach( $searchs as $sid=>$s )
                {
                    $children = array_get( $s, 'children' );

                    foreach( $children as $cid=>$c )
                    {
                        foreach( $avails as $key=>$a )
                        {
                            $search_name = array_get( $c, 'name' );
                            $avail_name  = array_get( $a, 'name' );
                            if( $avail_name == $search_name )
                            {
                                /**
                                 * Set booking uri
                                 */
                                foreach( $a[ 'availabilities'] as $ip=>$ap )
                                {
                                    $ap[ 'book_uri' ] = $this->conn->getBookURI( $at_date, $c[ 'code' ], $ap[ 'provider']);
                                    $a[ 'availabilities' ][ $ip ] = $ap;
                                }

                                $c = array_merge( $c, $a );

                                $s[ 'children' ][ $cid ] = $c;
                                break;
                            }
                        }
                    }

                    $data[ $sid ] = $s;
                }
            }

            return $data;
        });
    }

    public function packageDetail( $slug, $location, $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        $slug_str = strtoupper( $slug );

        return Cache::remember( "ITX:ENTITY:PACKAGE:DETAIL:${slug}:${at_date}:${adult_count}", cache_long_ttl(), function()
            use ( $slug, $location, $industry_category, $industry_category_group, $at_date, $adult_count )
        {
            $details = $this->packagesDetail( $location, $industry_category, $industry_category_group, $at_date, $adult_count );

            $detail = null;
            foreach( $details as $d )
            {
                $parent_name = array_get( $d, 'name' );
                if( str_slug( $slug ) == str_slug( $parent_name ))
                {
                    $detail = $d;
                }

                $children = array_get( $d, 'children' );
                foreach( $children as $c )
                {
                    $child_name = array_get( $c, 'name' );
                    if( $slug == str_slug( $child_name ))
                    {
                        $detail = $c;
                    }
                }

                if( !empty( $detail ))
                {
                    break;
                }
            }

            return $detail;
        });
    }
}
