<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 14/10/2016
 * Time: 13:35
 */

namespace Sdk\Parcel;

class ParcelItemList
{
    /**
     * @var array \Sdk\Parcel\ParcelItem
     */
    private $_parcelItemList = [];

    /**
     * @param $parcelItem \Sdk\Parcel\ParcelItem
     */
    public function addParcelItem($parcelItem): void
    {
        array_push($this->_parcelItemList, $parcelItem);
    }

    /**
     * @return array \Sdk\Parcel\Parcel
     */
    public function getParcelItems()
    {
        return $this->_parcelItemList;
    }
}
