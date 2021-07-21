<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 04/11/2016
 * Time: 11:36
 */

namespace Sdk\Discussion;

class OrderQuestion extends GenericQuestion
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
     * @param string $orderNumber
     */
    public function setOrderNumber($orderNumber): void
    {
        $this->_orderNumber = $orderNumber;
    }
}
