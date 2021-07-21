<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 04/10/2016
 * Time: 13:27
 */

namespace Sdk\HttpTools;

class CDSApiSoapRequest
{
    /**
     * @var \Laminas\Http\Client\Adapter\Curl
     */
    private $_adapter = null;

    /**
     * @var \Laminas\Http\Client
     */
    private $_client = null;

    /**
     * @var \Laminas\Http\Request
     */
    private $_request = null;

    /**
     * @var array header
     */
    private $_header = null;

    private $curlOptions = [
        CURLOPT_VERBOSE => false,
        CURLOPT_HEADER => true,
        CURLOPT_POST => true,
        CURLOPT_SSLVERSION => 4,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 600,
    ];

    /**
     * CDSApiSoapRequest constructor.
     *
     * @param $method
     * @param $headerMethodURL
     * @param $apiURL
     * @param $data
     */
    public function __construct($method, $headerMethodURL, $apiURL, $data, array $curlOptions = [])
    {
        $this->curlOptions = $curlOptions + $this->curlOptions;
        $this->_client = new \Laminas\Http\Client($apiURL);
        $this->_client->setMethod('post');
        $this->_client->setRawBody($data);
        $this->_client->setHeaders([
            'Content-Type: text/xml;charset=UTF-8',
            'SOAPAction: http://www.cdiscount.com/IMarketplaceAPIService/' . $method . '',
        ]);

        $this->_adapter = new \Laminas\Http\Client\Adapter\Curl();
        $this->_setAdapaterOptions($data, $apiURL);
        $this->_client->setAdapter($this->_adapter);
    }

    /**
     * @param $data
     * @param $url
     */
    private function _setAdapaterOptions($data, $url): void
    {
        $this->curlOptions[CURLOPT_URL]           = $url;
        $this->curlOptions[CURLOPT_POSTFIELDS]    = $data;

        $this->_adapter->setOptions([
            'curloptions' => $this->curlOptions,
        ]);
    }

    /**
     * @return string
     */
    public function call()
    {
        $response = $this->_client->send();
        return $response->getBody();
    }
}
