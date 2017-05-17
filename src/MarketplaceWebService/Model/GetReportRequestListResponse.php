<?php
/**
 *  PHP Version 5.
 *
 *  @category    Amazon
 *
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *
 *  @see        http://aws.amazon.com
 *
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *
 *  @version     2009-01-01
 */
/*******************************************************************************

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 *
 */

/**
 *  @see MarketplaceWebService_Model
 */
require_once 'MarketplaceWebService/Model.php';

/**
 * MarketplaceWebService_Model_GetReportRequestListResponse.
 *
 * Properties:
 * <ul>
 *
 * <li>GetReportRequestListResult: MarketplaceWebService_Model_GetReportRequestListResult</li>
 * <li>ResponseMetadata: MarketplaceWebService_Model_ResponseMetadata</li>
 *
 * </ul>
 */
class MarketplaceWebService_Model_GetReportRequestListResponse extends MarketplaceWebService_Model
{
    /**
     * Construct new MarketplaceWebService_Model_GetReportRequestListResponse.
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetReportRequestListResult: MarketplaceWebService_Model_GetReportRequestListResult</li>
     * <li>ResponseMetadata: MarketplaceWebService_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array(
            'GetReportRequestListResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_GetReportRequestListResult'),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebService_Model_GetReportRequestListResponse from XML string.
     *
     * @param string $xml XML string to construct from
     *
     * @throws Exception
     *
     * @return MarketplaceWebService_Model_GetReportRequestListResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportRequestListResponse');
        if ($response->length == 1) {
            return new self(($response->item(0)));
        } else {
            throw new Exception('Unable to construct MarketplaceWebService_Model_GetReportRequestListResponse from provided XML. 
                                  Make sure that GetReportRequestListResponse is a root element');
        }
    }

    /**
     * Gets the value of the GetReportRequestListResult.
     *
     * @return MarketplaceWebService_Model_GetReportRequestListResult
     */
    public function getGetReportRequestListResult()
    {
        return $this->fields['GetReportRequestListResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportRequestListResult.
     *
     * @param MarketplaceWebService_Model_GetReportRequestListResult $value
     */
    public function setGetReportRequestListResult($value)
    {
        $this->fields['GetReportRequestListResult']['FieldValue'] = $value;

        return;
    }

    /**
     * Sets the value of the GetReportRequestListResult  and returns this instance.
     *
     * @param MarketplaceWebService_Model_GetReportRequestListResult $value
     *
     * @return MarketplaceWebService_Model_GetReportRequestListResponse
     */
    public function withGetReportRequestListResult($value)
    {
        $this->setGetReportRequestListResult($value);

        return $this;
    }

    /**
     * Checks if GetReportRequestListResult  is set.
     *
     * @return bool
     */
    public function isSetGetReportRequestListResult()
    {
        return !is_null($this->fields['GetReportRequestListResult']['FieldValue']);
    }

    /**
     * Gets the value of the ResponseMetadata.
     *
     * @return MarketplaceWebService_Model_ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     *
     * @param MarketplaceWebService_Model_ResponseMetadata $value
     */
    public function setResponseMetadata($value)
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;

        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance.
     *
     * @param MarketplaceWebService_Model_ResponseMetadata $value
     *
     * @return MarketplaceWebService_Model_GetReportRequestListResponse
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);

        return $this;
    }

    /**
     * Checks if ResponseMetadata  is set.
     *
     * @return bool
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * XML Representation for this object.
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = '';
        $xml .= '<GetReportRequestListResponse xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';
        $xml .= $this->_toXMLFragment();
        $xml .= '</GetReportRequestListResponse>';

        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
