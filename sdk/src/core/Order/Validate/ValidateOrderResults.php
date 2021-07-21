<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 18/10/2016
 * Time: 10:46
 */

namespace Sdk\Order\Validate;

class ValidateOrderResults
{
    private $_validateOrderResults = [];

    /**
     * @param $validateOrderResult \Sdk\Order\Validate\ValidateOrderResult
     */
    public function addValidateOrderResult($validateOrderResult): void
    {
        array_push($this->_validateOrderResults, $validateOrderResult);
    }

    /**
     * @return array of \Sdk\Order\Validate\ValidateOrderResult
     */
    public function getValidateOrderResultList()
    {
        return $this->_validateOrderResults;
    }
}
