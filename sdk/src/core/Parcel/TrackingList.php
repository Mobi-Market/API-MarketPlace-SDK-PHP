<?php

declare(strict_types=1);

/*
 * Created by Cdiscount
 * Date : 25/01/2017
 * Time : 15:46
 */

namespace Sdk\Parcel;

class TrackingList
{
    /*
     * @var array
     */
    private $_trackingList = [];

    /*
     * @return array
     */
    public function getTrackings()
    {
        return $this->_trackingList;
    }

    /*
     * @param $tracking Sdk\Parcel\Tracking
     */
    public function addTrackingToLit($tracking): void
    {
        array_push($this->_trackingList, $tracking);
    }
}
