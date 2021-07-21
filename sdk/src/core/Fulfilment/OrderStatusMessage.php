<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 10/05/2017
 * Time: 09:52
 */

namespace Sdk\Fulfilment;

/**
 * Order Status Message class
 */
class OrderStatusMessage
{
    /**
     * @var string
     */
    private $_status = null;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status): void
    {
        $this->_status = $status;
    }
}
