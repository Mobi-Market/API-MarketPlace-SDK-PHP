<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 02/11/2016
 * Time: 09:40
 */

namespace Sdk\Soap\Product\Response;

use Sdk\Soap\Common\iResponse;

class GetBrandListResponse extends iResponse
{
    /**
     * @var array|null
     */
    private $_dataResponse = null;

    /**
     * @var array
     */
    private $_brandList = null;

    /**
     * @return array
     */
    public function getBrandList()
    {
        return $this->_brandList;
    }

    /**
     * GetAllowedCategoryTreeResponse constructor.
     * @param $response
     */
    public function __construct($response)
    {
        $reader = new \Laminas\Config\Reader\Xml();
        $this->_dataResponse = $reader->fromString($response);

        // Check For error message
        if (!$this->_hasErrorMessage()) {

            /**
             * Global informations
             */
            $this->_setGlobalInformations();

            $this->_brandList = [];

            $this->_generateBrandListFromXML($this->_dataResponse['s:Body']['GetBrandListResponse']['GetBrandListResult']['a:BrandList']);
        }
    }

    /**
     * Set the token ID and the seller login from the response
     */
    private function _setGlobalInformations(): void
    {
        $objInfoResult = $this->_dataResponse['s:Body']['GetBrandListResponse']['GetBrandListResult'];
        $this->_tokenID = $objInfoResult['TokenId'];
        $this->_sellerLogin = $objInfoResult['SellerLogin'];
    }

    /**
     * Check if the response has an error message
     * @return bool
     */
    private function _hasErrorMessage()
    {
        $objError = $this->_dataResponse['s:Body']['GetBrandListResponse']['GetBrandListResult']['ErrorMessage'];
        $this->_errorList = [];

        if (isset($objError['_']) && strlen($objError['_']) > 0) {
            $this->_hasError = true;
            $this->_errorMessage = $objError['_'];
            array_push($this->_errorList, $this->_errorMessage);
            return true;
        }
        return false;
    }

    private function _generateBrandListFromXML($brandList): void
    {
        foreach ($brandList['Brand'] as $brand) {
            array_push($this->_brandList, $brand['BrandName']);
        }
    }
}
