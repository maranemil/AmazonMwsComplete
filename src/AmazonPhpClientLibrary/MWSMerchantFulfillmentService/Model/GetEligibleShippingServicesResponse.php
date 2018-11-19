<?php
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 23:32:33 UTC 2018
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetEligibleShippingServicesResult: MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResult</li>
 * <li>ResponseMetadata: MWSMerchantFulfillmentService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetEligibleShippingServicesResult' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetEligibleShippingServicesResult property.
     *
     * @return GetEligibleShippingServicesResult GetEligibleShippingServicesResult.
     */
    public function getGetEligibleShippingServicesResult()
    {
        return $this->_fields['GetEligibleShippingServicesResult']['FieldValue'];
    }

    /**
     * Set the value of the GetEligibleShippingServicesResult property.
     *
     * @param MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResult getEligibleShippingServicesResult
     * @return this instance
     */
    public function setGetEligibleShippingServicesResult($value)
    {
        $this->_fields['GetEligibleShippingServicesResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetEligibleShippingServicesResult is set.
     *
     * @return true if GetEligibleShippingServicesResult is set.
     */
    public function isSetGetEligibleShippingServicesResult()
    {
                return !is_null($this->_fields['GetEligibleShippingServicesResult']['FieldValue']);
            }

    /**
     * Set the value of GetEligibleShippingServicesResult, return this.
     *
     * @param getEligibleShippingServicesResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetEligibleShippingServicesResult($value)
    {
        $this->setGetEligibleShippingServicesResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSMerchantFulfillmentService_Model_ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetEligibleShippingServicesResponse']");
        if ($response->length == 1) {
            return new MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse from provided XML. 
                                  Make sure that GetEligibleShippingServicesResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<GetEligibleShippingServicesResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetEligibleShippingServicesResponse>";
        return $xml;
    }

}
