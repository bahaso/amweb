<?php

namespace App\Repositories\ITX;

use App\Libraries\Simplify\ITXConnection;
use App\Libraries\XML\DOMXML;
use Cache;

class ITXRepository implements ITXInterface
{
    private $conn;

    public function __construct()
    {
        $this->conn = new ITXConnection;
    }

    /**
     * @param  string $location
     * @return string
     */
    protected function locationShortName( $location )
    {
        $short_names =
        [
            'bali'       => 'ba_bharatourbali,ba_odysseysubmarine,ba_probalitour,ba_toureast,ba_melalibali,ba_gdtour,ba_jetwingsbali',
            'lombok'     => 'ba_terimakasihindonesia,ba_panoramadestionation',
            'komodo'     => 'ba_seasafaricruises,nt_plataranindonesia,nt_oradive,nt_komodofantasticotour,flores_exotic,nt_flobamortours',
            'toraja'     => 'ss_dhifatours',
            'toba'       => 'sa_asitadpdsumut'
        ];

        return $short_names[ $location ];
    }

    /**
     * @param  array $locations
     * @return array
     */
	public function packages( $locations )
    {
        $locations_str  = strtoupper(implode( $locations, '.' ));

		return Cache::remember( "ITX:PACKAGES:LOCATION_LIST:${locations_str}", cache_long_ttl(), function() use ( $locations )
		{
            $conn   = $this->conn;
			$data 	= [];

			foreach( $locations as $loc )
            {
				$search_content = $conn->getLocationSearchContent( $loc );
				$dom = new DOMXML( $search_content );

				foreach($dom->getTags("Provider") as $provider){
                    /**
                     * Business Detail
                     */
                    $merchant = $provider->getTags( 'MerchantDetails' )->first();
                    if( !empty( $merchant ))
                    {
                        $business = $merchant->getTags( 'BusinessDetail' )->first();
                        $address  = $merchant->getTags( 'AddressDetails' )->first();
                        $phone    = $merchant->getTags( 'MainPhone' )->first();
                        $website  = $merchant->getTags( 'WebSite' )->first();
                        $email    = $merchant->getTags( 'PublicEmail' )->first();

                        $merchant_info =
                            [
                                'name'    => $business->getAttribute( 'FullName' ),
                                'address' =>
                                    [
                                        $address->getAttribute( 'address_1' ),
                                        $address->getAttribute( 'address_2' )
                                    ],
                                'phone'   =>
                                    [
                                        'country_code' => $phone->getAttribute( 'country_code' ),
                                        'area_code'    => $phone->getAttribute( 'area_code' ),
                                        'number'       => $phone->getAttribute( 'number' )
                                    ],
                                'website' => $website? $website->getAttribute( 'url' ) : '',
                                'email'   => $email? $email->getAttribute( 'email_address' ) :''
                            ];
                    }
                    else {
                        $merchant_info =
                            [
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
                     * Product
                     */
                    foreach( $provider->getTags( 'Product' ) as $product )
                    {
                        $id   = $product->getAttribute( 'id' );
                        $name = $product->getAttribute( 'name' );

                        $defined_id = str_slug( $name );
                        $data[ $loc ][ $defined_id ] = [
                            'name'          => ucwords(strtolower( $name )),
                            'code'          => $product->getAttribute( 'code' ),
                            'images'        => $product->getImageUrls(),
                            'description'   => $product->getTags( 'Description' )->first()->getValue(),
                            'merchant'      => $merchant_info
                        ];
                    }

                }


			}

			return $data;
		});
    }

    public function packagesAvails( $location, $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        return Cache::remember( "ITX:PACKAGES:AVAILS:${location}:${at_date}:${adult_count}", cache_long_ttl(), function()
            use( $location, $industry_category, $industry_category_group, $at_date, $adult_count )
            {
                $conn           = $this->conn;

                $short_name     = $this->locationShortName( $location );
                $search_content = $conn->getProductAvailabilityContent( $short_name, $industry_category, $industry_category_group, $at_date, $adult_count );
                $dom            = new DOMXML( $search_content );

                $data = [];
                foreach( $dom->getTags( 'Provider' ) as $provider )
                {
                    foreach( $provider->getTags( 'Product') as $product )
                    {
                        $id   = $product->getAttribute( 'id' );
                        $name = $product->getAttribute( 'name' );

                        $defined_id = str_slug( $name );
                        $data[ $location ][ $defined_id ] = [
                            'shortname' => $short_name,
                            'name'      => ucwords(strtolower( $name ))
                        ];

                        foreach( $product->getTags( 'Days') as $day )
                        {
                            $data[ $location ][ $defined_id ][ 'availabilities' ][] =
                            [
                                'start_date'   => $day->getAttribute( 'start_date' ),
                                'finish_date'  => $day->getAttribute( 'finish_date' ),
                                'days'         => $day->getAttribute( 'days' ),
                                'price'        => $day->getAttribute( 'price' ),
                                'price_adults' => $day->getAttribute( 'price_adults' ),
                                'provider'     => $provider->getAttribute( 'short_name' ),
                            ];
                        }
                    }
                }

                return $data;
            });
    }

    public function packagesDetail( $location, $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        return Cache::remember( "ITX:PACKAGES:DETAIL:${location}:${at_date}:${adult_count}", cache_long_ttl(), function()
            use ( $location, $industry_category, $industry_category_group, $at_date, $adult_count )
        {
            $avails  = $this->packagesAvails( $location, $industry_category, $industry_category_group, $at_date, $adult_count );
            $avails  = reset( $avails ); //get first value

            $searchs = $this->packages([ $location ]);
            $searchs = reset( $searchs ); //get first value

            $data = [];
            if( !empty( $avails ))
            {
                foreach( $avails as $key=>$a )
                {
                    /**
                     * Remove array element if not exists in search api
                     */
                    if( empty( $searchs[ $key ]) )
                    {
                        unset( $avails[ $key ]);
                        continue;
                    }

                    $s = $searchs[ $key ];

                    foreach( $a[ 'availabilities'] as $ip=>$ap )
                    {
                        $ap[ 'book_uri' ] = $this->conn->getBookURI( $at_date, $s[ 'code' ], $ap[ 'provider']);
                        $a[ 'availabilities' ][ $ip ] = $ap;
                    }
                    $a = array_merge( $a, $s );

                    $data[ $key ] = $a;
                }
            }
            return $data;
        });
    }

    public function packageDetail( $slug, $location, $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        $slug_str = strtoupper( $slug );

        return Cache::remember( "ITX:PACKAGE:DETAIL:${slug}:${at_date}:${adult_count}", cache_long_ttl(), function()
            use ( $slug, $location, $industry_category, $industry_category_group, $at_date, $adult_count )
        {
            $details = $this->packagesDetail( $location, $industry_category, $industry_category_group, $at_date, $adult_count );

            $detail = array_get( $details, $slug );

            /**
             * Do request to search if not available in avails
             */
            if( empty( $detail ))
            {
                $packages = $this->packages([ $location ]);

                if( !empty( $packages ))
                {
                    $packages = reset( $packages );
                }

                $detail = array_get( $packages, $slug );
                $detail[ 'availabilities' ] = [];
            }

            return $detail;
        });
    }
}
