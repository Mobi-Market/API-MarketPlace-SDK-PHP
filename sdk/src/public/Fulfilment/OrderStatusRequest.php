<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 27/04/2017
 * Time: 16:08
 */

namespace Sdk\Fulfilment;

/**
 * Order Status Request
 */
class OrderStatusRequest
{
    /*
     * @var String
     */
    private $_corporation = null;

    /*
     * @return string
     */
    public function getCorporation()
    {
        return $this->_corporation;
    }

    /*
     * @param $corporation
     */
    public function setCorporation($corporation): void
    {
        $this->_corporation = $corporation;
    }

    /*
     * @var String
     */
    private $_customerOrderNumber = null;

    /*
     * @return string
     */
    public function getCustomerOrderNumber()
    {
        return $this->_customerOrderNumber;
    }

    /*
     * @param $customerOrderNumber
     */
    public function setCustomerOrderNumber($customerOrderNumber): void
    {
        $this->_customerOrderNumber = $customerOrderNumber;
    }
}
