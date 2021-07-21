<?php

declare(strict_types=1);

/**
 * Created by Zakaria Boukhris
 */

namespace Sdk\Fulfilment;

class SupplyOrderList
{
    /*
     * @var array
     */
    private $_supplyOrderList = [];

    /*
     * return array
     */
    public function getSupplyOrderList()
    {
        return $this->_supplyOrderList;
    }

    /**
     * @param $supplyOrderList
     */
    public function addSupplyOrderListToArray($supplyOrderList): void
    {
        array_push($this->_supplyOrderList, $supplyOrderList);
    }
}
