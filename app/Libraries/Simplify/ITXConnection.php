<?php

namespace App\Libraries\Simplify;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ServerException;
use Exception;

class ITXConnection
{
    private static $SOAP_URI        = 'http://apis.itx.co.id/CABS.WebServices/SearchService.asmx';
    private static $BOOK_URI        = 'https://book.itx.co.id/v4/Pages/Availability.aspx';
    private static $SOAP_ENTITY_URI = 'https://book.itx.co.id/v4/Services/EntityService.asmx';

    private static $SOAP_ACT_SEARCH         = 'http://www.v3leisure.com/CABS/V3Leisure.CABS.Services.WebServices/ProviderSearch';
    private static $SOAP_ACT_AVAILABILITY   = 'http://www.v3leisure.com/CABS/V3Leisure.CABS.Services.WebServices/ProductAvailability';
    private static $SOAP_ACT_ENTITY_SEARCH  = 'http://www.v3travel.com/CABS4/Services/EntityService/Search';

    /**
     * @return string
     */
    public function getChannelId()
    {
        return config( 'constants.vendors.itx.channel_id' );
    }

    /**
     * @return string
     */
    public function getChannelKey()
    {
        return config( 'constants.vendors.itx.channel_key' );
    }

    /**
     * @param  string $date
     * @param  string $product_code
     * @param  string $shortname
     * @return string
     */
    public function getBookURI( $date, $product_code, $shortname )
    {
        return sprintf( '%s?exl_dn=%s&exl_dte=%s&exl_prd=%s&exl_psn=%s',
                    self::$BOOK_URI,
                    $this->getChannelId(),
                    $date,
                    $product_code,
                    $shortname );
    }

    /**
     * @param  string $request_xml
     * @param  string $soap_action
     * @return string
     */
    protected function connect( $request_xml, $soap_action, $uri = null )
    {
        if( empty( $uri ))
        {
            $uri = self::$SOAP_URI;
        }

        $client = new Client;
        $request = new Request( 'POST', $uri,
                                [
                                    'Content-Type'  => 'text/xml; charset=UTF8',
                                    'SOAPAction'    => $soap_action
                                ], $request_xml);
        try
        {
            $response = $client->send( $request );

        }
        catch ( ServerException $e) { dd( $e->getResponse()->getBody()->getContents() ); }
        catch ( Exception $e ) { dd( $e->getMessage() ); }

        return $response;
    }

    /**
     * @param  string $location
     * @return string
     */
    public function getLocationSearchContent( $location )
    {
        $subquery_xml = $this->getLocationRequestSubQueryXML( $location );
        $request_xml  = $this->getSearchRequestXML( $subquery_xml );

        return $this->sendRequestXML( $request_xml, self::$SOAP_ACT_SEARCH );
    }

    /**
     * @param  string $industry_category       - "None" | "Accomodation" | "Non-Serviced Accommodation" | "Attraction" | "Events" | "Tours"
     * @param  string $industry_category_group - "Accomodation" | "Activities"
     * @param  string $at_date
     * @param  int    $adult_count
     * @return string
     */
    public function getProductAvailabilityContent( $short_name, $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        $subquery_xml = $this->getProductAvailabilitySubQueryXML( $industry_category, $industry_category_group, $at_date, $adult_count );
        $request_xml = $this->getProductAvailabilityRequestXML( $short_name, $subquery_xml );

        return $this->sendRequestXML( $request_xml, self::$SOAP_ACT_AVAILABILITY );
    }

    /**
     * @param  string|array  $location_ids
     * @return string
     */
    public function getLocationEntitySearchContent( $location_ids, $at_date = null )
    {
        if( !is_array( $location_ids ) )
        {
            $location_ids = [ $location_ids ];
        }

        $filter_xml  = $this->getEntitySearchGeolocationSubQueryXML( $location_ids );
        $request_xml = $this->getEntitySearchRequestXML( $filter_xml, $at_date );


        return $this->sendRequestXML( $request_xml, self::$SOAP_ACT_ENTITY_SEARCH, self::$SOAP_ENTITY_URI );
    }

    /**
     * @param  string $xml
     * @param  string $action
     * @return string
     */
    protected function sendRequestXML( $xml, $action_url, $service_uri = null )
    {
        $response    = $this->connect( $xml, $action_url, $service_uri );

        $content = $response->getBody()->getContents();
        return $content;
    }

    /**
     * @param  string $industry_category       - "None" | "Accomodation" | "Non-Serviced Accommodation" | "Attraction" | "Events" | "Tours"
     * @param  string $industry_category_group - "Accomodation" | "Activities"
     * @param  string $at_date
     * @param  int    $adult_count
     * @return string
     */
    protected function getProductAvailabilitySubQueryXML( $industry_category, $industry_category_group, $at_date, $adult_count )
    {
        return sprintf('
<IndustryCategory xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd">%s</IndustryCategory>
<IndustryCategoryGroup xmlns="">%s</IndustryCategoryGroup>
<SearchCriteria xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd">
  <LengthDays />
  <CommencingSpecific date="%s" />
  <Consumers>
    <Consumer adults="%s" children="0" concessions="0" />
  </Consumers>
</SearchCriteria>',
            $industry_category,
            $industry_category_group,
            $at_date,
            $adult_count );
    }

    /**
     * @param  string $short_name - can be multiple in comma separated string
     * @param  string $search_xml
     * @return string
     */
    protected function getProductAvailabilityRequestXML( $short_name, $search_xml )
    {
        $short_names = explode( ',', $short_name );

        $providers = '';
        foreach( $short_names as $sn )
        {
            $providers .= sprintf( '<ProviderRQ short_name="%s" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />', $sn );
        }

        return sprintf( '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <CABS_ProductAvailability_RQ synchronous="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_ProductAvailability_RQ.xsd">
      <Channels>
        <DistributionChannelRQ id="%s" key="%s" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
      </Channels>
      <Providers>
%s
      </Providers>
      <Query>
%s
      </Query>
    </CABS_ProductAvailability_RQ>
  </soap:Body>
</soap:Envelope>
        ',
        $this->getChannelId(),
        $this->getChannelKey(),
        $providers,
        $search_xml );
    }

    /**
     * @param  string $location
     * @return string
     */
    protected function getLocationRequestSubQueryXML( $location )
    {
        return sprintf('
<SearchGroup xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd">
    <SearchCriteriaCity contains="%s" />
</SearchGroup>', $location );
    }

    /**
     * @param  string $search_xml
     * @return string
     */
    protected function getSearchRequestXML( $search_xml )
    {
        return sprintf( '<?xml version="1.0" encoding="utf-8"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:cabs="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_ProviderSearch_RQ.xsd" xmlns:cabs1="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd">
    <soapenv:Header/>
    <soapenv:Body>
        <cabs:CABS_ProviderSearch_RQ synchronous="true">
        <!--Optional:-->
        <Channels xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_ProviderSearch_RQ.xsd">
            <CO_DistributionChannelRQType id="%s" key="%s"/>
        </Channels>
        <cabs:Query cache="On">
            <cabs1:IndustryCategory>Tours</cabs1:IndustryCategory>
            <IndustryCategoryGroup>Tours</IndustryCategoryGroup>
            <!--Optional:-->
%s
            </cabs:Query>
            <Response xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_ProviderSearch_RQ.xsd">
                <IncludeContactDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeMarketingDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeDescription include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeImages include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeProducts include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeProductDescription include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeProductRates include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeProductImages include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeProductMarketingDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeOptInDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeBusinessDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeBookingDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeProductPickupLocations include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeShortDescription include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeRegionGeocodeDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeECommerceDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
                <IncludeMerchantDetails include="true" xmlns="http://www.v3leisure.com/Schemas/CABS/1.0/CABS_Common.xsd" />
            </Response>
        </cabs:CABS_ProviderSearch_RQ>
    </soapenv:Body>
</soapenv:Envelope>',
            $this->getChannelId(),
            $this->getChannelKey(),
            $search_xml);
    }

    /**
     * @param  array  $location_ids
     * @return string
     */
    protected function getEntitySearchGeolocationSubQueryXML( $location_ids = [] )
    {
        $str = '';
        foreach( $location_ids as $id )
        {
            $str .= sprintf( '<LocationId>%s</LocationId>', $id );
        }

        return sprintf( '
<Geolocation MustHaveGeocode="false">
    <LocationIds>
%s
    </LocationIds>
</Geolocation>
        ', $str );
    }

    /**
     * @param  string $filter_xml
     * @return string
     */
    protected function getEntitySearchRequestXML( $filter_xml, $at_date )
    {
        return sprintf( '<?xml version="1.0"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
    <soap:Body>
        <Search xmlns="http://www.v3travel.com/CABS4/Services/EntityService">
            <EntitySearch_RQ Shortname="provider" xmlns="http://www.v3travel.com/CABS4/Services/EntityService/Models">
                <Availability MergeMethod="NoMerge">
<Window StartDate="%s" Size="12" />
<Specific Date="%s" Duration="2" />
                </Availability>
                <Filter Type="Service" MustBeInAdCampaign="true" MustBeInDealCampaign="true">
                    <Bookability IsBookable="false">
                        <BlockUnavailableResults xsi:nil="true" />
                        <GuestsCapability xsi:nil="true" />
                        <NightsCapability xsi:nil="true" />
                    </Bookability>
%s
                    <TagCriteria>
                        <IndustryCategoryGroups>
                            <IndustryCategoryGroup>Accommodation</IndustryCategoryGroup>
                            <IndustryCategoryGroup>Activity</IndustryCategoryGroup>
                        </IndustryCategoryGroups>
                    </TagCriteria>
                </Filter>
                <Output AdvancedContent="true" Features="true" Settings="false">
<Availability StartDate="%s" NumberOfDays="3" FlagCampaign="true" LowestRateOnly="false" MergeMethod="LowestRate" />
                    <Bookability />
                    <CommonContent Name="true" Description="true" Images="true" Capabilities="true" IndustryCategories="false" />
                    <Geocodes />
                    <Locations>
                        <Types>
                            <Type>City</Type>
                            <Type>Country</Type>
                            <Type>Landmark</Type>
                            <Type>Region</Type>
                            <Type>State</Type>
                        </Types>
                    </Locations>
                    <Children>
                        <Filter Type="Unspecified" MustBeInAdCampaign="false" MustBeInDealCampaign="false">
                            <Names />
                        </Filter>
                        <Output AdvancedContent="true" Features="true" Settings="false">
<Availability StartDate="%s" NumberOfDays="12" FlagCampaign="true" LowestRateOnly="false" MergeMethod="LowestRate" />
                            <Bookability />
                            <CommonContent Name="true" Description="true" Images="true" Capabilities="true" IndustryCategories="false" />
                            <Geocodes />
                        </Output>
                    </Children>
                    <Parents>
                        <Filter Type="Unspecified" MustBeInAdCampaign="false" MustBeInDealCampaign="false" />
                        <Output AdvancedContent="false" Features="false" Settings="false">
                            <CommonContent All="true" />
                        </Output>
                    </Parents>
                </Output>
            </EntitySearch_RQ>
        </Search>
    </soap:Body>
</soap:Envelope>',
            $at_date,
            $at_date,
            $filter_xml,
            $at_date,
            $at_date );
    }
}
