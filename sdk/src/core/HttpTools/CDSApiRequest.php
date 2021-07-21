<?php

declare(strict_types=1);

/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 26/09/2016
 * Time: 09:53
 */

namespace Sdk\HttpTools;

/**
 * Request in order to get a Token
 *
 * Class CDSApiRequest
 * @package Sdk\HttpTools
 */
class CDSApiRequest
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
     * @var string
     */
    private $_httpHeader = "";

    /**
     * @param $username
     * @param $password
     */
    private function _setHttpHeader($username, $password): void
    {
        $authentication = base64_encode($username . ':' . $password);
        $this->_httpHeader = ['Authorization: Basic ' . $authentication];
    }

    private function _setAdapaterOptions($username, $password): void
    {
        $this->_adapter->setOptions([
            'curloptions' => [
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                CURLOPT_USERPWD => "$username:$password",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            ],
        ]);
    }

    /**
     * CDSApiRequest constructor.
     * @param $username
     * @param $password
     * @param $urltoken
     */
    public function __construct($username, $password, $urltoken)
    {
        //$this->_setHttpHeader($username, $password);

        $this->_request = new \Laminas\Http\Request();
        $this->_request->setUri($urltoken);
        $this->_request->setMethod('GET');

        $this->_client = new \Laminas\Http\Client();
        $this->_adapter = new \Laminas\Http\Client\Adapter\Curl();
        $this->_client->setAdapter($this->_adapter);

        $this->_setAdapaterOptions($username, $password);
    }

    /**
     * @return string
     */
    public function execute()
    {
        $response = $this->_client->send($this->_request);
        return $response->getBody();
    }
}
