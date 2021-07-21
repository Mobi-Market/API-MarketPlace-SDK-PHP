<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 18/10/2016
 * Time: 15:11
 */

namespace Sdk\Order\Refund;

use Sdk\Common\CommonResult;

class SellerRefundResult extends CommonResult
{
    /*
     * @var string
     */
    private $_sellerProductId = null;

    /*
     * @var string
     */
    private $_ean = null;

    /*
     * @var enum
     */
    private $_motive = null;

    /*
     * @var decimal
     */
    private $_value = null;

    /*
     * SellerRefundResult constructor to initialize the errorList array of the commonResult
     */
    public function __construct()
    {
        $this->_errorList = [];
    }

    /*
     * @return string
     */
    public function getSellerProductIdResult()
    {
        return $this->_sellerProductId;
    }

    /*
     * @param $sellerProductId
     */
    public function setSellerProductIdResult($sellerProductId): void
    {
        $this->_sellerProductId = $sellerProductId;
    }

    /*
     * @return string
     */
    public function getEanResult()
    {
        return $this->_ean;
    }

    /*
     * @param $ean
     */
    public function setEanResult($ean): void
    {
        $this->_ean = $ean;
    }

    /*
     * @var enum
     */
    public function getMotiveResult()
    {
        return $this->_motive;
    }

    /*
     * @param $motive
     */
    public function setMotiveResult($motive): void
    {
        $this->_motive = $motive;
    }

    /*
     * @return decima
     */
    public function getValueResult()
    {
        return $this->_value;
    }

    /*
     * @param $value
     */
    public function setValueResult($value): void
    {
        $this->_value = $value;
    }
}
