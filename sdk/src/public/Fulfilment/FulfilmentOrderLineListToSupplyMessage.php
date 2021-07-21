<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 13/10/2016
 * Time: 18:12
 */

namespace Sdk\Order;

class FulfilmentOrderLineListToSupplyMessage
{
    /**
     * @var array \Sdk\Fulfilment\FulfilmentOrderLine
     */
    private $_orderLineList = [];

    /**
     * @param $orderLine \Sdk\Fulfilment\FulfilmentOrderLine
     */
    public function addOrderLine($orderLine): void
    {
        array_push($this->_orderLineList, $orderLine);
    }

    /**
     * @return array \Sdk\Fulfilment\FulfilmentOrderLine
     */
    public function getOrderLines()
    {
        return $this->_orderLineList;
    }
}
