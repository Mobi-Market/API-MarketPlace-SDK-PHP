<?php

declare(strict_types=1);

/*
 * Created by CDiscount
 * Date: 31/01/2017
 * Time: 14:48
 */

namespace Sdk\Order\Refund;

/**
 * class contains the seller refund and commercial gesture request
 * @author mohammed.sajid
 */
class CreateRefundVoucherRequest
{
    /*
     * @var string
     */
    private $_orderNumber = null;

    /*
     * @var array
     */
    private $_sellerRefundList = null;

    /*
     * @var array
     */
    private $_commercialGestureList = null;

    /*
     * CreateRefundVoucherRequest constructor
     * @param $orderNumber
     */
    public function __construct($orderNumber)
    {
        $this->_orderNumber = $orderNumber;
        $this->_sellerRefundList = [];
        $this->_commercialGestureList = [];
    }

    /*
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->_orderNumber;
    }

    /*
     * @return array
     */
    public function getSellerRefundList()
    {
        return $this->_sellerRefundList;
    }

    /*
     * @param $sellerRefundRequest \Sdk\Order\Refund\SellerRefundRequest
     */
    public function addSellerRefundRequestToList($sellerRefundRequest): void
    {
        array_push($this->_sellerRefundList, $sellerRefundRequest);
    }

    /*
     * @return array
     */
    public function getCommercialGestureList()
    {
        return $this->_commercialGestureList;
    }

    /*
     * @param $refundInformation \Sdk\Order\Refund\RefundInformation
     */
    public function addRefundInformationToList($refundInformation): void
    {
        array_push($this->_commercialGestureList, $refundInformation);
    }
}
