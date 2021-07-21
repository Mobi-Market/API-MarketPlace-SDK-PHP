<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 14/10/2016
 * Time: 13:29
 */

namespace Sdk\Parcel;

class ParcelList
{
    /**
     * @var array \Sdk\Parcel\Parcel
     */
    private $_parcelList = [];

    /**
     * @param $parcel \Sdk\Parcel\Parcel
     */
    public function addParcel($parcel): void
    {
        array_push($this->_parcelList, $parcel);
    }

    /**
     * @return array \Sdk\Parcel\Parcel
     */
    public function getParcels()
    {
        return $this->_parcelList;
    }
}
