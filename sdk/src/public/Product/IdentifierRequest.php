<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 19/10/2016
 * Time: 11:08
 */

namespace Sdk\Product;

/**
 * Identifier request
 */
class IdentifierRequest
{
    /*
     * @var string
     */
    private $_identifierType = null;

    /*
     * @return string
     */
    public function getIdentifierType()
    {
        return $this->_identifierType;
    }

    /*
     * @param $identifierType
     */
    public function setIdentifierType($identifierType): void
    {
        $this->_identifierType = $identifierType;
    }

    private $_valueList = [];

    /**
     * @return array
     */
    public function getValueList()
    {
        return $this->_valueList;
    }

    /**
     * @param $value
     */
    public function addValue($value): void
    {
        array_push($this->_valueList, $value);
    }
}
