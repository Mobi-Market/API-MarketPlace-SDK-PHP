<?php

declare(strict_types=1);

/**
 * Description of ParcelActionResultList method
 * @Mail mohammed.sajid@ext.cdiscount.com
 * @author mohammed.sajid
 */

namespace Sdk\Order;

class ParcelActionResultList
{
    /*
     * @var array
     */
    private $_parcelActionResultList = null;

    /*
     * ParcelActionResultList constructor
     */
    public function __construct()
    {
        $this->_parcelActionResultList = [];
    }

    /*
     * return array
     */
    public function getParcelActionResultList()
    {
        return $this->_parcelActionResultList;
    }

    /**
     * @param $parcelActionResult
     */
    public function addParcelActionResultToArray($parcelActionResult): void
    {
        array_push($this->_parcelActionResultList, $parcelActionResult);
    }
}
