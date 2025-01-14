<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 11/10/2016
 * Time: 09:57
 */

namespace Sdk\Order;

use Sdk\Common\Filter;

class OrderFilter extends Filter
{
    private $_fetchOrderLines = false;

    /**
     * @return boolean
     */
    public function isFetchOrderLines()
    {
        return $this->_fetchOrderLines;
    }

    /**
     * @param boolean $fetchOrderLines
     */
    public function setFetchOrderLines($fetchOrderLines): void
    {
        $this->_fetchOrderLines = $fetchOrderLines;
    }

    private $_states = [];

    /**
     * @return array
     */
    public function getStates()
    {
        return $this->_states;
    }

    /**
     * @param $state
     */
    public function addState($state): void
    {
        array_push($this->_states, $state);
    }

    /*
     * @var boolean
     */
    private $_fetchParcels = false;

    /*
     * @return boolean
     */
    public function isFetchParcels()
    {
        return $this->_fetchParcels;
    }

    /*
     * @param $fetchParcel
     */
    public function setFetchParcels($fetchParcel): void
    {
        $this->_fetchParcels = $fetchParcel;
    }

    /*
     * @var string
     */
    private $_orderType = OrderTypeEnum::None;

    /*
     * @return string
     */
    public function getOrderType()
    {
        return $this->_orderType;
    }

    /*
     * @param $orderType
     */
    public function setOrderType($orderType): void
    {
        $this->_orderType = $orderType;
    }

    /*
     * @var string
     */
    private $_partnerOrderRef = null;

    /*
     * @return string
     */
    public function getPartnerOrderRef()
    {
        return $this->_partnerOrderRef;
    }

    /*
     * @param $partnerOrderRef
     */
    public function setPartnerOrderRef($partnerOrderRef): void
    {
        $this->_partnerOrderRef = $partnerOrderRef;
    }

    /*
     * @var array
     */
    private $_orderReferenceList = [];

    /*
     * @return array
     */
    public function getOrderReferenceList()
    {
        return $this->_orderReferenceList;
    }

    /*
     * @param $orderReference
     */
    public function addOrderReferenceToList($orderReference): void
    {
        array_push($this->_orderReferenceList, $orderReference);
    }
}
