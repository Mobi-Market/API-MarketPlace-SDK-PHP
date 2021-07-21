<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 10/10/2016
 * Time: 13:57
 */

namespace Sdk\Delivey;

class DeliveryMode
{
    /**
     * @var string
     */
    protected $_code = null;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * @param string $code
     */
    public function setCode($code): void
    {
        $this->_code = $code;
    }

    /**
     * @var string
     */
    protected $_name = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }
}
