<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 18/10/2016
 * Time: 15:40
 */

namespace Sdk\Order\Refund;

class Request
{
    /**
     * @var string
     */
    private $_orderNumber = null;

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->_orderNumber;
    }

    /**
     * Request constructor.
     * @param $orderNumber
     */
    public function __construct($orderNumber)
    {
        $this->_orderNumber = $orderNumber;
    }

    /**
     * @var array
     */
    private $_sellerRefundRequestList = [];

    /**
     * @param $sellerRefundRequest \Sdk\Order\Refund\SellerRefundRequest
     */
    public function addSellerRefundRequest($sellerRefundRequest): void
    {
        array_push($this->_sellerRefundRequestList, $sellerRefundRequest);
    }

    /**
     * @return array
     */
    public function getSellerRefundRequestList()
    {
        return $this->_sellerRefundRequestList;
    }
}
